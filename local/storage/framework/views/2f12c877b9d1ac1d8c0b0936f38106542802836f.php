<?php $__env->startSection('title'); ?> Welcome ! <?php echo e(Auth::guard('admin')->user()->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-home <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container pull-up">
<div class="row">
<div class="col-lg-4 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-success"><i
class="mdi mdi-home h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">Total Store</h1>
<p class="text-muted fw-600" style="font-size: 18px"><?php echo e($store); ?></p>

</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-danger"><i
class="mdi mdi-account h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">Total Users</h1>
<p class="text-muted fw-600" style="font-size: 18px"><?php echo e($user); ?></p>

</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-info"><i
class="mdi mdi-cart h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">Total Orders</h1>
<p class="text-muted fw-600" style="font-size: 18px"><?php echo e($order); ?></p>

</div>
</div>
</div>
</div>
</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/dashboard/home.blade.php */ ?>