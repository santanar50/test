
<div class="form-row">

<div class="form-group col-md-12">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Phone (This will be username)</label>
<?php echo Form::text('phone',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>

<div class="form-group col-md-6">
<?php if($data->id): ?>
<label for="inputEmail6">Change Password</label>
<input type="password" name="password" class="form-control">
<?php else: ?>
<label for="inputEmail6">Password</label>
<input type="password" name="password" class="form-control" required="required">
<?php endif; ?>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control">
	<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
	<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Disbaled</option>
</select>
</div>
</div>


<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/delivery/form.blade.php */ ?>