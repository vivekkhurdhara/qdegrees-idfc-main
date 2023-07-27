<div>
   <div>Hi,</div><br/>
   <div>Greetings!</div><br/>
   <div>Please find attached Audit Alerts for <?php echo e($otherDetails['name']); ?> (<?php echo e($data->product->name ?? ''); ?>), details as mentioned below:</div>
   <br/>
   <div>
     <table style="border: 1px solid #dee2e6; text-align:center" >
        <thead style="background-color:rgb(192, 0, 0);">
            <tr>
                <th>S.No</th>
                <th>Region</th>
                <th>State</th>
                <th>City</th>
                <th>Collection Agency</th>
                <th>Product</th>
                <th>Collection Manager</th>
                <th>Number of Gaps Found</th>
                <th>GAP</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: .75rem;">1</td>
                <td style="padding: .75rem;"><?php echo e($otherDetails['region']); ?></td>
                <td style="padding: .75rem;"><?php echo e($otherDetails['state']); ?></td>
                <td style="padding: .75rem;"><?php echo e($otherDetails['city']); ?></td>
                <td style="padding: .75rem;"><?php echo e($otherDetails['name']); ?></td>
                <td style="padding: .75rem;"><?php echo e($data->product->name ?? ''); ?></td>
                <td style="padding: .75rem;"><?php echo e($otherDetails['collection'] ?? ''); ?></td>
                <td style="padding: .75rem;"><?php echo e($data->redAlert->count() ?? 0); ?></td>
                <td style="padding: .75rem;">
                    <ol>
                        <?php $__currentLoopData = $data->redAlert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($v->subParameter->sub_parameter); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </td>
                <td style="padding: .75rem;">
                    <ol>
                        <?php $__currentLoopData = $data->redAlert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($auditResult[$v->subParameter->id]); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </td>
            </tr>
        </tbody>
     </table>
   </div>
   <br/>
   <div>
    <a href="<?php echo e($url); ?>">Click here</a>
   </div>
</div><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/emails/alert.blade.php ENDPATH**/ ?>