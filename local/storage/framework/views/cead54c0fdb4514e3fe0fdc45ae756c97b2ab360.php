<div class="modal fade modal-slide-right" id="slideRightModal<?php echo e($row->id); ?>" tabindex="-1" role="dialog aria-labelledby="slideRightModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="slideRightModalLabel">Assign Addon's To <?php echo e($row->name); ?></h5>
<button type="button" class="close" data-dismiss="modal"
aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<form action="<?php echo e(Asset('itemAddon/')); ?>" method="post">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="item_id" value="<?php echo e($row->id); ?>">


<div class="row">
<?php $__currentLoopData = $addon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-6">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck<?php echo e($a->id.$row->id); ?>" value="<?php echo e($a->id); ?>" name="a_id[]" <?php if(in_array($a->id,$assign->getAssigned($row->id))): ?> checked <?php endif; ?>>
<label class="custom-control-label" for="customCheck<?php echo e($a->id.$row->id); ?>"><?php echo e($a->name); ?></label>
</div><br>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>



</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">
Close
</button>
<button type="submit" class="btn btn-primary">Save changes</button>
</form>
</div>
</div>
</div>
</div>


</div>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/user/item/addon.blade.php */ ?>