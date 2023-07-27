<?php $__env->startSection('title', '| Red alerts'); ?>



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

					<strong class="card-title">Red Alerts List</strong>

				</div>

				<div class="card-body">

					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

						<thead>

							<tr>

									<th scope="col">#</th>

									<!-- <th scope="col">

										Sheet Name

									</th> -->
									<th scope="col">

										Audit Type

									</th>
									<th scope="col">

										Branch

									</th>

									<th scope="col">

										Collection Agency Name

									</th>

									<th scope="col">

										Alert Raised Date

									</th>

									<th scope="col">

										Alert Raised By

									</th>

									<th scope="col">

										Alert Raised By(QC/QA)

                                    </th>

                                    <th scope="col">

										Alert Feedback Received Date

                                    </th>

                                    <th scope="col">

										Alert Approved Date

                                    </th>

                                    <th scope="col">

										Collection Manager Name

                                    </th>

                                    <th>
                                    	Product
                                    </th>

                                    <th>
                                    	Recipient Name
                                    </th>

                                    <th>
                                    	Recipient Designation
                                    </th>

									<th scope="col">

										Parameter name

                                    </th>

                                    <th scope="col">

										Sub parameter name

                                    </th>

                                    <th scope="col">

										Remark

                                    </th>

                                    <th scope="col">

										download files

									</th>

									<!-- <th scope="col">

										Actions

									</th> -->

							</tr>

						</thead>

						<tbody>

                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            

							<tr scope="row">

								<td><?php echo e($k+1); ?></td>

								<td>

									<?php echo e($row->sheet->type); ?>


								</td>
								<td>

									<?php echo e($row->audit->branch->name ?? '-'); ?>


								</td>

								<td>

									<?php echo e($row->audit->agency->name ?? '-'); ?>


								</td>

								<td>

									<?php echo e($row->created_at); ?>


								</td>

								<td>

									<?php echo e($row->audit->qa_qtl_detail->name ?? ''); ?>


								</td>
									
								<td>
									<?php echo e('-'); ?>

								</td>

								<td>
									<?php echo e($row->answer->created_at ?? '-'); ?>

								</td>

								<td>
									<?php echo e('-'); ?>

								</td>

								<td>
									<?php echo e($row->audit->user->name ?? ''); ?>

								</td>

								<td>
									<?php echo e($row->audit->product->name ?? ''); ?>

								</td>

								<td>
									<?php echo e('-'); ?>

								</td>

								<td>
									<?php echo e('-'); ?>

								</td>								

								<td>

									<?php echo e($row->parameter->parameter); ?>


                                </td>

                                <td>

									<?php echo e($row->subparameter->sub_parameter); ?>


                                </td>

                                <td>

									<?php echo e($row->message); ?>


                                </td>

                                <td class="text-center">

                                    <?php if($row->file==null): ?>

                                        <a href="#">File not Uploaded</a>

                                    <?php else: ?>

                                        <a href="<?php echo e(url('download-file/'.Crypt::encrypt($row->id))); ?>" target="_blank">Download</a>

                                    <?php endif; ?>

								</td>

                                <td nowrap>

									<!-- <div style="display: flex;">

										<?php echo e(Form::open([ 'method'  => 'delete', 'route' => [ 'user.destroy', Crypt::encrypt($row->id) ],'onsubmit'=>"delete_confirm()"])); ?>


										<button class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">

											<i class="la la-trash"></i>

										</button>

									</form> -->

									 <?php if($row->audit_id!=0 || $row->audit_id!=null): ?>

									

									<?php endif; ?> 

									



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

<?php $__env->startSection('js'); ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>

    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>

jQuery(document).ready(function() {

    jQuery('#kt_table_1').DataTable();

});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/RedAlert/list.blade.php ENDPATH**/ ?>