

<?php $__env->startSection('title', '| Branch'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <strong>Branch </strong>
    </div>
    <div class="card-body card-block">
        <?php echo Form::model($data,
                    array(
                    'method' => 'PATCH',
                    'url' =>'branch/'.Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                    ); ?>

            <div class="row">   
                <div class="col col-md-4">
                    <div class="form-group">
                        <label>Lob Name*</label>
                        <select name="lob" class="form-control">
                          <option value="">Choose Lob Name</option>
                          <option value="collection" <?php echo e(($data->lob=='collection')?'selected':''); ?>>Collection</option>
                          <option value="commercial_vehicle" <?php echo e(($data->lob=='commercial_vehicle')?'selected':''); ?>>Commercial Vehicle</option>
                          <option value="rural" <?php echo e(($data->lob=='rural')?'selected':''); ?>>Rural</option>
                          <option value="alliance" <?php echo e(($data->lob=='alliance')?'selected':''); ?>>Alliance</option>
                          <option value="credit_card" <?php echo e(($data->lob=='credit_card')?'selected':''); ?>>Credit Card</option>
                        </select>
                    </div>
                </div>          
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="multiple-select" class=" form-control-label">Regions</label>
                        <select class="form-control" name="region_id" id="country">
                            <option value="">Choose Region</option>
                            <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($region==$country->id): ?> selected <?php endif; ?> value="<?php echo e($country->id); ?>">
                                    <?php echo e($country->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="multiple-select" class=" form-control-label">State</label>
                        <select class="form-control" name="state" id="state">
                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="multiple-select" class=" form-control-label">City</label>
                        <select class="form-control" name="city_id" id="city">
                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="text-input" class=" form-control-label">Branch Name</label>
                        <input type="text" id="text-input" name="name" placeholder="Branch Name"
                                                                class="form-control" value="<?php echo e($data->name); ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="text-input" class=" form-control-label">Branch Id</label>
                        <input type="text" id="text-input" name="uuid" placeholder="Branch Id"
                                                            class="form-control" readonly value="<?php echo e($data->uuid); ?>">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="form-group">
                        <label for="text-input" class=" form-control-label">Location</label>
                        <input type="text" id="text-input" name="location" placeholder="Location"
                                                            class="form-control" value="<?php echo e($data->location); ?>">
                    </div>
                </div>
                <?php
                    $roles=['Collection_Manager','Area_Collection_Manager','Regional_Collection_Manager','Zonal_Collection_Manager','National_Collection_Manager','Group_Product_Head'];
                    $index=0;
                ?>
                <?php if(!empty($userData)): ?>
                <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col col-md-4">
                    <div class="form-group">
                            <label for="multiple-select" class=" form-control-label">Branch Manager</label>
                            <select class="form-control" name="<?php echo e(($index>0)?'manager_id'.$index:'manager_id'); ?>" id="users">
                                <option value="">Choose Manager</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($value['manager'])): ?>
                                    <option <?php if($user->id==$value['manager']->manager_id ): ?>selected <?php endif; ?> value="<?php echo e($user->id); ?>">
                                        <?php echo e($user->name); ?>

                                    </option>
                                    <?php else: ?>
                                    <option <?php if($user->id==$data->manager_id ): ?>selected <?php endif; ?> value="<?php echo e($user->id); ?>">
                                        <?php echo e($user->name); ?>

                                    </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                </div>
               

            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col col-md-4">
                <div class="form-group">
                    <label for="multiple-select" class=" form-control-label"><?php echo e(str_replace('_',' ',$item)); ?>

                            </label>
                    <select class="form-control" name="<?php echo e(($index>0)?$item.$index:$item); ?>" id="users">
                            <option value="">Choose <?php echo e(str_replace('_',' ',$item)); ?></option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->hasRole(str_replace('_',' ',$item))): ?>
                                <option value="<?php echo e($user->id); ?>" <?php echo e((isset($value[$item]) && $value[$item]->manager_id == $user->id)?'selected':''); ?>>
                                    <?php echo e($user->name); ?>

                                </option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col col-md-3">
                <div class="form-group">
                    <label for="multiple-select" class=" form-control-label">Product
                            </label>
                        <select class="form-control" name="<?php echo e(($index>0)?'product_id'.$index:'product_id'); ?>" id="owner_id">
                            <option selected>--Choose Product--</option>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>" <?php echo e(($k == $item->id)?'selected':''); ?>><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                </div>
            </div>
            <?php
                $index++;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="col col-md-1">
                <label></label>
                <div class="fa fa-plus text-right" id="add"></div>
            </div>
        </div>
            <div  id="shower">
            </div>
            <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>
        var users='';
                var idx=1
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->hasRole(str_replace('_',' ','Collection_Manager'))): ?>
                            users=users+`<option value="<?php echo e($user->id); ?>">
                                <?php echo e($user->name); ?>

                            </option>`
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                var pro=''
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       pro=pro+ `<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>`
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                var finalData=''
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                var conUser=''
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($user->hasRole(str_replace('_',' ',$item))): ?>
                            conUser=conUser+`<option value="<?php echo e($user->id); ?>">
                                <?php echo e($user->name); ?>

                            </option>`
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                finalData=finalData+ `<div class="col col-md-4">
                        <div class="form-group">
                            <label for="multiple-select" class=" form-control-label"><?php echo e(str_replace('_',' ',$item)); ?>

                                    </label>
                            <select class="form-control" name="<?php echo e($item); ?>${idx}" id="users">
                                    <option value="">Choose <?php echo e(str_replace('_',' ',$item)); ?></option>
                                 ${conUser}       
                            </select>
                        </div>
                    </div>`
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        jQuery('#add').on('click',function(e){
            var manager=`<div class="col col-md-4">
                <div class="form-group">
                    <label for="multiple-select" class=" form-control-label">Branch Manager
                            </label>
                    <select class="form-control" name="manager_id${idx}" id="users">
                            <option value="">Choose Branch Manager</option>
                            ${users}          
                        </select>

                </div>
            </div>`;
            manager=manager+finalData;
            manager=manager+`    <div class="col col-md-3">
                    <div class="form-group">
                        <label for="multiple-select" class=" form-control-label">Product
                                </label>
                            <select class="form-control" name="product_id${idx}" id="owner_id">
                                <option selected>--Choose Product--</option>
                                ${pro}
                            </select>
                    </div>
                </div>`
                manager=manager+`<div class="col col-md-1 text-center fa fa-trash" id="delete" data-id="${idx}"></div>`   
            jQuery('#shower').append(`<div class="row" id="custom${idx}">${manager}</div>`)
            idx=idx+1;
        })
        jQuery(document).on('click','#delete',function(e){
            var id=jQuery(this).data('id');
            // alert(id);
            jQuery('#custom'+id).remove();
        })
        jQuery(document).ready(function(){
            jQuery('#country').trigger('change');
        });
        jQuery(function () {
            jQuery(".sizes").select2();
        });

        jQuery('#country').change(function () {
            var cid = jQuery(this).val();
            var sid = <?php echo e($data->city->state->id); ?>;
            if (cid) {
                jQuery.ajax({
                    type: "get",
                    url: " <?php echo e(url('/getStates')); ?>/" + cid,
                    success: function (res) {
                        if (res) {
                            jQuery("#state").empty();
                            jQuery("#city").empty();
                            jQuery("#state").append('<option>Select State</option>');
                            jQuery.each(res, function (key, value) {
                                if(sid==key){
                                    jQuery("#state").append('<option selected value="' + key + '">' + value + '</option>');
                                    jQuery('#state').trigger('change');
                                }else{
                                    jQuery("#state").append('<option  value="' + key + '">' + value + '</option>');
                                }

                            });
                        }
                    }

                });
            }
        });
        jQuery('#state').change(function () {
            var sid = jQuery(this).val();
            var cid = <?php echo e($data->city->id); ?>;
            if (sid) {
                jQuery.ajax({
                    type: "get",
                    url: "<?php echo e(url('/getCities')); ?>/" + sid,
                    success: function (res) {
                        if (res) {
                            jQuery("#city").empty();
                            jQuery("#city").append('<option>Select City</option>');
                            jQuery.each(res, function (key, value) {
                                if(cid==key){
                                    jQuery("#city").append('<option selected value="' + key + '">' + value + '</option>');
                                }else{
                                    jQuery("#city").append('<option value="' + key + '">' + value + '</option>');
                                }

                            });
                        }
                    }

                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/branch/edit.blade.php ENDPATH**/ ?>