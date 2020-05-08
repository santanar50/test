<?php $__env->startSection('title'); ?> App Users <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-home <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<div class="card-body">
<table class="table table-hover ">
<thead>
<tr>
<th>User</th>
<th>Email</th>
<th>Phone</th>
<th>Reg Date</th>
<th>Total Order</th>
</tr>

</thead>
<tbody>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="10%"><?php echo e($row->name); ?></td>
<td width="10%"><?php echo e($row->email); ?></td>
<td width="10%"><?php echo e($row->phone); ?></td>
<td width="10%"><?php echo e(date('d-M-Y',strtotime($row->created_at))); ?></td>
<td width="10%"><?php echo e($row->countOrder($row->id)); ?></td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>

</div>
</div>

<?php echo $data->links(); ?>


</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/dashboard/appUser.blade.php */ ?>