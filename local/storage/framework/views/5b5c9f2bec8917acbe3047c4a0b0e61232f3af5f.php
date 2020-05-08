<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','required' => 'required','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Username</label>
<?php echo Form::text('username',null,['id' => 'code','required' => 'required','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<?php if($data->id): ?>
<label for="inputEmail6">Change Password</label>
<input type="password" name="password" class="form-control">
<?php else: ?>
<label for="inputEmail6">Password</label>
<input type="password" name="password" class="form-control" required="required">
<?php endif; ?>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Assign Permission</label>
<select name="perm[]" class="form-control js-select2" multiple="true">
<?php $__currentLoopData = DB::table('perm')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($p->name); ?>" <?php if(in_array($p->name,$array)): ?> selected <?php endif; ?>><?php echo e($p->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/adminUser/form.blade.php */ ?>