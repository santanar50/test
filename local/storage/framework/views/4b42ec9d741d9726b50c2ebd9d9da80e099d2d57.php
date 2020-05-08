
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['required' => 'required','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Email (<i>This will be username</i>)</label>
<?php echo Form::email('email',null,['required' => 'required','placeholder' => 'Email Address','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Phone</label>
<?php echo Form::text('phone',null,['required' => 'required','placeholder' => 'Contact Number','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail4">City</label>
<select name="city_id" class="form-control" required="required">
<option value="">Select City</option>
<?php $__currentLoopData = $citys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($city->id); ?>" <?php if($data->city_id == $city->id): ?> selected <?php endif; ?>><?php echo e($city->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Address</label>
<?php echo Form::text('address',null,['required' => 'required','placeholder' => 'Full Address','class' => 'form-control']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Image (recommended size 600 * 400)</label>
<input type="file" name="img" class="form-control" <?php if(!$data->id): ?> required="required" <?php endif; ?>>
</div>
</div>

<?php if(isset($type)): ?>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Change Password (<i>Enter new password if you want to change current password.</i>)</label>
<input type="Password" name="password" class="form-control">
</div>
</div>

<?php else: ?>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Password</label>
<input type="Password" name="password" class="form-control" <?php if(!$data->id): ?> required="required" <?php endif; ?>>
</div>

<div class="form-group col-md-6">
<label for="inputEmail4">Status</label>
<select name="status" class="form-control">
<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Disbaled</option>
</select>
</div>
</div>
<?php endif; ?>

<?php if($data->img): ?>

<img src="<?php echo e(Asset('upload/user/'.$data->img)); ?>" width="50px"><br><br>

<?php endif; ?>

</div>
</div>

<h1 style="font-size: 20px">Delivery Charges & Timing</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Min Cart Value</label>
<?php echo Form::text('min_cart_value',null,['placeholder' => 'After this amount delivery will be free','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Delivery Charges</label>
<?php echo Form::number('delivery_charges_value',null,['class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Opening Time</label>
<?php echo Form::text('opening_time',null,['placeholder' => 'in 24hr formate e.g 14:00','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Closing Time</label>
<?php echo Form::text('closing_time',null,['placeholder' => 'in 24hr formate e.g 14:00','class' => 'form-control']); ?>

</div>
</div>
</div>
</div>

<h1 style="font-size: 20px">Additional Images</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail4">Select Images (for multiple select with CTRl)</label>
<input type="file" name="gallery[]" class="form-control" multiple="true">
</div>
</div>

<div class="form-row">
<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="form-group col-md-2">
<img src="<?php echo e(Asset('upload/user/gallery/'.$img->img)); ?>" width="50%"><br>
<a href="<?php echo e(Asset(env('admin').'/imageRemove/'.$img->id)); ?>" onclick="return confirm('Are you sure?')" style="color:Red">Remove</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/user/form.blade.php */ ?>