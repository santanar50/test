
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Name</label>
<?php echo Form::text('name',null,['id' => 'code','placeholder' => 'Name','class' => 'form-control','required' => 'required']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Price</label>
<?php echo Form::text('price',null,['id' => 'code','class' => 'form-control','required' => 'required']); ?>

</div>
</div>


<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fds/local/resources/views/user/addon/form.blade.php */ ?>