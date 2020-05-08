<?php $__env->startSection('title'); ?> Welcome ! <?php echo e(Auth::user()->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-home <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container pull-up">

<?php echo $__env->make('user.dashboard.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('user.dashboard.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="<?php echo e(Asset('assets/vendor/apexchart/apexcharts.min.js')); ?>"></script>

<script type="text/javascript">

(function ($) {
    'use strict';

    if ($("#chart-01").length) {

        var options = {
            colors: colors,
            chart: {

                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    endingShape: 'rounded',
                    columnWidth: '55%',
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Cancelled Orders',
                data: [<?php echo $admin->chart(6,1)['cancel']; ?>, <?php echo $admin->chart(5,1)['cancel']; ?>, <?php echo $admin->chart(4,1)['cancel']; ?>, <?php echo $admin->chart(3,1)['cancel']; ?>, <?php echo $admin->chart(2,1)['cancel']; ?>, <?php echo $admin->chart(1,1)['cancel']; ?>, <?php echo $admin->chart(0,1)['cancel']; ?>]
            },
            {
                name: 'Completed Orders',
                data: [<?php echo $admin->chart(6,1)['order']; ?>, <?php echo $admin->chart(5,1)['order']; ?>, <?php echo $admin->chart(4,1)['order']; ?>, <?php echo $admin->chart(3,1)['order']; ?>, <?php echo $admin->chart(2,1)['order']; ?>, <?php echo $admin->chart(1,1)['order']; ?>, <?php echo $admin->chart(0,1)['order']; ?>]
            }, 
            

            

            ],
            xaxis: {
                categories: ['<?php echo $admin->getMonthName(6); ?>', '<?php echo $admin->getMonthName(5); ?>', '<?php echo $admin->getMonthName(4); ?>', '<?php echo $admin->getMonthName(3); ?>', '<?php echo $admin->getMonthName(2); ?>', '<?php echo $admin->getMonthName(1); ?>', '<?php echo $admin->getMonthName(0); ?>'],
            },
            yaxis: {
                title: {
                    text: ''
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-01"),
            options
        );

        chart.render();
    }

   
})(window.jQuery);




</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda_jpn/local/resources/views/user/dashboard/home.blade.php */ ?>