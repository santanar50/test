<?php $__env->startSection('title'); ?> Welcome ! <?php echo e(Auth::guard('admin')->user()->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-home <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container pull-up">
<div class="row">
<div class="col-lg-3 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-success"><i
class="mdi mdi-account-multiple h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">21.32k</h1>
<p class="text-muted fw-600">Total Followers</p>
<div class="text-success h5 fw-600">
<i class="mdi mdi-arrow-up"></i> 112.6%
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-danger"><i
class="mdi mdi-heart h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">300</h1>
<p class="text-muted fw-600">New Likes</p>
<div class="text-danger h5 fw-600">
<i class="mdi mdi-arrow-up"></i> 112.6%
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-info"><i
class="mdi mdi-eye-settings-outline h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">750</h1>
<p class="text-muted fw-600">Reach</p>
<div class="text-info h5 fw-600">
<i class="mdi mdi-arrow-up"></i> 35.69%
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 m-b-30">
<div class="card card-hover">
<div class="card-body">
<div class="text-center p-t-20">
<div class="avatar-lg avatar">
<div class="avatar-title rounded-circle badge-soft-dark"><i
class="mdi mdi-vector-intersection h1 m-0"></i></div>

</div>
<div class="text-center">
<h1 class="fw-600 p-t-20">16.56%</h1>
<p class="text-muted fw-600">Engagement Rate</p>
<div class="text-dark h5 fw-600">
<i class="mdi mdi-arrow-down"></i> 12%
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-8  m-b-30">
<div class="card">
<div class="card-header">
<div class="card-title">Distribution by number of followers</div>

<div class="card-controls">

<a href="#" class="js-card-refresh icon"> </a>
<div class="dropdown">
<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
class="icon mdi  mdi-dots-vertical"></i> </a>

<div class="dropdown-menu dropdown-menu-right">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
</div>
</div>
</div>

</div>
<div class="card-body">


<div id="chart-17"></div>
</div>
<div class="">
</div>
<div class="card-footer">
<div class="d-flex  justify-content-between">
<h6 class="m-b-0 my-auto"><span class="opacity-75"> <i class="mdi mdi-information"></i> Restart your Re-targeting Campaigns</span>
</h6>
<a href="#!" class="btn btn-white shadow-none">See Campaigns</a>
</div>
</div>
</div>
</div>
<div class="col-lg-4 m-b-30">
<div class="card full-height d-flex align-items-center justify-content-center  ">
<div class="card-controls">

<a href="#" class="js-card-refresh icon"> </a>
<div class="dropdown">
<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
class="icon mdi  mdi-dots-vertical"></i> </a>

<div class="dropdown-menu dropdown-menu-right">
<button class="dropdown-item" type="button">Action</button>
<button class="dropdown-item" type="button">Another action</button>
<button class="dropdown-item" type="button">Something else here</button>
</div>
</div>
</div>
<div class="text-center">

<h1 class="mdi mdi-instagram text-center display-4 m-0"></h1>
<h1 class="fw-600 p-t-20 display-4">367 <sup class="text-success">+</sup></h1>
<h5 class="opacity-75">New Followers</h5>
</div>
<div class="bg-img m-h-30 w-100"
style="background-size:cover;background-image: url('assets/img/users/users.png')"></div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/new_admin/local/resources/views/admin/dashboard/home.blade.php */ ?>