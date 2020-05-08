<?php $__env->startSection('title'); ?> Welcome Slider <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-map-marker <?php $__env->stopSection(); ?>


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
<th>Sort No</th>
<th>Title</th>
<th style="text-align: right">Option</th>
</tr>

</thead>
<tbody>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td width="20%"><img src="<?php echo e(Asset('upload/slider/'.$row->img)); ?>" height="60"></td>
<td width="20%"><?php echo e($row->sort_no); ?></td>
<td width="40%"><?php echo e(strip_tags($row->title)); ?></td>


<td width="20%" style="text-align: right">

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
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/admin/slider/index.blade.php */ ?>