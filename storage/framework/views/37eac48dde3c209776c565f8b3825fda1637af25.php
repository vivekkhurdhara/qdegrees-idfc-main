

<?php $__env->startSection('title', '| Branch'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <strong>Agency Repo</strong> 
        </div>
        <div class="card-body card-block">

            <!--begin::Form-->
            <?php echo Form::model($agencyrepo,
                      array(
                      'method' => 'PATCH',
                        'url' =>'agencyrepo/'.Crypt::encrypt($agencyrepo->id),
                        'class' => 'kt-form',
                        'data-toggle'=>"validator")
                      ); ?>


                <div class="row">
                    
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="text-input" class=" form-control-label">Agency Repo Name</label>
                            <input type="text" id="text-input" name="name" placeholder="Agency Repo Name"
                                                                class="form-control" value="<?php echo e($agencyrepo->name); ?>">
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="text-input" class=" form-control-label">Branch Name</label>
                            <select class="form-control" name="branch_name" id="branch_name">
                                <option value="">Choose Branch</option>
                                <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php echo e(($agencyrepo->branch_id==$item->id)?'selected':''); ?>><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="text-input" class=" form-control-label">Product</label>
                            <select class="form-control" id="product" name="product_name">

                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="text-input" class=" form-control-label">Location</label>
                            <input type="text" id="text-input" name="location" placeholder="location"
                                                                class="form-control" value="<?php echo e($agencyrepo->location); ?>">
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>
        jQuery(document).on('ready',function(e){
            getProduct("<?php echo e($agencyrepo->branch_id); ?>");
        })
        jQuery('#branch_name').change(function () {
            var id = jQuery(this).val();
            if (id) {
                getProduct(id)
            }
        });
     function getProduct(id){
        jQuery.ajax({
                    type: "get",
                    url: " <?php echo e(url('get_product')); ?>/"+id+'/branch',
                    success: function (res) {
                        var data='<option>Choose Product</option>';
                        if (res) {
                            var obj=res
                            obj.data.forEach(function(item, index){
                                data=data+'<option value="'+item.id+'">'+item.name+'</option>'
                            });  
                        }
                        jQuery('#product').html(data)
                        jQuery('#product').val('<?php echo e($agencyrepo->product_id); ?>')
                    }

                });
     } 
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/agencyrepo/edit.blade.php ENDPATH**/ ?>