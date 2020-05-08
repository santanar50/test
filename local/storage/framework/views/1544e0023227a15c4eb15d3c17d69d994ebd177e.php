<?php echo $__env->make('admin.language.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br>
<div class="tab-content" id="myTabContent1">

<?php $__currentLoopData = DB::table('language')->orderBy('sort_no','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="tab-pane fade show" id="lang<?php echo e($l->id); ?>" role="tabpanel" aria-labelledby="lang<?php echo e($l->id); ?>-tab">

<input type="hidden" name="lid[]" value="<?php echo e($l->id); ?>">


<div class="form-row">
<div class="form-group col-md-6">
<label for="asd">Item Name</label>
<?php echo Form::text('l_name[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Name','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="asd">Description</label>
<?php echo Form::text('l_desc[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Description','class' => 'form-control']); ?>

</div>
</div>


</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Select Category</label>
<select name="cate_id" class="form-control" required="required">
<option value="">Select</option>
<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($cate->id); ?>" <?php if($data->category_id == $cate->id): ?> selected <?php endif; ?>><?php echo e($cate->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Description</label>
<?php echo Form::text('description',null,['id' => 'code','placeholder' => 'Item Description','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Item Type</label>
<select name="nonveg" class="form-control">
<option value="0" <?php if($data->nonveg == 0): ?> selected <?php endif; ?>>Veg</option>
<option value="1" <?php if($data->nonveg == 1): ?> selected <?php endif; ?>>Nonveg</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control">
	<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
	<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Disbaled</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Image</label>
<input type="file" name="img" class="form-control">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Sort Order</label>
<?php echo Form::number('sort_no',null,['id' => 'code','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail6">Small Price</label>
<?php echo Form::text('small_price',null,['id' => 'code','placeholder' => 'Small Quantity Price','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Medium Price</label>
<?php echo Form::text('medium_price',null,['id' => 'code','placeholder' => 'Medium Quantity Price','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-4">
<label for="inputEmail6">Large/Full Price</label>
<?php echo Form::text('large_price',null,['id' => 'code','placeholder' => 'Large Quantity Price','class' => 'form-control']); ?>

</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/user/item/form.blade.php */ ?>