<?php $__env->startSection('title'); ?> Push Notifications <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-send <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo Form::open(['url' => [$form_url],'files' => true],['class' => 'col s12']); ?>



<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Title</label>
<?php echo Form::text('title',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description (less then 250 words)</label>
<?php echo Form::textarea('desc',null,['id' => 'code','class' => 'form-control','required' => 'required','maxlength' => '250']); ?>

</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Send</button>


</form>
</div>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/admin/push/index.blade.php */ ?>