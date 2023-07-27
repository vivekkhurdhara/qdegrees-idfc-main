

<?php $__env->startSection('title', '| Roles'); ?>

<?php $__env->startSection('content'); ?>

	<div class="card">
		<div class="card-header">
		<strong>
			Roles</strong>

			<a href="<?php echo e(route('user.index')); ?>" class="btn btn-default pull-right">Users</a>
			<a href="<?php echo e(route('permissions.index')); ?>" class="btn btn-default pull-right">Permissions</a></h1>
		</div>
		<div class="card-body card-block table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th>Role</th>
					<th>Permissions</th>
					<th>Operation</th>
				</tr>
				</thead>

				<tbody>
				<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>

						<td><?php echo e($role->name); ?></td>

						<td><?php echo e(str_replace(array('[',']','"'),'', $role->permissions()->pluck('name'))); ?></td>
						<td>
							<a href="<?php echo e(url('roles/'.Crypt::encrypt($role->id).'/edit')); ?>" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

							

						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>

			</table>
			<a href="<?php echo e(URL::to('roles/create')); ?>" class="btn btn-success">Add Role</a>
		</div>



	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/acl/role/list.blade.php ENDPATH**/ ?>