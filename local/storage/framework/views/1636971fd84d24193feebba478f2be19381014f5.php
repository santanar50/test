<a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>

<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("shwTime").innerHTML = d.toLocaleTimeString();
}
</script>



    <nav class=" mr-auto my-auto">
        <ul class="nav align-items-center">

            <li class="nav-item" style="margin-left: 50px"> 
            
            <form action="">

            <input type="text" name="q" class="form-control" style="width:800px;padding: 20px 20px" placeholder="Enter Order ID or Customer Phone Number">

            </form>

            </li>

            

        </ul>
    </nav>
<nav class=" ml-auto">
        <ul class="nav align-items-center">

        <li style="font-size: 25px">&nbsp;&nbsp;&nbsp;<i class="mdi mdi-calendar-clock"></i> <span id="shwTime"></span></li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <span class="avatar-title rounded-circle bg-dark">V</span>

                    </div>
                </a>
                <div class="dropdown-menu  dropdown-menu-right"   >
                    <a class="dropdown-item" href="<?php echo e(Asset(env('admin').'/home')); ?>">  Dashboard </a><hr>
                    <a class="dropdown-item" href="<?php echo e(Asset(env('admin').'/setting')); ?>">  Account Settings </a><hr>
                    <a class="dropdown-item" href="<?php echo e(Asset(env('admin').'/logout')); ?>">  Logout </a>
                    
                </div>
            </li>

        </ul>

    </nav>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_ibh/local/resources/views/admin/layout/header.blade.php */ ?>