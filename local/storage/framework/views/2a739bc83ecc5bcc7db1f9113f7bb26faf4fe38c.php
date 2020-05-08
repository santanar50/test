
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Avilable From</label>
<select name="start_time" class="form-control">
<option>Select Time</option>
<?php ($ot = 0); ?>

<?php while($ot < 23): ?>

<?php ($ot++); ?>

<option value="<?php echo e($ot); ?>" <?php if($data->start_time == $ot): ?> selected <?php endif; ?>><?php echo e($ot); ?></option>
<option value="<?php echo e($ot.":30"); ?>" <?php if($data->start_time == $ot.':30'): ?> selected <?php endif; ?>> <?php echo e($ot); ?>:30</option>

<?php endwhile; ?>
<option value="00" <?php if($data->start_time == '00'): ?> selected <?php endif; ?>>00</option>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Avilable Till</label>
<select name="end_time" class="form-control">
<option>Select Time</option>
<?php ($ct = 0); ?>

<?php while($ct < 23): ?>

<?php ($ct++); ?>

<option value="<?php echo e($ct); ?>" <?php if($data->end_time == $ct): ?> selected <?php endif; ?>><?php echo e($ct); ?></option>
<option value="<?php echo e($ct.":30"); ?>" <?php if($data->end_time == $ct.":30"): ?> selected <?php endif; ?>><?php echo e($ct); ?>:30</option>

<?php endwhile; ?>
<option value="00" <?php if($data->end_time == '00'): ?> selected <?php endif; ?>>00</option>
</select>
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/user/type/form.blade.php */ ?>