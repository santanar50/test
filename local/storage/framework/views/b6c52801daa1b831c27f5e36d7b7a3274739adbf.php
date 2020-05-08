<?php $__env->startSection('title'); ?> Welcome ! <?php echo e(Auth::guard('admin')->user()->name); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('icon'); ?> mdi-home <?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container pull-up">

<?php echo $__env->make('admin.dashboard.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('admin.dashboard.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('admin.dashboard.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
                data: [<?php echo $admin->chart(6)['cancel']; ?>, <?php echo $admin->chart(5)['cancel']; ?>, <?php echo $admin->chart(4)['cancel']; ?>, <?php echo $admin->chart(3)['cancel']; ?>, <?php echo $admin->chart(2)['cancel']; ?>, <?php echo $admin->chart(1)['cancel']; ?>, <?php echo $admin->chart(0)['cancel']; ?>]
            },
            {
                name: 'Completed Orders',
                data: [<?php echo $admin->chart(6)['order']; ?>, <?php echo $admin->chart(5)['order']; ?>, <?php echo $admin->chart(4)['order']; ?>, <?php echo $admin->chart(3)['order']; ?>, <?php echo $admin->chart(2)['order']; ?>, <?php echo $admin->chart(1)['order']; ?>, <?php echo $admin->chart(0)['order']; ?>]
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

    if ($("#chart-02").length) {
        var options = {
            chart: {

                type: 'bar',
            },
            colors: colors[8],
            plotOptions: {
                bar: {
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            series: [{
                data: ['<?php echo $admin->getStoreData($schart,0,'order'); ?>','<?php echo $admin->getStoreData($schart,1,'order'); ?>','<?php echo $admin->getStoreData($schart,2,'order'); ?>','<?php echo $admin->getStoreData($schart,3,'order'); ?>','<?php echo $admin->getStoreData($schart,4,'order'); ?>','<?php echo $admin->getStoreData($schart,5,'order'); ?>','<?php echo $admin->getStoreData($schart,6,'order'); ?>','<?php echo $admin->getStoreData($schart,7,'order'); ?>','<?php echo $admin->getStoreData($schart,8,'order'); ?>','<?php echo $admin->getStoreData($schart,9,'order'); ?>']
            }],
            xaxis: {
                categories: ['<?php echo $admin->getStoreData($schart,0,'name'); ?>','<?php echo $admin->getStoreData($schart,1,'name'); ?>','<?php echo $admin->getStoreData($schart,2,'name'); ?>','<?php echo $admin->getStoreData($schart,3,'name'); ?>','<?php echo $admin->getStoreData($schart,4,'name'); ?>','<?php echo $admin->getStoreData($schart,5,'name'); ?>','<?php echo $admin->getStoreData($schart,6,'name'); ?>','<?php echo $admin->getStoreData($schart,7,'name'); ?>','<?php echo $admin->getStoreData($schart,8,'name'); ?>','<?php echo $admin->getStoreData($schart,9,'name'); ?>'],
            },
            yaxis: {},
            tooltip: {}
        };

        var chart = new ApexCharts(
            document.querySelector("#chart-02"),
            options
        );

        chart.render();

    }
    
})(window.jQuery);




</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /Applications/XAMPP/xamppfiles/htdocs/fda/local/resources/views/admin/dashboard/home.blade.php */ ?>