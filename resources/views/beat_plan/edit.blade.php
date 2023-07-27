@extends('layouts.master')

@section('sh-title')
Audit Alert Box
@endsection

@section('sh-detail')
Create New
@endsection

@section('content')
<?php
use App\User;
$beat_plan_created_by = User::where('id',$data->user_id)->first(['email'])->toArray();
?>
<div class="card">
  <div class="card-header">
      <strong>Audit Alert Box</strong>
  </div>
  <div class="card-body card-block">

      <!--begin::Form-->
      
        {!! Form::model($data,
                  array(
                  'method' => 'PATCH',
                    'url' =>'beat_plan/'.Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                  ) !!}
        {{-- <input type="hidden" name="company_id" value="{{AUth::User()->company_id}}"> --}}
     
        <div class="row">
          <div class="col-md-3 form-group">
            <label>Name*</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter Beat plan name" value="{{$data->name}}" required>
          </div>
          @role('Admin')
           <div class="col-md-3 form-group">
            <label>Created by</label>
            <input type="text"  class="form-control" value="{{$beat_plan_created_by['email']}}" readonly>
           </div>
          @endrole
          </div> 
          <div id="kt_repeater_qm_sheet">
            <div class="form-group  row" id="kt_repeater_qm_sheet">
              <div data-repeater-list="subs" class="col-lg-12">
                
                    @foreach($data->sub as $value)

                    <div data-repeater-item class="form-group align-items-center">
                  
                      <div class="row">
                    <input type="hidden" class ="sub_id_data" name="sub_id" value="{{$value->id}}">
                    <div class="col-md-3 form-group">
                      <label>From Date*</label>
                    <input type="text" id="date" name="date" class="form-control datepicker" placeholder="Choose from dates" value="{{$value->date}}" required>
                    </div>
                    <div class="col-md-3 form-group">
                      <label>To Date*</label>
                      <input type="text" id="to_date" name="to_date" class="form-control datepicker" placeholder="Choose to dates" value="{{$value->to_date}}" required>
                    </div>
                  <div class="col-md-3 form-group">
                      <label>Branch*</label>
                      <select name="branch_id"  id="{{'branchName'.$value->id}}" data-placeholder="Choose a Branch..." class="standardSelect form-control branchName" tabindex="2" onchange="GetSelectedBranchValue(this.value,<?php echo $value->id?>,'edit')" required>
                        <option value="" label="Branch Name"></option>
                        @foreach($branch as $k=>$item)
                        <option value="{{$item->id}}" {{($value->branch_id==$item->id)?'selected':''}}>{{$item->name}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-md-3 form-group">
                  <label>Total Branch Repo</label>
                  <input type="number" id="branch_repo" name="branch_repo" class="form-control branch_repo" placeholder="Enter Total Branch Repo" value="{{$value->branch_repo}}">
                </div>

                <div class="col-md-3 form-group">
                  <label>Total Agencies</label>
                  <input type="number" id="agencies" name="agencies" class="form-control agencies" placeholder="Enter Total Agencies" value="{{$value->agencies}}">
                </div>

                <div class="col-md-3 form-group">
                  <label>Total Agency Repo</label>
                  <input type="number" id="agency_repo" name="agency_repo" class="form-control agency_repo" placeholder="Enter Total Agency Repo" value="{{$value->agency_repo}}">
                </div>

                <div class="col-md-3 form-group">
                  <label>Yard</label>
                  <input type="number" id="yard" name="yard" class="form-control yard" placeholder="Enter Total Yard" value="{{$value->yard}}">
                </div>

                <div class="col-md-3 form-group">
                  <label>Yard Repo</label>
                  <input type="number" id="yard_repo" name="yard_repo" class="form-control yard_repo" placeholder="Enter Total Yard Repo" value="{{$value->yard_repo}}">
                </div>

                <?php $productop = json_decode($value->product);
                $selectedproid = array_flip($productop);
                //dd($selectedproid)?>
                <div class="col-md-3 form-group">
                  <label>Products</label>

                  <select name="product"  id="product" data-placeholder="Choose a Product..." class="standardSelect form-control product" tabindex="2" multiple>
                        <option value="" label="Select Product Name"></option>
                        @foreach($product as $k=>$item)
                        <option value="{{$item->id}}" {{(isset($selectedproid[$k]))?'selected':''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                  
                  
                </div>

                       

                <div class="col-md-3 form-group">
                  <label>Collection Managers*</label>
                  <input type="number" id="collection_manager" name="collection_manager" class="form-control collection_manager" placeholder="Enter Total CM" value="{{$value->collection_manager}}" required>
                    
                </div>

                <div class="col-md-3 form-group">
                  <label>Description</label>
                <textarea class="form-control"  id="" name="description">{{$value->description}}</textarea>
                </div>
                <div class="col-md-3">
                  <div data-repeater-delete="" class="btn-sm btn btn-danger btn-pill">
                    <span>
                      <i class="la la-trash-o"></i>
                      <span>Delete</span>
                    </span>
                  </div>
                </div>
                </div>
                </div>
                    @endforeach


                    <div data-repeater-item class="form-group align-items-center">
                  
                      <div class="row">
                    <input type="hidden" name="sub_id" value="">
                  <div class="col-md-3 form-group">
                      <label>From Date*</label>
                      <input type="text" id="date" name="date" class="form-control datepicker" placeholder="Choose from dates" required>
                  </div>
                  <div class="col-md-3 form-group">
                      <label>To Date*</label>
                      <input type="text" id="to_date" name="to_date" class="form-control datepicker" placeholder="Choose to dates" autocomplete="off" required>
                    </div>
                  <div class="col-md-3 form-group">
                      <label>Branch*</label>
                      <select name="branch_id" id="branchName_" data-placeholder="Choose a Branch..." class="standardSelect form-control branchName_" tabindex="2" required>
                        <option value="" label="Branch Name"></option>
                        @foreach($branch as $k=>$item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                  </div>

                  <div class="col-md-3 form-group">
                  <label>Branch Repo</label>
                  <input type="number" id="branch_repo" name="branch_repo" class="form-control branch_repo" placeholder="Enter Total Branch Repo" >
                </div>

                <div class="col-md-3 form-group">
                  <label>Agencies</label>
                  <input type="number" id="agencies" name="agencies" class="form-control agencies" placeholder="Enter Total Agencies" >
                </div>

                <div class="col-md-3 form-group">
                  <label>Agency Repo</label>
                  <input type="number" id="agency_repo" name="agency_repo" class="form-control agency_repo" placeholder="Enter Total Agency Repo" >
                </div>

                <div class="col-md-3 form-group">
                  <label>Yard</label>
                  <input type="number" id="yard" name="yard" class="form-control yard" placeholder="Enter Total Yard" >
                </div>

                <div class="col-md-3 form-group">
                  <label>Yard Repo</label>
                  <input type="number" id="yard_repo" name="yard_repo" class="form-control yard_repo" placeholder="Enter Total Yard Repo" >
                </div>

                <div class="col-md-3 form-group">
                  <label>Products</label>
                  <select class="form-control product" name="product" id="product" multiple required>
                      <option value=''>--Choose Product--</option>
                      @foreach($product as $data)
                      <option value="{{$data->id}}">{{$data->name}}</option>
                      @endforeach
                  </select>
                </div>

                <div class="col-md-3 form-group">
                  <label>Collection Managers*</label>
                  <input type="number" id="collection_manager" name="collection_manager" class="form-control collection_manager" placeholder="Enter Total CM" required>
                  
                    
                </div>
      
                <div class="col-md-3 form-group">
                  <label>Description</label>
                    <textarea class="form-control"  id="" name="description"></textarea>
                </div>
                <div class="col-md-3">
                  <div data-repeater-delete="" class="btn-sm btn btn-danger btn-pill">
                    <span>
                      <i class="la la-trash-o"></i>
                      <span>Delete</span>
                    </span>
                  </div>
                </div>
                  </div>

                  
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <div data-repeater-create="" class="btn btn-primary btn-sm">
                  <span>
                    <i class="fa fa-plus"></i>
                    <span>Add</span>
                  </span>
                </div>
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
</div>

@endsection

@section('js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script> --}}
<script>
  jQuery(document).ready(function() {
    jQuery('.datepicker').datepicker({
      format: "yyyy-mm-dd",
      minDate: new Date()
    });
  })
  
  jQuery('body').on('focus',".datepicker", function(){
    jQuery(this).datepicker({
      format: "yyyy-mm-dd",
      minDate: new Date()
    });
  })

  $('.branchName','.branchName_').on('click change', function(e) {
  if(e.type==='change' || this.id!=='branchName' || this.id!=='branchName_') {

      var sel = this.value;
      $("#branchName option[value='"+ sel + "']").attr("selected", "selected");
      if(this.id=='branchName_'){
        alert("ffg");
        $("#branchName_ option[value='"+ sel + "']").attr("selected", "selected");
      }
    //alert(this.value);
  }
  });

   // added by nisha for agencies list depends on branch

 /* jQuery('.standardSelect form-control branchName').change(function () {
            var id = jQuery(this).val();
            var agencyid = jQuery('.sub_id_data').val();
            alert(agencyid);
            if (id) {
                getAgency(id,type='edit',agencyid)
            }
        });*/

  /*$('.agencies').click(function() {
    var selected = $('#agencies option:selected');
    });
  $('.agencies_').click(function() {
    var selected = $('#agencies_ option:selected');
    });*/
  </script>
    @include('shared.form_js')
@endsection