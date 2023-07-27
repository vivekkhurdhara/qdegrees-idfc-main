<?php if($type=='yard'): ?>
    <div class="col-md-3 form-group">
        <label>Yard name</label>
        <input type="text" name="agency_name" class="form-control" value="<?php echo e($yard->name ?? ''); ?>" disabled>
    </div>
    <div class="col-md-3 form-group">
        <label>Yard Manager</label>
        <input type="text" name="yard_manager" class="form-control" value="<?php echo e($yard->user->name ?? ''); ?>" data-id="<?php echo e($yard->user->id ?? ''); ?>" disabled>
        <input type="hidden" name="yard_manager_email" value="">
    </div>
    <div class="col-md-3 form-group yard_error" style="display:none">
        <label>Other</label>
        <span id="yard_error" class="form-controll" style="display:none"></span>
    </div>
    <div class="col-md-3 form-group">
        <label>Yard Address</label>
        <input type="text" name="agency_address" class="form-control" value="<?php echo e($yard->addresss ?? ''); ?>" disabled>
    </div>
<?php endif; ?>
<?php if($type=='agency'): ?>
    <div class="col-md-3 form-group">
        <label>Agency name</label>
        <input type="text" name="agency_name" class="form-control" value="<?php echo e($agency->name ?? ''); ?>" disabled>
    </div>
    
    
    <div class="col-md-3 form-group">
        <label>Agency Manager</label>
        <input type="text" name="agency_manager" class="form-control" value="<?php echo e($agency->agency_manager ?? ''); ?>">
    </div>
    <div class="col-md-3 form-group">
        <label>Agency Phone</label>
        <input type="text" name="agency_phone" class="form-control" value="<?php echo e($agency->agency_phone ?? ''); ?>">
    </div>
    <div class="col-md-3 form-group">
        <label>Agency Address</label>
        <input type="text" name="agency_address" class="form-control" value="<?php echo e($agency->addresss ?? ''); ?>" disabled>
    </div>
<?php endif; ?>
<?php if($type=='agency_repo'): ?>
    <div class="col-md-3 form-group">
        <label>Agency repo name</label>
        <input type="text" name="agency_repo_name" class="form-control" value="<?php echo e($AgencyRepo->name ?? ''); ?>" disabled>
    </div>
    <div class="col-md-3 form-group">
        <label>Agency repo Address</label>
        <input type="text" name="agency_repo_address" class="form-control" value="<?php echo e($AgencyRepo->location ?? ''); ?>" disabled>
    </div>
<?php endif; ?>
<?php if($type=='branch_repo'): ?>
    <div class="col-md-3 form-group">
        <label>Branch repo name</label>
        <input type="text" name="branch_repo_name" class="form-control" value="<?php echo e($BranchRepo->name ?? ''); ?>" disabled>
    </div>
    <div class="col-md-3 form-group">
        <label>Branch repo Address</label>
        <input type="text" name="branch_repo_address" class="form-control" value="<?php echo e($BranchRepo->location ?? ''); ?>" disabled>
    </div>
<?php endif; ?>
<div class="col-md-3 form-group">
    <label>Branch name</label>
    <input type="text" name="branch" class="form-control" value="<?php echo e($branchable->name ?? ''); ?>" disabled>
</div>
<div class="col-md-3 form-group">
    <label>City</label>
    <input type="text" name="city" class="form-control" value="<?php echo e($branchable->city->name ?? ''); ?>" disabled>
</div>
<div class="col-md-3 form-group">
    <label>location</label>
    <input type="text" name="location" class="form-control" value="<?php echo e($branchable->location ?? ''); ?>" disabled>
</div>
<?php
    $myData=[];
    $myType=[];
    $code='';
    $bucket='';
    $i=0;
    foreach($branchable->branchable as $item){ 
        if($item->type=='Collection_Manager'){
            $myData[$item->type][]=$item;
        }
        else{
            $myData[$item->type]=$item;
        }  
    }
    $myType=array_keys($myData);
function getSortOrder($c) {
    $sortOrder = ['Collection_Manager','Area_Collection_Manager','Regional_Collection_Manager','Zonal_Collection_Manager','National_Collection_Manager','Group_Product_Head'];
    $pos = array_search($c, $sortOrder);
    return $pos !== false ? $pos : 99999;
}

function mysort($a, $b) {
    if( getSortOrder($a) < getSortOrder($b) ) {
        return -1;
    }elseif( getSortOrder($a) == getSortOrder($b) ) {
        return 0;
    }else {
        return 1;
    }
}
usort($myType, "mysort");
?>

<?php $__currentLoopData = $myType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($item=='Collection_Manager'): ?>
    <div class="col-md-3 form-group">
        <label><?php echo e(str_replace('_',' ',$item)); ?></label>

        <select class="form-control" name="<?php echo e($item); ?>" id="collection_manager-select" disabled>
            <?php $__currentLoopData = $myData[$item]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($value->user->employee_id)): ?>
                    
                
             <?php
                 if(!empty($userData)) {
                    
                    if($userData['id'] == $value->user->id){?>
                        <option data-code="<?php echo e($value->user->employee_id); ?>" data-bucket="<?php echo e($value->buckrt ?? ''); ?>" value="<?php echo e($value->user->id); ?>" selected><?php echo e($value->user->name ?? ''); ?></option>
                   <?php }
                   else{
                    ?>
                         <option data-code="<?php echo e($value->user->employee_id); ?>" data-bucket="<?php echo e($value->buckrt ?? ''); ?>" value="<?php echo e($value->user->id); ?>" ><?php echo e($value->user->name ?? ''); ?></option>
                    <?php 
                   }
                 }else{?>
                       <option data-code="<?php echo e($value->user->employee_id); ?>" data-bucket="<?php echo e($value->buckrt ?? ''); ?>" value="<?php echo e($value->user->id); ?>"><?php echo e($value->user->name ?? ''); ?></option>
                    <?php
                 }?>

                
               
                <?php
                    if(count($myData[$item])==1){
                        $code=$value->user->employee_id ?? '';
                        $bucket=$value->bucket ?? '';
                    }
                ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="col-md-3 form-group">
        <label><?php echo e(str_replace('_',' ',$item)); ?> Emp Code</label>
        <input type="text" name="<?php echo e($item); ?>code" class="form-control" value="<?php echo e($code ?? ''); ?>" disabled>
    </div>
    <div class="col-md-3 form-group">
        <label><?php echo e(str_replace('_',' ',$item)); ?> bucket</label>
        <input type="text" name="<?php echo e($item); ?>_bucket" class="form-control" value="<?php echo e($bucket ?? ''); ?>" disabled>
    </div>
    <?php else: ?>
    <div class="col-md-3 form-group">
        <label><?php echo e(str_replace('_',' ',$item)); ?></label>
        <input list="adventure" type="text" name="<?php echo e($item); ?>" class="form-control" value="<?php echo e($myData[$item]->user->name ?? ''); ?>" disabled>
    </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/audit/branchQc.blade.php ENDPATH**/ ?>