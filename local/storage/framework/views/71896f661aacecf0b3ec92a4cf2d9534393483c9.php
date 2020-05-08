<h4 style="color: white;">About Us Page</h4>
<div class="card py-3 m-b-30">
<div class="card-body">
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description</label>
<textarea id="summernote" name="about_us"><?php echo $data->about_us; ?></textarea>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Image</label>
<input type="file" name="about_img" class="form-control">

<?php if($data->about_img): ?>

<br><img src="<?php echo e(Asset('upload/page/'.$data->about_img)); ?>" height="60"> 

<a href="<?php echo e(Asset($form_url.'/add?remove=about_img')); ?>" onclick="return confirm('Are you sure?')" style="color:red">Remove</a>

<?php endif; ?>

</div>
</div>

</div>
</div>

<h4>How it Works</h4>
<div class="card py-3 m-b-30">
<div class="card-body">
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description</label>
<textarea id="summernote2" name="how"><?php echo $data->how; ?></textarea>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Image</label>
<input type="file" name="how_img" class="form-control" <?php if(!$data->id): ?> required="required" <?php endif; ?>>

<?php if($data->how_img): ?>

<br><img src="<?php echo e(Asset('upload/page/'.$data->how_img)); ?>" height="60">

<a href="<?php echo e(Asset($form_url.'/add?remove=how_img')); ?>" onclick="return confirm('Are you sure?')" style="color:red">Remove</a>

<?php endif; ?>

</div>
</div>

</div>
</div>

<h4>Faq's</h4>
<div class="card py-3 m-b-30">
<div class="card-body">
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description</label>
<textarea id="summernote3" name="faq"><?php echo $data->faq; ?></textarea>
</div>
</div>

</div>
</div>

<h4>Contact Us</h4>
<div class="card py-3 m-b-30">
<div class="card-body">
<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Description</label>
<textarea id="summernote4" name="contact_us"><?php echo $data->contact_us; ?></textarea>
</div>
</div>

</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button><br><br>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/admin/page/form.blade.php */ ?>