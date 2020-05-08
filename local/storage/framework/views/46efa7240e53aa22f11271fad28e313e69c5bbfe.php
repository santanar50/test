<?php $__env->startSection('title'); ?> <?php echo e($title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-cart <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<div class="row">
<div class="col-md-12" style="text-align: right;"><a href="<?php echo e(Asset(env('admin').'/order/add')); ?>" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Add New</a>&nbsp;&nbsp;&nbsp;</div>

</div>


<div class="card-body">
<table class="table table-hover ">
<thead>
<tr>
<th>ID</th>
<th>Store</th>
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
<td width="12%"><?php echo e($row->store); ?></td>
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
<div class="col-md-3"><?php echo e($currency.$i['price']); ?></div>
</div><hr>

<?php if(count($item->getAddon($i['id'],$row->id)) > 0): ?>

<?php $__currentLoopData = $item->getAddon($i['id'],$row->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="row" style="font-size: 12px">
<div class="col-md-6"><?php echo e($add->addon); ?></div>
<div class="col-md-3"><?php echo e($add->qty); ?></div>
<div class="col-md-3"><?php echo e($currency.$add->price); ?></div>
</div><hr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="row" style="font-size: 12px;color:red">
<div class="col-md-6">Delivery Charges : <?php echo e($currency.$row->d_charges); ?></div>
<div class="col-md-3">Discount : <?php echo e($currency.$row->discount); ?></div>
<div class="col-md-3">Total : <?php echo e($currency.$row->total); ?></div>
</div><hr>

<?php if($row->notes): ?>
<small style="color:blue">Notes : <?php echo e($row->notes); ?></small>
<?php endif; ?>
</td>


<td width="20%" style="text-align: right">

<?php echo $__env->make('admin.order.action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/order/index.blade.php */ ?>