
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Select City</label>
<select name="city_id" class="form-control">
<option value="">All Cities</option>
<?php $__currentLoopData = $citys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($city->id); ?>" <?php if($data->city_id == $city->id): ?> selected <?php endif; ?>><?php echo e($city->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Banner Position</label>
<select name="position" class="form-control" required="required">
<option value="">Select</option>
<option value="0" <?php if($data->position == 0): ?> selected <?php endif; ?>>Top (1024 * 1024)</option>
<option value="2" <?php if($data->position == 2): ?> selected <?php endif; ?>>Bottom (600*300)</option>
</select>
</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Select Restaurants <small>(These selected store will list up on banner click)</small></label>
<select name="store[]" class="form-control js-select2" multiple>
<option value="">All</option>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($user->id); ?>" <?php if(isset($array) && in_array($user->id,$array)): ?> selected <?php endif; ?>><?php echo e($user->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Image</label>
<input type="file" name="img" class="form-control" <?php if(!$data->id): ?> required="required" <?php endif; ?>>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control" required="required">
<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Active</option>
</select>
</div>
</div>

<?php if($data->id): ?>

<img src="<?php echo e(Asset('upload/banner/'.$data->img)); ?>" height="100"><br><br>

<?php endif; ?>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>



<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/admin/banner/form.blade.php */ ?>