<?php $__env->startSection('title'); ?> Add New <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-silverware-fork-knife <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo Form::model($data, ['url' => [$form_url],'files' => true],['class' => 'col s12']); ?>


<?php echo $__env->make('user.category.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
</div>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/user/category/add.blade.php */ ?>