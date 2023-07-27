<?php $__env->startSection('title', '| Yard'); ?>



<?php $__env->startSection('sh-detail'); ?>

Create New

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="row">

  <div class="col-md-6">



    <!--begin::Portlet-->

    <div class="kt-portlet">

      <div class="kt-portlet__head">

        <div class="kt-portlet__head-label">

          <h3 class="kt-portlet__head-title">

            Details

          </h3>

        </div>

      </div>



      <!--begin::Form-->

      	

        <form method="post" action="<?php echo e(action('UserController@updateProfile', Crypt::encrypt($rdata->id))); ?>"   accept-charset="UTF-8" class="kt-form" role="form" data-toggle="validator" enctype="multipart/form-data">

        <?php echo method_field('PATCH'); ?>

        <?php echo csrf_field(); ?>



        <div class="kt-portlet__body">



          <div class="form-group">

            <label>Full Name*</label>

            <input type="text" name="name" class="form-control" required value="<?php echo e($rdata->name); ?>" />

          </div>



          <div class="form-group">

            <label>Email*</label>

            <input type="text" name="email" class="form-control" required value="<?php echo e($rdata->email); ?>" readonly="readonly">

          </div>



          <div class="form-group">

            <label>Mobile*</label>

            <input type="text" name="mobile" class="form-control" required value="<?php echo e($rdata->mobile); ?>" readonly="readonly">

          </div>



           <div class="form-group">

            <div class="row">

              <div class="col col-md-6">

                <label>Avatar*</label>

                <input type="file" name="avatar" class="form-control"  />

              </div>

              <div class="col col-md-6">

                <!-- <img src="<?php echo e($rdata->avatar); ?>"  style="width: 80px; float: right;" /> -->

                <?php if(Auth::user()->avatar): ?>

                <img src='<?php echo e(Storage::url("company/_".Auth::user()->company_id."/user/_".Auth::Id()."/avatar/").Auth::user()->avatar); ?>' alt="Avatar" style="width: 80px; float: right;">

                <?php endif; ?>

              </div>

          </div>

          </div>





         

          

        </div>

        <div class="kt-portlet__foot">

          <div class="kt-form__actions">

            <button type="submit" class="btn btn-primary">Submit</button>

            <button type="reset" class="btn btn-secondary">Cancel</button>

          </div>

        </div>

      </form>



      <!--end::Form-->

    </div>



    <!--end::Portlet-->

  </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/acl/users/profile.blade.php ENDPATH**/ ?>