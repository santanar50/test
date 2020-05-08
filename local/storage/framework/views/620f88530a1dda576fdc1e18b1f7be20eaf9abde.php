<a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item">
                <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                    <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                </a>
            </li>
        </ul>
    </nav>
<nav class=" ml-auto">
        <ul class="nav align-items-center">

        
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="<?php echo e(Asset(env('user').'/home')); ?>">  Dashboard </a><hr>
                    <a class="dropdown-item" href="<?php echo e(Asset(env('user').'/setting')); ?>">  Account Settings </a><hr>
                    <a class="dropdown-item" href="<?php echo e(Asset(env('user').'/logout')); ?>">  Logout </a>
                    
                </div>
            </li>

        </ul>

    </nav>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/food_ims/local/resources/views/staff/layout/header.blade.php */ ?>