<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title><?php echo app('translator')->getFromJson('admin.userTitle'); ?></title>
<link rel="icon" type="image/x-icon" href="<?php echo e(Asset('assets/img/logo.png')); ?>"/>
<link rel="icon" href="<?php echo e(Asset('assets/img/logo.png')); ?>" type="image/png" sizes="16x16">
<link rel="stylesheet" href="<?php echo e(Asset('assets/vendor/pace/pace.css')); ?>">
<script src="<?php echo e(Asset('assets/vendor/pace/pace.min.js')); ?>"></script>


<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/fonts/materialdesignicons/materialdesignicons.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(Asset('assets/css/atmos.min.css')); ?>">

</head>
<body class="jumbo-page">

<main class="admin-main  ">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-5  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            <p>
                                <img src="<?php echo e(Asset('assets/img/logo.svg')); ?>" width="80" alt="">

                            </p>
                            <p class="admin-brand-content">
                                <?php echo app('translator')->getFromJson('app.name'); ?>
                            </p>
                        </div>
                        <h3 class="text-center p-b-20 fw-400"><?php echo app('translator')->getFromJson('admin.userTitle'); ?></h3>

                        <?php if(Session::has('error')): ?>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>ERROR : </strong> <?php echo e(Session::get('error')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>

                        <?php endif; ?>

                        <?php if(Session::has('message')): ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>SUCCESS : </strong> <?php echo e(Session::get('message')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        </div>

                        <?php endif; ?>

                        <form class="needs-validation" action="<?php echo e($form_url); ?>" method="post">

                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                            <div class="form-row">
                                <div class="form-group floating-label col-md-12">
                                    <label>Username</label>
                                    <input type="text" required class="form-control" placeholder="Username" name="username">
                                </div>
                                <div class="form-group floating-label col-md-12">
                                    <label>Password</label>
                                    <input type="password" required class="form-control "  placeholder="Password" name="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>

                        </form>
                       
                    </div>

                </div>
            </div>
            <div class="col-lg-7 d-none d-md-block bg-cover" style="background-image: url('<?php echo e(Asset('assets/img/login.svg')); ?>');">

            </div>
        </div>
    </div>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>

                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">

                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">


                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                                class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                    class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                    class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/user/index.blade.php */ ?>