<?php $__env->startSection('title'); ?> Update Your Account Information <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-settings <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-8 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo Form::model($data, ['url' => [$form_url],'files' => true,'method' => 'POST'],['class' => 'col s12']); ?>


<?php echo $__env->make('admin.user.form',['type' => 'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
</div>
</div>

</div>
</div>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/dashboard/setting.blade.php */ ?>