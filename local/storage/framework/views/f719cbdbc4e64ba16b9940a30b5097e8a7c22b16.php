
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control']); ?>

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
<label for="inputEmail6">Sort Order</label>
<?php echo Form::number('sort_no',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/user/category/form.blade.php */ ?>