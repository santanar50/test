<div class="card py-3 m-b-30">
<div class="card-body">

<h4>User Detail</h4><br>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">Select Store</label>
<select name="store_id" class="form-control" required="required" id="store_id">
<option value="">Select</option>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($u->id); ?>"><?php echo e($u->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Phone</label>
<?php echo Form::text('phone',$data->phone,['id' => 'code','required' => 'required','class' => 'form-control','onchange' => 'getUser(this.value)']); ?>

</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail6">User Name</label>
<?php echo Form::text('name',$data->name,['id' => 'name','required' => 'required','class' => 'form-control']); ?>

</div>

<div class="form-group col-md-6">
<label for="inputEmail6">Address</label>
<?php echo Form::text('address',$data->address,['id' => 'address','required' => 'required','class' => 'form-control']); ?>

</div>
</div>
</div>
</div>

<div class="card py-3 m-b-30">
<div class="card-body">

<h4>Order Details</h4><br>

<?php if($data->id): ?>

<?php echo $__env->make('admin.order.item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<span id="item"></span>

<br>
<button type="button" class="btn btn-info" onClick="AddMore();">Add Item</button>

</div>
</div>

<button type="submit" class="btn btn-success btn-cta">Save changes</button>

<SCRIPT>

function getUser(id)
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
	var t = JSON.parse(xmlhttp.responseText);

	if(t.name)
	{
		document.getElementById("name").value=t.name;
	}
	
	if(t.address)
	{
		document.getElementById("address").value=t.address;
	}
}
}
	xmlhttp.open("GET","<?php echo e(Asset(env('admin').'/getUser')); ?>/"+id,true);
	xmlhttp.send();
}

function AddMore() {
    
    var sid = document.getElementById("store_id").value;
	
	$("<DIV>").load("<?php echo e(Asset(env('admin').'/orderItem?store_id=')); ?>"+sid, function() {
	
	$("#item").append($(this).html());
	
	});


}
function Remove(id) {
	$(id).remove();
}
</SCRIPT>
<br>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/order/form.blade.php */ ?>