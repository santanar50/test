<p align="center" style="font-size: 20px">Report Between <?php echo e($from); ?> To <?php echo e($to); ?></p>

<table width="100%" cellspacing="0" cellpadding="0" border="1">

<tr>
<td>&nbsp;<b>Order ID</b></td>
<td>&nbsp;<b>Order Date</b></td>
<td>&nbsp;<b>User</b></td>
<td>&nbsp;<b>Store</b></td>
<td>&nbsp;<b>Amount</b></td>
</tr>

<?php ($total = []); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php ($total[] = $row['amount']); ?>

<tr>
<td width="20%">&nbsp;#<?php echo e($row['id']); ?></td>
<td width="20%">&nbsp;<?php echo e($row['date']); ?></td>
<td width="20%">&nbsp;<?php echo e($row['user']); ?></td>
<td width="20%">&nbsp;<?php echo e($row['store']); ?></td>
<td width="20%">&nbsp;<?php echo e($row['amount']); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

<tr>
<td width="20%">&nbsp;</td>
<td width="20%">&nbsp;<b>Total Orders</b></td>
<td width="20%">&nbsp;<b><?php echo e(count($total)); ?></b></td>
<td width="20%">&nbsp;<b>Total</b></td>
<td width="20%">&nbsp;<b><?php echo e(array_sum($total)); ?></b></td>
</tr>

</table>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/report/report.blade.php */ ?>