<?php $__env->startSection('title', '| Audit Report'); ?>


<?php $__env->startSection('content'); ?>
<?php if(!isset($report_list)): ?>
<nav>
   <ol class="breadcrumb" style="background: #3A4248;">
       <li class="breadcrumb-item active" aria-current="page"><a  style="color:#20a8d8;" href="<?php echo e(url('createReports?branch='. $branch .'&state='. $state .'&year=' . $year.'&quarter='.$quarter)); ?>">Create Report</a></li>
      </ol>
    </nav>
   <?php endif; ?>

 <div class="card-body">

					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

						<thead>

							<tr>
									<th scope="col">State</th>
									<th scope="col">Branch</th>
									<th scope="col">Year</th>
                                    <th scope="col">Quarter</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Last Updated Date</th>
									<th scope="col">Actions</th>

							</tr>

						</thead>

						<tbody>
							 <?php if(isset($report_list)): ?>
							<tr scope="row">
								<td>
									<?php echo e($getState->name); ?>

								</td>

								<td><?php echo e($getBranch->name); ?>

                                </td>
								<td><?php echo e(isset($year)?$year:''); ?></td>

								<td><?php if($quarter == 1){
									echo 'Aprl-June';}elseif($quarter == 2){echo 'July-Spt';}elseif($quarter == 3){echo 'Oct-Dec';}else{echo 'Jan-Mar';}?></td>
								<td><?php echo e(isset($getUser)? $getUser->name : ''); ?></td>
								<td><?php echo e($report_list->updated_at); ?></td>
								<td nowrap>
									<a href="#" class="btn btn-xs btn-info" title="View">
										<i class="fa fa-edit"></i>

                                    </a>

								</td>

							</tr>
							<?php else: ?>
							<tr scope="row">NO Data Found</tr>
                             <?php endif; ?>
						</tbody>

					</table>

				</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/audit_report/index.blade.php ENDPATH**/ ?>