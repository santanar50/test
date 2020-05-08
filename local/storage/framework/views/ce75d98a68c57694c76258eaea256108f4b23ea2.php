<?php $__env->startSection('title'); ?> Add New Order <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-map-marker <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">

<?php echo Form::open(['url' => [$form_url],'files' => true,'method' => 'POST'],['class' => 'col s12']); ?>


<?php echo $__env->make('admin.order.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>
</div>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/order/add.blade.php */ ?>