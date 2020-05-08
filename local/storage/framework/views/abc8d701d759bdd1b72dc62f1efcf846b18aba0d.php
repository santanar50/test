<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo $__env->make('admin.language.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>

<div class="tab-content" id="myTabContent1">

<?php $__currentLoopData = DB::table('language')->orderBy('sort_no','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="tab-pane fade show" id="lang<?php echo e($l->id); ?>" role="tabpanel" aria-labelledby="lang<?php echo e($l->id); ?>-tab">

<input type="hidden" name="lid[]" value="<?php echo e($l->id); ?>">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Coupen Code</label>
<?php echo Form::text('l_code[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Code','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="asd">Description</label>
<?php echo Form::text('l_desc[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Description','class' => 'form-control']); ?>

</div>
</div>

</div>
</div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Coupen Code</label>
<?php echo Form::text('code',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail6">Description</label>
<?php echo Form::text('description',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Min Cart Value <small>(optional)</small></label>
<?php echo Form::number('min_cart_value',null,['id' => 'code','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Discount Type</label>
<select name="type" class="form-control">
	<option value="0" <?php if($data->type == 0): ?> selected <?php endif; ?>>in %</option>
	<option value="1" <?php if($data->type == 1): ?> selected <?php endif; ?>>Fixed Amount</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-3">
<label for="inputEmail6">Discount Value</label>
<?php echo Form::number('value',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>

<div class="form-group col-md-3">
<label for="inputEmail6">Discount Upto <small>(optional)</small></label>
<?php echo Form::number('upto',null,['id' => 'code','class' => 'form-control',]); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control">
	<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
	<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Disbaled</option>
</select>
</div>
</div>


<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Select Store</label>
<select name="store[]" class="form-control js-select2" multiple="true">
<option value="">All Store</option>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($user->id); ?>" <?php if(in_array($user->id,$array)): ?> selected <?php endif; ?>><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/admin/offer/form.blade.php */ ?>