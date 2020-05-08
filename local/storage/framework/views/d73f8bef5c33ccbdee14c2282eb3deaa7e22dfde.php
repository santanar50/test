<?php if($data->id): ?>

<?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<?php ($uid = rand(111,9999)); ?>

<div class="form-row" id="uid<?php echo e($uid); ?>">

<input type="hidden" name="id[]" value="<?php echo e($uid); ?>">

<div class="form-group col-md-4">
<label for="class_<?php echo e($uid); ?>">Select Item</label>
<select name="item_id[]" class="form-control js-select2" required="required" onchange="getUnit<?php echo e($uid); ?>(this.value)">
<option value="">Select</option>
<?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($i->id); ?>" <?php if($i->id == $d->item_id): ?> selected <?php endif; ?>><?php echo e($i->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group col-md-4">
<label for="class_<?php echo e($uid); ?>">Select Unit</label>
<select name="unit[]" class="form-control" required="required" id="unit<?php echo e($uid); ?>">
<option value="">Select</option>
<?php $__currentLoopData = $data->getUnit($d->item_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($u['id']); ?>" <?php if($u['id'] == $d->qty_type): ?> selected <?php endif; ?>><?php echo e($u['name']); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group col-md-3">
<label for="class_<?php echo e($uid); ?>">Quantity</label>
<input type="text" name="qty[]" class="form-control" value="<?php echo e($d->qty); ?>">
</div>

<div class="form-group col-md-1">
<br><a href="javascript::void()" onclick="Remove(uid<?php echo e($uid); ?>)" style="color: red;font-size: 23px;"><i class="mdi mdi-delete"></i></a>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.js-select2').select2();
});


function getUnit<?php echo e($uid); ?>(id)
{

var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
	document.getElementById("unit<?php echo e($uid); ?>").innerHTML=xmlhttp.responseText;
}
}
	xmlhttp.open("GET","<?php echo e(Asset(env('admin').'/getUnit')); ?>/"+id,true);
	xmlhttp.send();
}


</script>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>

<?php ($uid = rand(111,9999)); ?>

<div class="form-row" id="uid<?php echo e($uid); ?>">

<input type="hidden" name="id[]" value="<?php echo e($uid); ?>">

<div class="form-group col-md-4">
<label for="class_<?php echo e($uid); ?>">Select Item</label>
<select name="item_id[]" class="form-control js-select2" required="required" onchange="getUnit<?php echo e($uid); ?>(this.value)">
<option value="">Select</option>
<?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($i->id); ?>"><?php echo e($i->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group col-md-4">
<label for="class_<?php echo e($uid); ?>">Select Unit</label>
<select name="unit[]" class="form-control" required="required" id="unit<?php echo e($uid); ?>">
<option value="">Select</option>
</select>
</div>

<div class="form-group col-md-3">
<label for="class_<?php echo e($uid); ?>">Quantity</label>
<input type="text" name="qty[]" class="form-control">
</div>

<div class="form-group col-md-1">
<br><a href="javascript::void()" onclick="Remove(uid<?php echo e($uid); ?>)" style="color: red;font-size: 23px;"><i class="mdi mdi-delete"></i></a>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.js-select2').select2();
});


function getUnit<?php echo e($uid); ?>(id)
{

var xmlhttp;
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
	xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
	document.getElementById("unit<?php echo e($uid); ?>").innerHTML=xmlhttp.responseText;
}
}
	xmlhttp.open("GET","<?php echo e(Asset(env('admin').'/getUnit')); ?>/"+id,true);
	xmlhttp.send();
}


</script>

<?php endif; ?>

<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/order/item.blade.php */ ?>