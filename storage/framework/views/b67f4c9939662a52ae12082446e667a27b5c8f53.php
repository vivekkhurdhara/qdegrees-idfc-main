

<?php $__env->startSection('title', '| Product Hierarchy'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Product Hierarchy</strong>
        </div>
        <div class="card-body card-block">
            <?php echo Form::open(
                     array(
                       'route' => 'doHierarchyUpdate',
                       'class' => 'form-horizontal',
                       'role'=>'form',
                       'data-toggle'=>"validator")
                     ); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Branch</label>
                        <select name="branch" id="branch" data-placeholder="Choose a Branch..." class="standardSelect form-control" tabindex="3">
                            <option>Choose a branch...</option>
                            <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>" <?php echo e(($bid==$value->id)?'selected':''); ?>><?php echo e($value->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Product Type</label>
                        <select name="type" id="type" data-placeholder="Choose a Product Type..." class="standardSelect form-control" tabindex="3">
                            <option>Choose a Products...</option>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"  <?php echo e(($pid==$value->id)?'selected':''); ?>><?php echo e($value->name); ?>(<?php echo e(($value->type==1)?'Recovery':'Regular'); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" id="next">
                <?php
                    $collection=[
                        'Area Collection Manager',
                        'Regional Collection Manager',
                        'Zonal Collection Manager',
                        'National Collection Manager',
                        'Group Product Head',
                        'Head of the Collections',
                    ];   
                ?>
            <?php $__currentLoopData = $collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-md-4">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label"><?php echo e($item); ?></label>
                        <select name="<?php echo e(str_replace(' ','_',$item)); ?>" id="type" data-placeholder="Choose a <?php echo e($item); ?>..." class="standardSelect form-control" tabindex="3">
                            <option value="">Choose a <?php echo e($item); ?>...</option>
                            <?php if(isset($finalUser[$item])): ?>
                                <?php $__currentLoopData = $finalUser[$item]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->id); ?>" <?php echo e((isset($productUser[str_replace(' ',"_",$item)]) && $productUser[str_replace(' ',"_",$item)]==$value->id)?'selected':''); ?>><?php echo e($value->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                        <input type="hidden" name="old[<?php echo e(str_replace(' ','_',$item)); ?>]" value="<?php echo e(isset($productUser[str_replace(' ',"_",$item)])?$productUser[str_replace(' ',"_",$item)]:''); ?>"/>
                    </div>
                </div>
            
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>

        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/product/productHierarchyEdit.blade.php ENDPATH**/ ?>