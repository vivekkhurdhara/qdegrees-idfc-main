
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <!-- Content -->
 <div>
  


<!-- Modal -->
<div class="row">

  <div class="col-lg-12">

  <div class="card">

      <div class="card-header">

          <strong>QA-QC Report</strong>

      </div>

      <div class="card-body card-block">

            <form method="POST" action="<?php echo e(route('internalexcel')); ?>" autocomplete="off">

                        <div class="row">

                            <?php echo csrf_field(); ?>

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

                                <label>Select Branch</label>

                                <select class="form-control" name="branch_name" id="branch_name"  value="<?php echo e(old('branch_name')); ?>">

                                    <option value="">All</option>
                                    
                                    <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($item->id); ?>" <?php echo e(($item->id == old('branch_name'))?'selected':''); ?> ><?php echo e($item->name); ?></option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                            </div>

                            <div class="col-md-3 form-group">

                                <label>Start Date*</label>

                                <input name="start_date" type="text" data-date-format="yyyy-mm-dd" class="form-control datepicker" required />

                            </div>

                            <div class="col-md-3 form-group">

                                <label>End Date*</label>

                                <input name="end_date" type="text" data-date-format="yyyy-mm-dd" class="form-control datepicker"/>

                            </div>
                        </div>
                    
                 <button type="submit" class="btn btn-primary">Download</button>
               
        </form>
    </div>
</div>
</div>
</div>
    

 <!-- end -->

 <!-- <a class="btn btn-sm btn-primary float-right" href="<?php echo e(route('dump-excel')); ?>">Dump Download</a> -->
 </div>

        <!-- /.content -->
        <div class="clearfix"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- <script src="<?php echo e(URL::asset('public/js/highmaps.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/js/exporting.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/js/in-all.js')); ?>"></script> -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="<?php echo e(URL::asset('public/js/dashboard.js')); ?>"></script>
<!-- <script src="https://code.highcharts.com/modules/pareto.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
<script>
     jQuery(document).ready(function() {

        jQuery('.datepicker').datepicker({
            dateFormat: "yyyy-mm-dd"
        });
        
       
    })
   
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/bulkUpload/reports.blade.php ENDPATH**/ ?>