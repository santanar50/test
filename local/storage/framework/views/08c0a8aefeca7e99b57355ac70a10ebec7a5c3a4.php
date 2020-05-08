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

<li class="menu-item <?php if($page === 'user'): ?> active <?php endif; ?>">
<a href="<?php echo e(Asset(env('admin').'/user')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Manage Restaurants</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-home"></i>
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
<?php /* /Applications/XAMPP/xamppfiles/htdocs/new_admin/local/resources/views/admin/layout/menu.blade.php */ ?>