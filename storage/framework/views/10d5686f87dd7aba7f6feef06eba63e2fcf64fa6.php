

<?php $__env->startSection('title', '| Agency'); ?>

<!-- <?php $__env->startSection('sh-detail'); ?>
Users
<?php $__env->stopSection(); ?> -->

<?php $__env->startSection('content'); ?>
<div class="row">
		<div class="col-lg-12" style="margin-top:10x">
		</div>
</div>
<div class="animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Agency List</strong>
					<a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('excelDownloadAgency')); ?>" target="_blank">Export Agency</a>
				</div>
				<div class="card-body">
					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
						<thead>
							<tr>
									<th scope="col">#</th>
									<th scope="col">
										Agency Name
									</th>
									<th scope="col">
										Branch Name
									</th>
									<th scope="col">
										Agency Id
                                    </th>
                                    <th scope="col">
										Agency Manager
									</th>
                                    <th scope="col">
										Location
									</th>
                                    <th scope="col">
										Address
									</th>
                                    
									<th scope="col">
										Actions
									</th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr scope="row">
								<td><?php echo e($k+1); ?></td>
								<td>
									<?php echo e($row->name); ?>

								</td>
								<td>
									<?php echo e(isset($row->branch)?$row->branch->name:''); ?>

                                </td>
								<td><?php echo e($row->agency_id); ?></td>
								<td><?php echo e($row->agency_manager); ?></td>
								<td><?php echo e($row->location); ?></td>
								<td><?php echo e($row->addresss); ?></td>

								<td nowrap>
									<!-- <div style="display: flex;">
										<?php echo e(Form::open([ 'method'  => 'delete', 'route' => [ 'user.destroy', Crypt::encrypt($row->id) ],'onsubmit'=>"delete_confirm()"])); ?>

										<button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
											<i class="la la-trash"></i>
										</button>
									</form> -->
									<a href="<?php echo e(url('agency/'.Crypt::encrypt($row->id).'/edit')); ?>" class="btn btn-xs btn-info" title="View">
										<i class="fa fa-edit"></i>
                                    </a>
                                    <a href="<?php echo e(url('agency/'.Crypt::encrypt($row->id))); ?>" class="btn btn-xs btn-danger" title="View">
										<i class="fa fa-trash"></i>
									</a>

									<!-- </div> -->
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script>
	jQuery(document).on('ready',function(){
		jQuery('#kt_table_1').DataTable();
	})
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/agency/list.blade.php ENDPATH**/ ?>