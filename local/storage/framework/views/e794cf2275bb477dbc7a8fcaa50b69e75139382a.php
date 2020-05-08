<?php $__env->startSection('title'); ?> Manage Items <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-silverware-fork-knife <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-md-12">
<div class="card py-3 m-b-30">

<div class="row">
<div class="col-md-12" style="text-align: right;"><a href="<?php echo e(Asset($link.'add')); ?>" class="btn m-b-15 ml-2 mr-2 btn-rounded btn-warning">Add New</a>&nbsp;&nbsp;&nbsp;</div>

</div>


<div class="card-body">
<table class="table table-hover ">
<thead>
<tr>
<th>Image</th>
<th>Category</th>
<th>Name</th>
<th>Description</th>
<th>Status</th>
<th style="text-align: right">Option</th>
</tr>

</thead>
<tbody>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="10%"><img src="<?php echo e(Asset('upload/item/'.$row->img)); ?>" width="90%"></td>
<td width="20%"><?php echo e($row->cate); ?></td>
<td width="20%"><?php echo e($row->name); ?></td>
<td width="17%"><?php echo e(substr($row->description,0,100)); ?></td>
<td width="17%">

<?php if($row->status == 0): ?>

<button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-success" onclick="confirmAlert('<?php echo e(Asset($link.'status/'.$row->id)); ?>')">Active</button>

<?php else: ?>

<button type="button" class="btn btn-sm m-b-15 ml-2 mr-2 btn-danger" onclick="confirmAlert('<?php echo e(Asset($link.'status/'.$row->id)); ?>')">Disabled</button>

<?php endif; ?>

</td>

<td width="15%" style="text-align: right">

<a href="<?php echo e(Asset($link.$row->id.'/edit')); ?>" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit This Entry"><i class="mdi mdi-border-color"></i></a>

<button type="button" class="btn m-b-15 ml-2 mr-2 btn-md  btn-rounded-circle btn-danger" data-toggle="tooltip" data-placement="top" data-original-title="Delete This Entry" onclick="deleteConfirm('<?php echo e(Asset($link."delete/".$row->id)); ?>')"><i class="mdi mdi-delete-forever"></i></button>


</td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/item/index.blade.php */ ?>