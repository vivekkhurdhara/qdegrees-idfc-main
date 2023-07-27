@extends('layouts.master')

@section('title', '| Users')

@section('sh-detail')
    Create New
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Create User</strong>
        </div>
        <div class="card-body card-block">
            {!! Form::open(
                     array(
                       'route' => 'user.store',
                       'class' => 'form-horizontal',
                       'role'=>'form',
                       'data-toggle'=>"validator")
                     ) !!}

            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="User Name" class="form-control" value="{{old('name')}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                <div class="col-12 col-md-9"><input type="email" id="email-input" value="{{old('email')}}" name="email"
                                                    placeholder="Enter Email" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Mobile</label></div>
                <div class="col-12 col-md-9"><input type="text" id="email-input" name="mobile"
                                                    placeholder="Enter Mobile" class="form-control" value="{{old('mobile')}}">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="check-input" class=" form-control-label">Password Type</label></div>
                <div class="col-12 col-md-9">
                    <input type="radio" id="check-input" name="auto" value="automatic"><label for="check-input">Automatic</label>
                    <input type="radio" id="check-input2" name="auto" value="manual" checked><label for="check-input2">Manual</label>
                </div>
            </div>
            <div id="passwordDiv">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="email-input" name="password"
                                                        placeholder="Enter password" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Confirm Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="email-input" name="password_confirmation"
                                                        placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Multiple
                        select</label></div>
                <div class="col col-md-9">
                    <select name="role[]" id="multiple-select" multiple="" class="form-control">
                        @foreach($roles as $k=>$v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Create
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
            </form>
        </div>

    </div>


@endsection
@section('js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>

        jQuery(function () {
            jQuery(".sizes").select2();
        });
        jQuery('#check-input2').on('click',function(){
            jQuery('#passwordDiv').show();
        })
        jQuery('#check-input').on('click',function(){
            jQuery('#passwordDiv').hide();
        })
    </script>
@endsection