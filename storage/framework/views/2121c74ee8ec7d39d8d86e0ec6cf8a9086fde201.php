<?php $__env->startSection('css'); ?>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <!-- Content -->

 <input type="hidden" name="url" id="url" value=<?php echo e(url('/')); ?>>

 <input type="hidden" name="token" id="token" value=<?php echo e(@csrf_token()); ?>>

    <div class="content" style="font-size: 13px !important;">

        <!-- Animated -->

        <div class="animated fadeIn">

            <!-- Widgets  -->

            <div class="card">

                <div class="card-header">

                <form action="<?php echo e(route('dashboard')); ?>" method="post"> 

                        <?php echo csrf_field(); ?>

                        <div class="row">

                            <div class="col-md-3"><h4>My Dashboard</h4></div>

                            <div class="col-md-9">

                                <label for="lob">Line of Business</label>

                                <select class="text-right" id="Productlob" name="productlob">

                                    <option value="all" <?php echo e((isset($old['productlob']) && $old['productlob']=='all')?'selected':''); ?>>All</option>

                                    <option value="collection" <?php echo e((isset($old['productlob']) && $old['productlob']=='collection')?'selected':''); ?>>IDFC First Collection</option>

                                    <option value="commercial_vehicle" <?php echo e((isset($old['productlob']) && $old['productlob']=='commercial_vehicle')?'selected':''); ?>>IDFC First Commercial Vehicle</option>

                                    <option value="rural" <?php echo e((isset($old['productlob']) && $old['productlob']=='rural')?'selected':''); ?>>IDFC First Rural</option>

                                    <option value="alliance" <?php echo e((isset($old['productlob']) && $old['productlob']=='alliance')?'selected':''); ?>>IDFC First Alliance</option>
                                    
                                     <option value="credit_card" <?php echo e((isset($old['productlob']) && $old['productlob']=='credit_card')?'selected':''); ?>>IDFC Credit Card</option>

                                </select>

                                <label for="audit_cycle">Audit Cycle</label>

                                <select class="text-right " name="lob_audit_cycle" id="lob_audit_cycle">

                                    <option value="current" <?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='current')?'selected':''); ?>>Current Audit Cycle</option>

                                <option value="last_2" <?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='last_2')?'selected':''); ?>>Last 2 Audit Cycle</option>

                                <option value="last_3" <?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='last_3')?'selected':''); ?>>Last 3 Audit Cycle</option>

                                <option value="last_4" <?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='last_4')?'selected':''); ?>>Last 4 Audit Cycle</option>

                                <!-- <option value="custom" <?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='custom')?'selected':''); ?>>Custom Audit Cycle</option> -->

                                </select>

                            <input type="text" style="<?php echo e((isset($old['lob_audit_cycle']) && $old['lob_audit_cycle']=='custom')?'':'display:none;'); ?>" value="<?php echo e((isset($old['lob_audit_cycle_custom']))? $old['lob_audit_cycle_custom']:''); ?>" name="lob_audit_cycle_custom" id="lob_audit_cycle_custom"/>

                                <input type="submit" class="text-right ml-2" value="Show Result">

                            </div>

                        </div>

                    </form> 

                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-3 col-md-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="stat-widget-five text-center">

                                        <div class="text-center dib">

                                            <div class="stat-heading">Total Audits</div>

                                            <div class="stat-text"><span class="count2"><?php echo e($totalAudit ?? 0); ?></span></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="stat-widget-five text-center">

                                        <div class="text-center dib">

                                            <div class="stat-heading">Total Pending</div>

                                            <div class="stat-text"><span class="count2"><?php echo e($totalpending ?? 0); ?></span></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="stat-widget-five text-center">

                                        <div class="text-center dib">

                                            <div class="stat-heading">Audit Submited - QC Pass</div>

                                            <div class="stat-text"><span class="count2"><?php echo e($totalpass ?? 0); ?></span></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="col-lg-3 col-md-6">

                            <div class="card">

                                <div class="card-body">

                                    <div class="stat-widget-five text-center">

                                        <div class="text-center dib">

                                            <div class="stat-heading">Audit Submited - QC Fail</div>

                                            <div class="stat-text"><span class="count2"><?php echo e($totalfaild ?? 0); ?></span></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- .animated -->

    </div>

<!-- /.content -->

    <div class="clearfix"></div>

<?php $__env->stopSection(); ?>





<?php $__env->startSection('js'); ?>

<script>

	jQuery(document).on('ready',function(){

        jQuery(window).on('load', function(){

            jQuery('.perSign').remove()

        })

    })

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/dashboardQa.blade.php ENDPATH**/ ?>