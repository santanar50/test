<?php if(isset($langs)): ?>

<ul class="nav nav-tabs" id="myTab" role="tablist">

<ul class="nav nav-tabs" id="myTab" role="tablist">

<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li class="nav-item">
<a class="nav-link <?php if($lng['id'] == 0): ?> active <?php endif; ?>" id="<?php echo e($lng['name']); ?>-tab-z" data-toggle="tab" href="#lang<?php echo e($lng['id']); ?>" role="tab"
aria-controls="lang<?php echo e($lng['id']); ?>" aria-selected="false"><img src="<?php echo e(Asset('upload/language/'.$lng['icon'])); ?>" height="20"> <?php echo e($lng['name']); ?></a>
</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>


<?php else: ?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab-z" data-toggle="tab" href="#home" role="tab"
aria-controls="home" aria-selected="true"><img src="<?php echo e(Asset('upload/en.png')); ?>" height="20"> English</a>
</li>

<?php ($langs = DB::table('language')->orderBy('sort_no','ASC')->get()); ?>

<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lng): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<li class="nav-item">
<a class="nav-link" id="<?php echo e($lng->name); ?>-tab-z" data-toggle="tab" href="#lang<?php echo e($lng->id); ?>" role="tab"
aria-controls="lang<?php echo e($lng->id); ?>" aria-selected="false"><img src="<?php echo e(Asset('upload/language/'.$lng->icon)); ?>" height="20"> <?php echo e($lng->name); ?></a>
</li>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul>


<?php endif; ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/language/header.blade.php */ ?>