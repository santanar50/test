<div class="row">
<div class="col-lg-12 m-b-30">
<div class="card">
<div class="card-header">
<div class="card-title">Latest Orders</div>

<div class="card-controls">

<a href="#" class="js-card-refresh icon"> </a>

</div>

</div>

<div class="table-responsive">

<table class="table table-hover table-sm ">
<thead>
<tr>
<th>Order ID</th>
<th>Store</th>
<th>User</th>
<th>Address</th>
<th>Status</th>
<th>Order Time</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
<tr>

<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="10%">#<?php echo e($row->id); ?></td>
<td width="20%"><?php echo e($row->store); ?>

<br>
<?php if($row->type == 0): ?>

<small style="color:blue">Home Delivery</small>

<?php else: ?>

<small style="color:green">Pickup</small>


<?php endif; ?>
<td width="15%"><?php echo e($row->name); ?><br><?php echo e($row->phone); ?></td>
<td width="15%"><?php echo e($row->address); ?></td>
<td width="15%"><?php echo $row->getStatus($row->id); ?></td>
<td width="15%"><?php echo e(date('d-M-Y',strtotime($row->created_at))); ?></td>
<td width="15%"><?php echo $__env->make('admin.order.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tr>

</tbody>
</table>

</div>

</div>
</div>
</div>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/admin/dashboard/order.blade.php */ ?>