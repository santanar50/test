<?php $__env->startSection('title'); ?> Reporting <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-send <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="pull-up">
<div class="container">
<div class="row ">
<div class="col-lg-10 mx-auto  mt-2">
<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo Form::open(['url' => [$form_url],'target' => '_blank'],['class' => 'col s12']); ?>


<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail4">Select Store</label>
<select name="store_id" class="form-control">
<option value="">All Store</option>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">From Date</label>
<?php echo Form::text('from',null,['class' => 'js-datepicker form-control',]); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail4">To Date</label>
<?php echo Form::text('to',null,['class' => 'js-datepicker form-control']); ?>

</div>

</div>

<button type="submit" class="btn btn-success btn-cta">Get Report</button>


</form>
</div>
</div>
</div>
</div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/report/index.blade.php */ ?>