<?php $__env->startSection('title', '| Upload'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <strong>Bulk De-activate</strong>
            <a class="btn btn-primary btn-sm float-right" href="https://qmtool.qdegrees.com/bulk_dactivate_sample.xlsx">Download Sample</a>
        </div>
        <div class="card-body card-block">
            <?php echo Form::open(
                     array(
                       'route' => 'bulk_user_deactivate',
                       'class' => 'form-horizontal',
                       'role'=>'form',
                       'data-toggle'=>"validator",
                       'files' => true)
                     ); ?>

            <div class="row">
                
                <div class="col-sm-6">
                    <div class=" form-group">
                        <label for="user_excel" class=" form-control-label">Email Excel</label>
                        <input type="file" id="user_excel" name="user_excel" class="form-control-file">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if($errors->any()): ?>
                    <div class="text-danger">
                        
                        Errors
                    </div>
                    <div>
                        <ol class="ml-5">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="text-danger"><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </div>    
                    <?php endif; ?>
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
        
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.datepicker').datepicker({
                format: "mm-yyyy",
                viewMode: "months", 
                minViewMode: "months"
            });
    })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/acl/users/deactivate.blade.php ENDPATH**/ ?>