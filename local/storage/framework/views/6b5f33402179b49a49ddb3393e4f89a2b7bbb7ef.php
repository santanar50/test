
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Select Store</label>
<select name="user_id" class="form-control" required="required">
<option value="<?php echo e(Auth::user()->id); ?>"><?php echo e(Auth::user()->name); ?></option>

</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Coupen Code</label>
<?php echo Form::text('code',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Description</label>
<?php echo Form::text('description',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Image (optional)</label>
<input type="file" name="img" class="form-control">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Min Cart Value</label>
<?php echo Form::number('min_cart_value',null,['id' => 'code','class' => 'form-control','placeholder' => 'Put 0 if u want to apply on every value']); ?>

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
<div class="form-group col-md-6">
<label for="inputEmail6">Discount Value</label>
<?php echo Form::number('value',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail6">Status</label>
<select name="status" class="form-control">
	<option value="0" <?php if($data->status == 0): ?> selected <?php endif; ?>>Active</option>
	<option value="1" <?php if($data->status == 1): ?> selected <?php endif; ?>>Disbaled</option>
</select>
</div>
</div>


<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/offer/form.blade.php */ ?>