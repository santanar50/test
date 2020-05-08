<?php $__env->startSection('title'); ?> App Pages <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-map-marker <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">

<?php echo Form::model($data, ['url' => [$form_url],'files' => true],['class' => 'col s12']); ?>


<?php echo $__env->make('admin.page.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>

</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script    src="<?php echo e(Asset('assets/vendor/summernote/summernote-bs4.min.js')); ?>"></script>
<script    src="<?php echo e(Asset('assets/js/summernote-data.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/summernote/summernote-bs4.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/admin/page/index.blade.php */ ?>