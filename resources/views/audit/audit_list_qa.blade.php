@extends('layouts.master')

@section('sh-title')
Audited
@endsection

@section('sh-detail')
Call
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12" style="margin-top:10x">
	</div>
</div>
<div class="animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Audited List</strong>
				</div>
				<div class="card-body">
				@php
					$user=Auth::user();
				@endphp
				@if($user->hasRole(['Quality Control']))
					<form method="post" action="{{route('audited_list')}}">
						<div class="row">
							@csrf
							<div class="col-md-3 form-group">
								<label>Lob Name*</label>
								<select name="lob" class="form-control">
								<option value="">Choose Lob Name</option>
								<option value="collection">Collection</option>
								<option value="commercial_vehicle">Commercial Vehicle</option>
								<option value="rural">Rural</option>
								<option value="alliance">Alliance</option>
								<option value="credit_card">Credit Card</option>
								</select>
							</div>
							<div class="col-md-3 form-group">
								<label>Start Date*</label>
								<input name="start_date" type="text" class="form-control"/>
							</div>
							<div class="col-md-3 form-group">
								<label>End Date*</label>
								<input name="end_date" type="text" class="form-control"/>
							</div>
							<div class="col-md-3 form-group">
								<input name="search" type="submit" class="btn btn-sm btn-primary mt-4" value="Search"/>
							</div>
						</div>
					</form>
				@endif
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
			<thead>
				<tr>
						<th title="Field #1">#</th>
						<th title="Field #1">Month</th>
						<th title="Field #2">Audit Date</th>
						<th title="Field #3">Lob</th>
						<th title="Field #4">State</th>
						<th title="Field #5">Branch</th>
						<th title="Field #6">Product</th>
						<th title="Field #7">Audit Type</th>
						<th title="Field #8">Agency Name</th>
						<th title="Field #9">Collection Manager</th>
						<th title="Field #10">Collection Manager Email</th>
						<th title="Field #19">Collection Manager Emp id</th>
						<th title="Field #11">Auditor Name</th>
						<th title="Field #12">Visited Date & Time</th>
						<th title="Field #13">Status</th>
						<th title="Field #14">Audit Approved on</th>
						<th title="Field #15">Audit Approved Name</th>
						<th title="Field #16">Artifact</th>
						<th title="Field #17">Feedback</th>
						<th title="Field #18">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				@php
					$name='';
					switch ($row->qmsheet->type) {
						case 'agency':
							$name=$row->agency->name ?? '';
							$branch=$row->agency->branch->name ?? '';
							$state=$row->agency->branch->city->state->name ?? '';
							break;
						case 'branch':
							$name='';
							$branch=$row->branch->name ?? '';
							$state=$row->branch->city->state->name ?? '';
							break;
						case 'repo_yard':
							$name=$row->yard->name ?? '';
							$branch=$row->yard->branch->name ?? '';
							$state=$row->yard->branch->city->state->name ?? '';
							break;
						case 'branch_repo':
							$name=$row->branchRepo->name ?? '';
							$branch=$row->branchRepo->branch->name ?? '';
							$state=$row->branchRepo->branch->city->state->name ?? '';
							break;
						case 'agency_repo':
							$name=$row->agencyRepo->name ?? '';
							$branch=$row->agencyRepo->branch->name ?? '';
							$state=$row->agencyRepo->branch->city->state->name ?? '';
							break;
						
					}
					switch($ids[$row->id]->status ?? ''){
						case 1:
							$status='Pass with edit';
						break;
						case 2:
							$status='Pass';
						break;
						case 3:
							$status='Failed';
						break;
						default:
							$status=(in_array($row->id,$savedIds))?'Saved':'Submited';
						break;
					}
				@endphp
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{\Carbon\Carbon::parse($row->created_at)->formatLocalized("%b'%y")}}</td>
					<td>{{$row->created_at}}</td>
					<td>{{$row->qmsheet->lob ?? ''}}</td>
					<td>{{$state ?? ''}}</td>
					<td>{{$branch}}</td>
					<td>{{$row->product->name ?? ''}}</td>
					<td>{{$row->qmsheet->type ?? ''}}</td>
					<td>{{$name}}</td>
					<td>{{$row->user->name ?? ''}}</td>
					<td>{{$row->user->email ?? ''}}</td>
					<td>{{$row->user->code ?? ''}}</td>
					<td>{{$row->qa_qtl_detail->name ?? ''}}</td>
					<td>{{$row->created_at ?? ''}}</td>
					<td>{{$status ?? ''}}</td>
					<td>{{$ids[$row->id]->created_at  ?? ''}}</td>
					<td>{{$ids[$row->id]->user->name  ?? ''}}</td>
					<td>{{$row->artifact_count ?? 0}}</td>
					<td>{{$ids[$row->id]->feedback  ?? ''}}</td>
					{{-- <td>{{$row->raw_data->agent_name}}</td> 
					<td>{{($row->is_critical==1)?0:$row->overall_score.""}}</td>
					<td>{{$row->overall_score}} </td>--}}
					<td nowrap>
					@if($status=='Saved')
						<a href="{{url('audit_sheet/'.Crypt::encrypt($row->id).'/edit')}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="edit">
								<i class="fa fa-edit"></i>
						</a>
					@else
						<a href="{{url('audit_detail/'.Crypt::encrypt($row->id).'/view')}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
								<i class="fa fa-eye"></i>
						</a>
					@endif

                    </div>

                </td>
			</tr>
			@endforeach
			@if(count($data)==0)
				<tr>
					<td  colspan="9" class="text-center">No Record found</td>
				</tr>
			@endif
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('css')
{{-- @include('shared.table_css');--}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
{{-- @include('shared.table_js'); --}}
<script>
	jQuery(document).on('ready',function(){
		jQuery('input[name=start_date]').datepicker();
		jQuery('input[name=end_date]').datepicker();
		jQuery('#kt_table_1').DataTable({
			dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
        ]
    	});
	})
</script>
@endsection