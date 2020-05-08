<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-cart <?php $__env->stopSection(); ?>


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
<th>ID</th>
<th>User</th>
<th>Address</th>
<th>Items</th>
<th style="text-align: right">Option</th>
</tr>

</thead>
<tbody>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="6%">#<?php echo e($row->id); ?></td>
<td width="12%"><?php echo e($row->name); ?><br><?php echo e($row->phone); ?></td>
<td width="15%"><?php echo e($row->address); ?>,<?php echo e($row->city); ?></td>
<td width="40%">
	
<div class="row">
<div class="col-md-6"><b>Item</b></div>
<div class="col-md-3"><b>Qty</b></div>
<div class="col-md-3"><b>Price</b></div>
</div><hr>

<?php $__currentLoopData = $item->getItem($row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="row" style="font-size: 12px">
<div class="col-md-6"><?php echo e($i['type']." - ".$i['item']); ?></div>
<div class="col-md-3"><?php echo e($i['qty']); ?></div>
<div class="col-md-3"><?php echo e($i['price']); ?></div>
</div><hr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="row" style="font-size: 12px;color:red">
<div class="col-md-6">Delivery Charges : <?php echo e($row->d_charges); ?></div>
<div class="col-md-3">Discount : <?php echo e($row->discount); ?></div>
<div class="col-md-3">Total : <?php echo e($row->total); ?></div>
</div><hr>

</td>


<td width="20%" style="text-align: right">

<?php if($row->status == 1): ?>

<span style="font-size: 12px">Confirmed By <?php echo e($row->getType($row->id)); ?> at<br><?php echo e($row->status_time); ?></span><br><br>

<div class="btn-group" role="group">
<button id="btnGroupDrop<?php echo e($row->id); ?>" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop<?php echo e($row->id); ?>" style="padding: 10px 10px">

<a href="javascript::void()" data-toggle="modal" data-target="#slideRightModal<?php echo e($row->id); ?>">Redy To Dispatch</a><hr>

<a href="<?php echo e(Asset($link.'print/'.$row->id)); ?>" target="_blank">Print Bill</a><hr>


<a href="<?php echo e(Asset(env('user').'/orderStatus?id='.$row->id.'&status=2')); ?>" onclick="return confirm('Are you sure?')">Cancel Order</a><hr>

</div>
</div>

<?php echo $__env->make('user.order.dispatch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($row->status == 2): ?>

<span style="font-size: 12px">Cancelled By <?php echo e($row->getType($row->id)); ?> at<br><?php echo e($row->status_time); ?></span>

<?php elseif($row->status == 3): ?>

<span style="font-size: 12px">at <?php echo e($row->status_time); ?></span>

<?php else: ?>

<?php endif; ?>

</td>
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
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/order/index.blade.php */ ?>