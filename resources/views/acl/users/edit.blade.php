@extends('layouts.master')

@section('title', '| Users')

@section('sh-detail')
Edit
@endsection

@section('content')

  <div class="card">

    <!--begin::Portlet-->
    <div class="kt-portlet">
      <div class="card-header">
        <div class="kt-portlet__head-label">
          <h3 class="kt-portlet__head-title">
            Details
          </h3>
        </div>
      </div>

      <!--begin::Form-->
      
        {!! Form::model($data,
                  array(
                  'method' => 'PATCH',
                    'url' =>'user/'.Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                  ) !!}


        <div class="card-body card-block">

          <div class="form-group row">
            <div class="col-lg-6">
            <label>Name*</label>
            <input type="text" name="name" class="form-control" required value="{{$data->name}}">
          </div>
          <div class="col-lg-6">
            <label>Primary Email (as username)*</label>
            <input type="text" readonly name="email" class="form-control" required value="{{$data->email}}">
          </div>
         </div>
          <div class="form-group row">
            <div class="col-lg-6">
            <label>Mobile No.*</label>
            <input type="text" name="mobile" class="form-control" required value="{{$data->mobile}}">
          </div>
          <div class="col-lg-6">
            <label>Roles*</label>
            {{ Form::select('role[]',$roles,$rdata,['class'=>'form-control m-select2','id'=>'kt_select2_1','multiple'=>'multiple','required'=>'required']) }}
          </div>
        </div>


        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
      </div>
      </form>

      <!--end::Form-->
    </div>

    <!--end::Portlet-->
  </div>

@endsection
@section('js')
@endsection