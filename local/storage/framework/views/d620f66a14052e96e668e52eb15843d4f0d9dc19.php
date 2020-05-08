<?php $__env->startSection('title'); ?> Update Your Account Information <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-settings <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
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

<div class="form-group col-md-4">
<label for="asd">Logo</label>
<input type="file" class="form-control" id="asd" name="logo">
</div>
<div class="form-group col-md-2">
<?php if($data->logo): ?>
<img src="<?php echo e(Asset('upload/admin/'.$data->logo)); ?>" width="50" style="float: right">
<?php endif; ?>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Currency <small>(e.g $, &pound; &#8377;)</small></label>
<input type="text" class="form-control" id="asd" name="currency" value="<?php echo e($data->currency); ?>" required="required">
</div>
<div class="form-group col-md-6">
<label for="asd">SMS API <small style="color: red">Replace Number field with <b>{num}</b> Message field with <b>{msg}</b></small></label>
<input type="text" class="form-control" id="asd" name="username" value="<?php echo e($data->username); ?>" required="required">
</div>
</div>



<div class="form-row">
<div class="form-group col-md-12">
<label for="asd">Store Types <small>(Comma Seprated)</small></label>
<textarea class="form-control" id="asd" name="store_type" required="required"><?php echo e($data->store_type); ?></textarea>
</div>
</div>

</div>
</div>


<h4>PayPal Setting <small style="font-size: 12px">(Leave empty if want to disbale paypal)</small></h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="asd">PayPal Client ID</label>
<input type="text" class="form-control" id="asd" name="paypal_client_id" value="<?php echo e($data->paypal_client_id); ?>">
</div>
</div>

</div>
</div>

<h4>Social Links</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Facebook</label>
<input type="text" class="form-control" id="asd" name="fb" value="<?php echo e($data->fb); ?>">
</div>

<div class="form-group col-md-6">
<label for="asd">Instagram</label>
<input type="text" class="form-control" id="asd" name="insta" value="<?php echo e($data->insta); ?>">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Twitter</label>
<input type="text" class="form-control" id="asd" name="twitter" value="<?php echo e($data->twitter); ?>">
</div>

<div class="form-group col-md-6">
<label for="asd">Youtube</label>
<input type="text" class="form-control" id="asd" name="youtube" value="<?php echo e($data->youtube); ?>">
</div>
</div>

</div>
</div>

<h4>Change Password</h4>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputPassword4">Current Password</label>
<input type="password" class="form-control" id="inputPassword4" name="password" required="required" placeholder="Enter Your Current Password For Save Setting">
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/admin/dashboard/setting.blade.php */ ?>