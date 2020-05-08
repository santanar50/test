
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control']); ?>

</div>
<div class="form-group col-md-6">
<label for="inputEmail4">Email</label>
<?php echo Form::email('email',null,['id' => 'code','placeholder' => 'Email Address','class' => 'form-control']); ?>

</div>


<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/new_admin/local/resources/views/admin/user/form.blade.php */ ?>