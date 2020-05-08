<div class="modal fade modal-slide-right" id="slideRightModal<?php echo e($row->id); ?>" tabindex="-1" role="dialog aria-labelledby="slideRightModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content" style="height: auto;overflow-y: auto;">
<div class="modal-header">
<h5 class="modal-title" id="slideRightModalLabel">Ready for Dispatch #<?php echo e($row->id); ?></h5>
<button type="button" class="close" data-dismiss="modal"
aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<form action="<?php echo e(Asset($form_url)); ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="id" value="<?php echo e($row->id); ?>">
<div class="row">
<div class="form-group col-md-12" style="text-align: left">
<label for="inputEmail4" >Select Delivery Option</label>
<select name="d_boy" class="form-control" required="">
<option value="">Select</option>
<?php $__currentLoopData = $boys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($b->id); ?>"><?php echo e($b->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>

<button type="submit" class="btn btn-primary">Dispatch Order</button>
</form>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>


</div>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/order/dispatch.blade.php */ ?>