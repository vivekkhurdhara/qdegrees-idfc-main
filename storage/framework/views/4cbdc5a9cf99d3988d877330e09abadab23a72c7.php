<?php $__env->startSection('title', '| Audit Cycle'); ?>



<?php $__env->startSection('sh-detail'); ?>

    Create New

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <div class="card">

        <div class="card-header">

            <strong>Create Audit Cycle</strong> 

        </div>

        <div class="card-body card-block">

            <?php echo Form::open(

                     array(

                       'url' => 'create-audit-cycle',

                       'class' => 'form-horizontal',

                       'role'=>'form',

                       'data-toggle'=>"validator")

                     ); ?>




            <div class="row">

            

            <div class="col col-md-4">

                <div class=" form-group">

                        <label for="text-input" class=" form-control-label">Cycle Name</label>

                        <input type="text" id="text-input" name="cycle_name" placeholder="cycle_name" class="form-control" value="" tabindex="1" required>

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





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/audit/create_audit_cycle.blade.php ENDPATH**/ ?>