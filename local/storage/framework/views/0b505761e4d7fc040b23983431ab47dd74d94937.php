<?php $__env->startSection('title'); ?> Print Bill <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-file <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="pull-up">
<div class="container" id="printableArea">
<div class="row"  >
<div class="col-md-12 m-b-40">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-6">

<address class="m-t-10">
To,<br>
<span class="h4 font-primary"> <?php echo e($order->name); ?></span> <br>
<?php echo e($order->phone); ?><br>
<?php echo e($order->email); ?><br>
<?php echo e($order->address); ?><br>
<?php echo e($order->city); ?><br>


</address>
</div>
<div class="col-md-6 text-right my-auto">
<h1 class="font-primary">RECEIPT</h1>
<div class="">Order ID: #<?php echo e($order->id); ?></div>
<div class="">Date: <?php echo e(date('d-M-Y',strtotime($order->created_at))); ?></div>
</div>
</div>

<div class="table-responsive ">
<table class="table m-t-50">
<thead>
<tr>
<th width="40%">Item Name</th>
<th class="text-center">Price</th>
<th class="text-center">Quantity</th>
<th class="text-right">Total</th>
</tr>
</thead>
<tbody>
<?php ($total = []); ?>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php ($total[] = $item['qty'] * $item['price']); ?>

<tr>
<td width="40%"><?php echo e($item['type']); ?> - <?php echo e($item['item']); ?></td>
<td width="20%" class="text-center">&#x62f;&#x2e;&#x625; <?php echo e($item['price']); ?></td>
<td width="20%" class="text-center"><?php echo e($item['qty']); ?></td>
<td width="20%" class="text-right">&#x62f;&#x2e;&#x625; <?php echo e($item['qty'] * $item['price']); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="40%">&nbsp;</td>
<td width="20%">&nbsp;</td>
<td width="20%" class="text-center"><b>Total</b></td>
<td width="20%" class="text-right"><b>&#x62f;&#x2e;&#x625; <?php echo e(array_sum($total)); ?></b></td>
</tr>

<?php if($order->discount): ?>

<tr>
<td width="40%">&nbsp;</td>
<td width="20%">&nbsp;</td>
<td width="20%" class="text-center"><b>Discount</b></td>
<td width="20%" class="text-right"><b>&#x62f;&#x2e;&#x625; <?php echo e($order->discount); ?></b></td>
</tr>

<?php endif; ?>


<?php if($order->d_charges): ?>

<tr>
<td width="40%">&nbsp;</td>
<td width="20%">&nbsp;</td>
<td width="20%" class="text-center"><b>Delivery Charges</b></td>
<td width="20%" class="text-right"><b>&#x62f;&#x2e;&#x625; <?php echo e($order->d_charges); ?></b></td>
</tr>

<?php endif; ?>

<tr>
<td width="40%">&nbsp;</td>
<td width="20%">&nbsp;</td>
<td width="20%" class="text-center"><b>Sub Total</b></td>
<td width="20%" class="text-right"><b>&#x62f;&#x2e;&#x625; <?php echo e($order->total); ?></b></td>
</tr>

</tbody>
</table>
</div>
<div class="p-t-10 p-b-20">
<p class="text-muted ">
Services will be invoiced in accordance with the Service Description. You must
pay all undisputed invoices in full within 30 days of the invoice date, unless
otherwise specified under the Special Terms and Conditions. All payments must
reference the invoice number. Unless otherwise specified, all invoices shall be
paid in the currency of the invoice
</p>
<hr>
<div class="text-center opacity-75">
&copy; atmos 2019
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/order/print.blade.php */ ?>