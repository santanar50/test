<?php ($page = Request::segment(1)); ?>
<style type="text/css">
.menu-item{
	border-bottom: 1px solid #0c6057 !important;
}
</style>
<div class="admin-sidebar-brand">
<!-- begin sidebar branding-->
<img class="admin-brand-logo" src="<?php echo e(Asset('assets/img/logo.png')); ?>" width="40" alt="atmos Logo">
<span class="admin-brand-content font-secondary"><a href="<?php echo e(Asset(env('user').'/home')); ?>">  Admin</a></span>
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
<a href="<?php echo e(Asset(env('user').'/home')); ?>" class=" menu-link">
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
<a href="<?php echo e(Asset(env('user').'/setting')); ?>" class=" menu-link">
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

<li class="menu-item <?php if($page === 'category' || $page == 'item'): ?> active <?php endif; ?>">
<a href="#" class="open-dropdown menu-link">
<span class="menu-label">
<span class="menu-name">Menu Items
<span class="menu-arrow"></span>
</span>

</span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-silverware-fork-knife"></i>
</span>
</a>
<!--submenu-->
<ul class="sub-menu">

<li class="menu-item">
<a href="<?php echo e(Asset(env('user').'/category')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Menu Category</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-silverware-fork-knife">

</i>
</span>
</a>
</li>

<li class="menu-item ">
<a href="<?php echo e(Asset(env('user').'/item')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Menu Items</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-silverware-fork-knife">

</i>
</span>
</a>
</li>

<li class="menu-item">
<a href="<?php echo e(Asset(env('user').'/addon')); ?>" class=" menu-link">
<span class="menu-label">
<span class="menu-name">Addon's</span>
</span>
<span class="menu-icon">
<i class="icon-placeholder  mdi mdi-folder-plus">

</i>
</span>
</a>
</li>

</ul>
</li>


<li class="menu-item">
<a href="<?php echo e(Asset(env('user').'/logout')); ?>" class="menu-link">
<span class="menu-label"><span class="menu-name">Logout</span></span>
<span class="menu-icon">
<i class="icon-placeholder mdi mdi-logout"></i>
</span>
</a>
</li>

</ul>
</div>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/user/layout/menu.blade.php */ ?>