<?php echo $__env->make('user.order.dispatch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if($row->status == 0): ?>

<div class="btn-group" role="group">
<button id="btnGroupDrop<?php echo e($row->id); ?>" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop<?php echo e($row->id); ?>" style="padding: 10px 10px">

<a href="<?php echo e(Asset('order/edit/'.$row->id)); ?>">Edit Order</a><hr>
<a href="<?php echo e(Asset('orderStatus?id='.$row->id.'&status=1')); ?>" onclick="return confirm('Are you sure?')">Confirm Order</a><hr>

<a href="<?php echo e(Asset('orderStatus?id='.$row->id.'&status=2')); ?>" onclick="return confirm('Are you sure?')">Cancel Order</a><hr>

</div>
</div>


<?php elseif($row->status == 1): ?>

<?php if(!$row->dboy): ?>
<div class="btn-group" role="group">
<button id="btnGroupDrop<?php echo e($row->id); ?>" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Options </button>

<div class="dropdown-menu" aria-labelledby="btnGroupDrop<?php echo e($row->id); ?>" style="padding: 10px 10px">

<a href="<?php echo e(Asset('order/edit/'.$row->id)); ?>">Edit Order</a><hr>


<?php if($row->type == 2): ?>

<a href="<?php echo e(Asset('orderStatus?id='.$row->id.'&status=4')); ?>" onclick="return confirm('Are you sure?')">Give Order</a><hr>

<?php else: ?>

<a href="javascript::void()" data-toggle="modal" data-target="#slideRightModal<?php echo e($row->id); ?>">Assign Delivery Boy</a><hr>


<?php endif; ?>

<a href="<?php echo e(Asset('order/print/'.$row->id)); ?>" target="_blank">Print Bill</a><hr>

<a href="<?php echo e(Asset('orderStatus?id='.$row->id.'&status=2')); ?>" onclick="return confirm('Are you sure?')" style="color:red">Cancel Order</a>

</div>
</div>
<?php endif; ?>


<?php elseif($row->status == 2): ?>

<span style="font-size: 12px">Cancelled at<br><?php echo e($row->status_time); ?></span>

<?php elseif($row->status == 3): ?>

<span style="font-size: 12px">Picked by <?php echo e($row->dboy); ?> at<br><?php echo e($row->status_time); ?></span>

<a href="<?php echo e(Asset('order/print/'.$row->id)); ?>" target="_blank">Print Bill</a>


<?php endif; ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/user/order/action.blade.php */ ?>