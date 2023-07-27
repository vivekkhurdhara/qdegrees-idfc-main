<?php

namespace App\Http\Controllers;

use App\Language;
use App\Mail\UserCreated;
use App\Process;
use App\Region;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;
use App\User;
use App\UsersMaster;
use Auth;
//use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\QcAndQaChangesExport;

class UserController extends Controller
{
    public function index()
    {
        $data = User::with('roles')->get();
        return view('acl.users.list', ['data' => $data]);
    }

    public function create()
    {
        $roles = Role::all();

        //call masters
        return view('acl.users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            // 'password' => 'required|confirmed|min:8',
            'mobile' => 'required|digits:10',
            'role' => 'required',
        ]);
        $validator->sometimes('password', 'required|confirmed', function($input) {
            return $input->auto != 'automatic';
        });
        if ($validator->fails()) {

            return redirect()->back()->with('error', [$validator->errors()->all()])->withInput();
        } else {
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            if($request->auto == 'automatic'){
                $password=str_random(8);
                $data->password = bcrypt($password);
            }
            else{
                $password=$request->password;
                $data->password = bcrypt($request->password);
            }

            $data->save();
            $roles = $request['role']; //Retrieving the roles field
            //Checking if a role was selected
            if (isset($roles)) {
                foreach ($roles as $role) {
                    $role_r = Role::where('id', '=', $role)->firstOrFail();
                    $data->assignRole($role_r); //Assigning role to user
                }
            }
            $url=url('login');
            Mail::send('emails.createUser', ['user' => $data,'password'=>$password,'url'=>$url], function ($m) use ($data) {
               // $m->from('hello@app.com', 'Your Application');
                $m->to($data->email, $data->name)->subject('Welcome Audit');
            });
        }
        return redirect('user')->with('success', ['User created successfully.']);
//        return redirect('user')->with('success', 'User created successfully');
    }

    public function edit($id)
    {

        $roles = Role::pluck('name', 'id')->all();
        $data = User::find(Crypt::decrypt($id));
        $rdata = User::find(Crypt::decrypt($id))->roles->pluck('id')->toArray();

        return view('acl.users.edit', compact('roles', 'data', 'rdata'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',

            'mobile' => 'required',
            'role' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', [$validator->errors()->all()])->withInput();
        } else {
            $user = User::find(Crypt::decrypt($id));
            $user->name = $request->name;
            // $data->email = $request->email;
            $user->mobile = $request->mobile;
            $user->save();
            $roles = $request['role']; //Retreive all roles

            if (isset($roles)) {
                $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
            } else {
                $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
            }
            //return redirect('user')->with('success', ['User Updated successfully.']);
            return redirect('user')->with('success', 'User Updated Successfully');
        }

    }

    public function change_user_status($user_id, $status)
    {
        $user = User::find(Crypt::decrypt($user_id));
        $user->status = $status;
        $user->save();
        return redirect('user')->with('success', 'User status updated successfully');
    }

    public function customer_profile()
    {
        $user = Auth::User();
        if ($user->avatar) {
            $final_data['user'] = Storage::url($user->avatar);
        } else {
            $final_data['user'] = "http://via.placeholder.com/150x150";
        }

        return response()->json(['status' => 200, 'message' => "Success", 'data' => $user], 200);
    }


    public function profile()
    {

        $id = Auth::user()->id;
        $roles = Role::pluck('display_name', 'id')->all();
        $data = User::find($id);
        $rdata = User::find($id);

        //print_r($rdata);
        return view('acl.users.profile', ['data' => $data, 'roles' => $roles, 'rdata' => $rdata]);
        //return view('acl.users.profile',compact($rdata));
    }

    public function delImage($filePath)
    {

        $url = 'https://' . env('AWS_BUCKET') . '.s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com' . '/';
        $filePath = str_replace($url, "", $filePath);
        Storage::disk('s3')->delete($filePath);
    }


    public function updateprofile(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $data = User::find(Crypt::decrypt($id));
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;


            if ($request->avatar) {

                if ($data->avatar)
                    Storage::delete("company/_" . Auth::user()->company_id . "/user/_" . Auth::Id() . "/avatar/" . $data->avatar);

                $request->avatar->store("company/_" . Auth::user()->company_id . '/user/_' . Auth::Id() . "/avatar");
                $data->avatar = $request->avatar->hashName();

            }
            $data->save();


            return redirect('profile')->with('success', 'User Updated Successfully');
        }
    }

    public function destroy($id)
    {
        //Find a user with a given id and delete
        $user = User::findOrFail(Crypt::decrypt($id));
        $user->delete();

        return redirect()->route('users.index')
            ->with('success',
                'User successfully deleted.');
    }
    public function excelDownloadUser(){
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 3000);
        return Excel::download(new UsersExport, 'users.xlsx');
        // return Excel::download(new QcAndQaChangesExport, 'users.xlsx');
    }
}
