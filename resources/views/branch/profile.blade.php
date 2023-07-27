@extends('layouts.app')

@section('sh-title')
User
@endsection

@section('sh-detail')
Profile
@endsection

@section('main')
<div class="row">
  <div class="col-md-6">

    <!--begin::Portlet-->
    <div class="kt-portlet">
      <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title">
            Details
          </h3>
        </div>
      </div>

      <!--begin::Form-->
      	
        <form method="post" action="{{ action('UserController@updateProfile', Crypt::encrypt($rdata->id)) }}"   accept-charset="UTF-8" class="kt-form" role="form" data-toggle="validator" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="kt-portlet__body">

          <div class="form-group">
            <label>Full Name*</label>
            <input type="text" name="name" class="form-control" required value="{{$rdata->name}}" />
          </div>

          <div class="form-group">
            <label>Email*</label>
            <input type="text" name="email" class="form-control" required value="{{$rdata->email}}" readonly="readonly">
          </div>

          <div class="form-group">
            <label>Mobile*</label>
            <input type="text" name="mobile" class="form-control" required value="{{$rdata->mobile}}" readonly="readonly">
          </div>

           <div class="form-group">
            <div class="row">
              <div class="col col-md-6">
                <label>Avatar*</label>
                <input type="file" name="avatar" class="form-control"  />
              </div>
              <div class="col col-md-6">
                <!-- <img src="{{$rdata->avatar}}"  style="width: 80px; float: right;" /> -->
                @if(Auth::user()->avatar)
                <img src='{{Storage::url("company/_".Auth::user()->company_id."/user/_".Auth::Id()."/avatar/").Auth::user()->avatar}}' alt="Avatar" style="width: 80px; float: right;">
                @endif
              </div>
          </div>
          </div>


         
          
        </div>
        <div class="kt-portlet__foot">
          <div class="kt-form__actions">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
          </div>
        </div>
      </form>

      <!--end::Form-->
    </div>

    <!--end::Portlet-->
  </div>
</div>

@endsection
@section('js')
@include('shared.form_js')
@endsection