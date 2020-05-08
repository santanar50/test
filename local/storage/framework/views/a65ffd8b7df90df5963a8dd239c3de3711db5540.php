<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="icon" type="image/x-icon" href="<?php echo e(Asset('assets/img/logo.png')); ?>"/>
<link rel="icon" href="<?php echo e(Asset('assets/img/logo.png')); ?>" type="image/png" sizes="16x16">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/pace/pace.css')); ?>">
<script src="<?php echo e(Asset('assets/vendor/pace/pace.min.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css')); ?>">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/select2/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/jquery-ui/jquery-ui.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/timepicker/bootstrap-timepicker.min.css')); ?>">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(Asset('assets/fonts/jost/jost.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/css/atmos.min.css')); ?>">

<?php echo $__env->yieldContent('css'); ?>

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "7ebd04b2-9d31-4062-bdb5-4fe00c55c348",
      notifyButton: {
        enable: true,
      },
      allowLocalhostAsSecureOrigin: true,
    });
  });
</script>

</head>
<body class="sidebar-pinned ">
<aside class="admin-sidebar">

<?php echo $__env->make('admin.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       

</aside>
<main class="admin-main">
<header class="admin-header">

<?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</header>
<section class="admin-content">
<div class="bg-dark m-b-30">
<div class="container">
<div class="row p-b-60 p-t-60">
<div class="col-md-10 mx-auto text-center text-white p-b-30">

<?php if(Request::segment(3)): ?>

<h1 style="text-align: left;text-transform: uppercase;font-size: 22px;font-weight: 900"><?php echo $__env->yieldContent('title'); ?></h1>


<?php else: ?>

<h1 style="text-align: left;margin-left: -8%;text-transform: uppercase;font-size: 22px;font-weight: 900"><?php echo $__env->yieldContent('title'); ?></h1>


<?php endif; ?>

<?php if(Session::has('error')): ?>
<div class="row" style="text-align: left">
<div class="col-md-1">&nbsp;</div>
<div class="col-md-8" style="margin-left: 2%;margin-top: 2%">
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>ERROR : </strong> <?php echo e(Session::get('error')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
</div>
</div>
<?php endif; ?>

<?php if(Session::has('message')): ?>
<div class="row" style="text-align: left">
<div class="col-md-1">&nbsp;</div>
<div class="col-md-8" style="margin-left: 2%;margin-top: 2%">
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>SUCCESS : </strong> <?php echo e(Session::get('message')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
</div>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>

<div class="alert alert-danger">
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li style="color:white"><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>

</div>
</div>
</div>
</div>

<?php echo $__env->yieldContent('content'); ?>

</div>
</div>
</div>
</section>
</main>


<script src="<?php echo e(Asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/popper/popper.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/select2/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/listjs/listjs.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(Asset('assets/js/atmos.min.js')); ?>"></script>
<!--page specific scripts for demo-->


<!--Additional Page includes-->
<!--chart data for current dashboard-->
<script src="<?php echo e(Asset('assets/js/dashboard-05.js')); ?>"   ></script>
<script src="<?php echo e(Asset('assets/vendor/sweetalert/sweetalert2.all.min.js')); ?>"></script>

<script>
function deleteConfirm(url)
{
	Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'This Entry has been deleted.',
                    'success'
                )

                window.location = url;
            }
  })
}

function confirmAlert(url)
{
	Swal.fire({
            title: 'Are you sure?',
            text: "",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Do it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Changed!',
                    'This Entry has been Changed.',
                    'success'
                )

                window.location = url;
            }
  })
}

function showMsg(data)
{
    Swal.fire(data);
}

</script>

<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/layout/main.blade.php */ ?>