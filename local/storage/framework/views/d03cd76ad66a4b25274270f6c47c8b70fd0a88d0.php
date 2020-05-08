<div class="card py-3 m-b-30">
<div class="card-body">
<?php echo $__env->make('admin.language.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</div>
<div class="tab-content" id="myTabContent1">
<?php ($i = 0); ?>
<?php $__currentLoopData = DB::table('language')->orderBy('sort_no','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php ($i++); ?>

<div class="tab-pane fade show" id="lang<?php echo e($l->id); ?>" role="tabpanel" aria-labelledby="lang<?php echo e($l->id); ?>-tab">

<input type="hidden" name="lid[]" value="<?php echo e($l->id); ?>">

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">About Us</label>
<textarea id="desc<?php echo e($i); ?>" name="l_about_us[]"><?php echo $data->getSData($data->s_data,$l->id,0); ?></textarea>
</div>
</div>

</div>
</div>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">How it Works</label>
<textarea id="how<?php echo e($i); ?>" name="l_how[]"><?php echo $data->getSData($data->s_data,$l->id,1); ?></textarea>
</div>
</div>

</div>
</div>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Faq's</label>
<textarea id="faq<?php echo e($i); ?>" name="l_faq[]"><?php echo $data->getSData($data->s_data,$l->id,2); ?></textarea>
</div>
</div>

</div>
</div>

<div class="card py-3 m-b-30">
<div class="card-body">

<div class="form-row">
<div class="form-group col-md-12">
<label for="inputEmail6">Contact Us</label>
<textarea id="con<?php echo e($i); ?>" name="l_contact_us[]"><?php echo $data->getSData($data->s_data,$l->id,3); ?></textarea>
</div>
</div>

</div>
</div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<h4>About Us Page</h4>
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
</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button><br><br>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/page/form.blade.php */ ?>