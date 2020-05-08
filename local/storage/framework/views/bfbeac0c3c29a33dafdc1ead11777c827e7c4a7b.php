
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Title <small style="color: red">(Basic HTML Tag Allowed)</small></label>
<textarea name="title" class="form-control"><?php echo e($data->title); ?></textarea>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Image</label>
<input type="file" name="img" class="form-control" <?php if(!$data->id): ?> required="required" <?php endif; ?>>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Sort No</label>
<input type="number" name="sort_no" class="form-control" value="<?php echo e($data->sort_no); ?>">
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/admin/slider/form.blade.php */ ?>