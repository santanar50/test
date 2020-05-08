<?php ($page = Request::segment(2)); ?>

<div class="admin-sidebar-brand">
<!-- begin sidebar branding-->
<img class="admin-brand-logo" src="<?php echo e(Asset('assets/img/logo.png')); ?>" width="40" alt="atmos Logo">
<span class="admin-brand-content font-secondary"><a href="<?php echo e(Asset(env('admin').'/home')); ?>">  <?php echo app('translator')->getFromJson('app.name'); ?></a></span>
<!-- end sidebar branding-->
<div class="ml-auto">
<!-- sidebar pin-->
<a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
<!-- sidebar close for mobile device-->
<a href="#" class="admin-close-sidebar"></a>
</div>
</div>
<div class="admin-sidebar-wrapper js-scrollbar">
<ul class="menu">
<li class="menu-item <?php if($page === 'home' || $page == 'setting'): ?> active <?php endif; ?>">
<a href="#" class="open-dropdown menu-link">
<span class="menu-label">
<span class="menu-name">Dashboard
<span class="menu-arrow"></span>
</span>

</span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-shape-outline "></i>
</span>
</a>
<!--submenu-->
<ul class="sub-menu">

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/home')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Home</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-home">

</i>
</span>
</a>
</li>

<li class="menu-item ">
<a href="<?php echo e(Asset(env('admin').'/setting')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Settings</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-message-settings-variant">

</i>
</span>
</a>
</li>
</ul>
</li>

<li class="menu-item <?php if($page === 'city'): ?> active <?php endif; ?>">
<a href="<?php echo e(Asset(env('admin').'/city')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Manage Cities</span></span>
<span class="menu-icon">
 <i class="mdi mdi-map-marker"></i>
</span>
</a>
</li>

<li class="menu-item <?php if($page === 'user'): ?> active <?php endif; ?>">
<a href="<?php echo e(Asset(env('admin').'/user')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Manage Restaurants</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-home"></i>
</span>
</a>
</li>

<li class="menu-item <?php if($page === 'offer'): ?> active <?php endif; ?>">
<a href="<?php echo e(Asset(env('admin').'/offer')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Discount Offers</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-calendar"></i>
</span>
</a>
</li>

<li class="menu-item <?php if($page === 'delivery'): ?> active <?php endif; ?>">
<a href="<?php echo e(Asset(env('admin').'/delivery')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Delivery Staff</span></span>
<span class="menu-icon">
<i class="mdi mdi-account-clock"></i>
</span>
</a>
</li>

<li class="menu-item <?php if($page === 'order'): ?> active <?php endif; ?>">
<a href="#" class="open-dropdown menu-link">
<span class="menu-label">
<span class="menu-name">Manage Orders 

<?php
$cOrder = DB::table('orders')->where('status',0)->count();
$rOrder = DB::table('orders')->where('status',1)->count();
if($cOrder > 0)
{
?>

<span class="icon-badge badge-success badge badge-pill"><?php echo e($cOrder); ?></span>

<?php } ?>

<span class="menu-arrow"></span>
</span>

</span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-cart"></i>
</span>
</a>
<!--submenu-->
<ul class="sub-menu">

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/order?status=0')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">New Orders

<?php if($cOrder > 0): ?>

<span class="icon-badge badge-success badge badge-pill"><?php echo e($cOrder); ?></span>

<?php endif; ?>

</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-cart">

</i>
</span>
</a>
</li>


<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/order?status=1')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Running Orders

<?php if($rOrder > 0): ?>

<span class="icon-badge badge-success badge badge-pill"><?php echo e($rOrder); ?></span>

<?php endif; ?>

</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-camera-control">

</i>
</span>
</a>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/order?status=2')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Cancelled Orders</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-cancel">

</i>
</span>
</a>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/order?status=3')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Completed Orders</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-check-all">

</i>
</span>
</a>
</li>
</ul>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/push')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Push Notification</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-send"></i>
</span>
</a>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/report')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Reporting</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-file"></i>
</span>
</a>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('admin').'/logout')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Logout</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-logout"></i>
</span>
</a>
</li>

</ul>
</div>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/admin/layout/menu.blade.php */ ?>