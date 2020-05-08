<?php $__env->startSection('title'); ?> Update Your Account Information <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-settings <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-8 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
<form action="<?php echo e($form_url); ?>" method="post" enctype="multipart/form-data">

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<input type="text" value="<?php echo e($data->name); ?>" class="form-control" id="inputEmail6" name="name" required="required">
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo e($data->email); ?>" required="required">
</div>

</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Username</label>
<input type="text" class="form-control" id="asd" name="username" value="<?php echo e($data->username); ?>" required="required">
</div>

<div class="form-group col-md-6">
<label for="asd">Logo</label>
<input type="file" class="form-control" id="asd" name="logo">
</div>
</div>

<?php if($data->logo): ?>
<img src="<?php echo e(Asset('upload/admin/'.$data->logo)); ?>" width="50">
<?php endif; ?>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputPassword4">Current Password</label>
<input type="password" class="form-control" id="inputPassword4" name="password" required="required">
</div>

<div class="form-group col-md-6">
<label for="inputPassword4">New Password <small style="color:red">(if u want to change current password)</small></label>
<input type="password" class="form-control" id="inputPassword4" name="new_password">
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>
</form>
</div>
</div>

</div>
</div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/dashboard/setting.blade.php */ ?>