<?php $__env->startSection('title'); ?> Orders <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-silverware-fork-knife <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card-body">
<p>Order ID : #<?php echo e($order->id); ?> 

<span style="float:right"><a href="<?php echo e(Asset(env('staff').'/deliverOrder/'.$order->id)); ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm m-b-15 ml-2 mr-2 btn-success">Deliver Order</a></span>

</p><hr>
</div>

<table width="100%" cellpadding="10" cellspacing="10">

<tr>
<td width="30%">&nbsp;<b>Customer</b></td>
<td width="70%" style="text-align: right;"><?php echo e($order->name); ?> &nbsp;</td>
</tr>

<tr>
<td width="30%">&nbsp;<b>Phone</b></td>
<td width="70%" style="text-align: right;"><?php echo e($order->phone); ?> &nbsp;</td>
</tr>

<tr>
<td width="30%">&nbsp;<b>Address</b></td>
<td width="70%" style="text-align: right;"><?php echo e($order->address); ?> &nbsp;</td>
</tr>

<tr>
<td width="30%">&nbsp;<b>Amount</b></td>
<td width="70%" style="text-align: right;"><?php echo e($order->total); ?> &nbsp;</td>
</tr>

</table>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('staff.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/staff/home.blade.php */ ?>