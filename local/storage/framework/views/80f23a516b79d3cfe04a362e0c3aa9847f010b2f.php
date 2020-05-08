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
<label for="asd">Name</label>
<?php echo Form::text('l_name[]',$data->getSData($data->s_data,$l->id,0),['placeholder' => 'Name','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="asd">Address</label>
<?php echo Form::text('l_address[]',$data->getSData($data->s_data,$l->id,1),['placeholder' => 'Store Address','class' => 'form-control']); ?>

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
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['required' => 'required','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Email (<i>This will be username</i>)</label>
<?php echo Form::email('email',null,['required' => 'required','placeholder' => 'Email Address','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-3">
<label for="inputEmail6">Phone</label>
<?php echo Form::text('phone',null,['required' => 'required','placeholder' => 'Contact Number','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-3">
<label for="inputEmail4">Store Type</label>
<select name="store_type" class="form-control" required="required">
<option value="">Select</option>
<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e(trim($type)); ?>" <?php if($data->type == trim($type)): ?> selected <?php endif; ?>><?php echo e(trim($type)); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
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

<h1 style="font-size: 20px">Setup Commision Charges</h1>
<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Commission Type</label>
<select name="c_type" class="form-control">
<option value="0" <?php if($data->c_type == 0): ?> selected <?php endif; ?>>Fixed Value</option>
<option value="1" <?php if($data->c_type == 1): ?> selected <?php endif; ?>>Order %</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Commission Value</label>
<?php echo Form::text('c_value',null,['class' => 'form-control']); ?>

</div>
</div>

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
<label for="inputEmail6">Opening Time <i>(select 00 if always open)</i></label>
<select name="opening_time" class="form-control">
<option>Select</option>
<?php ($ot = 0); ?>

<?php while($ot < 23): ?>

<?php ($ot++); ?>

<option value="<?php echo e($ot.":00"); ?>" <?php if($data->opening_time == $ot): ?> selected <?php endif; ?>><?php echo e($ot.":00"); ?></option>
<option value="<?php echo e($ot.":30"); ?>" <?php if($data->opening_time == $ot.':30'): ?> selected <?php endif; ?>> <?php echo e($ot); ?>:30</option>

<?php endwhile; ?>
<option value="00" <?php if($data->opening_time == '00'): ?> selected <?php endif; ?>>00</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Closing Time <i>(select 23:30 if always open)</i></label>
<select name="closing_time" class="form-control">
<option>Select</option>
<?php ($ct = 0); ?>

<?php while($ct < 23): ?>

<?php ($ct++); ?>

<option value="<?php echo e($ct.":00"); ?>" <?php if($data->closing_time == $ct): ?> selected <?php endif; ?>><?php echo e($ct.":00"); ?></option>
<option value="<?php echo e($ct.":30"); ?>" <?php if($data->closing_time == $ct.":30"): ?> selected <?php endif; ?>><?php echo e($ct); ?>:30</option>

<?php endwhile; ?>
<option value="00" <?php if($data->closing_time == '00'): ?> selected <?php endif; ?>>00</option>
</select>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Estimated Delivery Time <small>(only in minutes)</small></label>
<?php echo Form::text('delivery_time',null,['placeholder' => 'e.g 20-25','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Approx Per Person Cost <small>(do not include any currency sign)</small></label>
<?php echo Form::text('person_cost',null,['placeholder' => 'e.g 200-250','class' => 'form-control']); ?>

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

<?php if(isset($images)): ?>
<div class="form-row">
<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="form-group col-md-2">
<img src="<?php echo e(Asset('upload/user/gallery/'.$img->img)); ?>" width="50%"><br>
<a href="<?php echo e(Asset(env('admin').'/imageRemove/'.$img->id)); ?>" onclick="return confirm('Are you sure?')" style="color:Red">Remove</a>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

</div>
</div>
<h3 style="font-size: 20px;">Select Location From Google Map <small>(For search according location in app)</small></h3>
<div class="card py-3 m-b-30">
<div class="card-body">

<?php echo $__env->make('admin.user.google', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
</div>
</div>
</div>
<button type="submit" class="btn btn-success btn-cta">Save changes</button><br><br>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/user/form.blade.php */ ?>