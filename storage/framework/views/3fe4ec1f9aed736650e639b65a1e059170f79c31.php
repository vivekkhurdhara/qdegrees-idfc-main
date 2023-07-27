<!doctype html>

<!--[if lt IE 7]>

<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>

<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>

<html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!-->

<html class="no-js" lang=""> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="apple-touch-icon" href="<?php echo e(URL::asset('/public/favicon.ico')); ?>">

    <link rel="shortcut icon" href="<?php echo e(URL::asset('/public/favicon.ico')); ?>">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <link rel="stylesheet"

          href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link rel="stylesheet" href="<?php echo e(URL::asset('public/assets/css/cs-skin-elastic.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(URL::asset('public/assets/css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(URL::asset('public/assets/css/lib/chosen/chosen.min.css')); ?>">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" rel="stylesheet"/>

<?php echo $__env->yieldContent('css'); ?>

    <style>

        #weatherWidget .currentDesc {

            color: #ffffff !important;

        }



        .traffic-chart {

            min-height: 335px;

        }



        #flotPie1 {

            height: 150px;

        }



        #flotPie1 td {

            padding: 3px;

        }



        #flotPie1 table {

            top: 20px !important;

            right: -10px !important;

        }



        .chart-container {

            display: table;

            min-width: 270px;

            text-align: left;

            padding-top: 10px;

            padding-bottom: 10px;

        }



        #flotLine5 {

            height: 105px;

        }



        #flotBarChart {

            height: 150px;

        }



        #cellPaiChart {

            height: 160px;

        }

        

        .kt-separator.kt-separator--space-lg {

    margin: 2.5rem 0;

}



.kt-separator.kt-separator--border-dashed {

    border-bottom: 1px dashed #ebedf2;

}

.kt-separator {

    height: 0;

    margin: 20px 0;

    border-bottom: 1px solid #ebedf2;

}

.div1 {

    width: auto;

    height: auto;

    display: flex;

    overflow-x: auto;

  }

  

  .item {

    width: auto;

    flex-shrink: 0;

    height: auto;

    margin-right:5px;

  }

  .center{

    display: block;

  margin-left: auto;

  margin-right: auto;

  width: 50%;

  }

  .stat-widget-five .stat-heading {

    color: #99abb4;

    font-size: 13px;

}

.table thead th {

    font-size: 12px;

}

.productcontent{

    background-color: whitesmoke;

    border: 1px solid #dddddd;

    border-radius: 30px;

    padding: 10px 10px;

    margin-top: 10px;

}

.cursor{

    cursor: pointer;

}

    </style>

</head>



<body>



<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="right-panel" class="right-panel">

    <!-- Header-->

    <header id="header" class="header">

        <div class="top-left">

            <div class="navbar-header">

                <a class="navbar-brand" href="./"><img src="<?php echo e(url('public/images/logo.png.jpg')); ?>" alt="Logo"></a>

                <a class="navbar-brand hidden" href="./"><img src="<?php echo e(url('public/images/logo2.png')); ?>" alt="Logo"></a>

                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

            </div>

        </div>

        <div class="top-right">

            <div class="header-menu">

                <div class="header-left">

                    <!-- <button class="search-trigger"><i class="fa fa-search"></i></button>

                    <div class="form-inline">

                        <form class="search-form">

                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."

                                   aria-label="Search">

                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>

                        </form>

                    </div> -->



                </div>



                <div class="user-area dropdown float-right">

                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"

                       aria-expanded="false">

                        <img class="user-avatar rounded-circle" src="<?php echo e(url('public/images/admin.jpg')); ?>" alt="User Avatar">

                    </a>



                    <div class="user-menu dropdown-menu">

                       
                       

                            <a class="dropdown-item nav-link" href="<?php echo e(route('logout')); ?>"

                               onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>

                                <?php echo e(__('Logout')); ?>


                            </a>



                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

                                <?php echo csrf_field(); ?>

                            </form>

                        

                        

                    </div>

                </div>



            </div>

        </div>

    </header>

    <!-- /#header -->

    <div class="content" style="min-height:500px;bottom:0">

        <?php echo $__env->yieldContent('content'); ?>

    </div>

</div>





<!-- Footer -->

    <footer class="site-footer"  style="bottom:0">

        <div class="footer-inner bg-white">

            <div class="row">

                

            </div>

        </div>

    </footer>

    <!-- /.site-footer -->

</div>



<!-- /#right-panel -->





<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

<script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>

<script src="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link href="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<!--  Chart js -->

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>



<!--Chartist Chart-->

<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>











<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>

<script src="<?php echo e(URL::asset('assets/js/init/weather-init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('assets/js/lib/chosen/chosen.jquery.min.js')); ?>"></script>



<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

<script src="<?php echo e(URL::asset('assets/js/init/fullcalendar-init.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/flot-charts@0.8.3/jquery.flot.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.pie.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.time.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.stack.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.resize.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.crosshair.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flot.curvedlines@1.1.1/curvedLines.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot.tooltip@0.9.0/js/jquery.flot.tooltip.min.js"></script>



<!--Local Stuff-->



<script>

    var url = "<?php echo url(''); ?>";

    jQuery(document).ready(function () {



        toastr.options = {

            "toastClass": "animated fadeInDown",





            "closeButton": false,

            "debug": false,

            "newestOnTop": false,

            "progressBar": false,

            "positionClass": "toast-top-right",

            "preventDuplicates": false,

            "onclick": null,

            "showDuration": "300",

            "hideDuration": "1000",

            "timeOut": "5000",

            "extendedTimeOut": "1000",

            "showEasing": "swing",

            "hideEasing": "linear",

            "showMethod": "fadeIn",

            "hideMethod": "fadeOut"

        };

        <?php if(session()->has('success')): ?>

        <?php if(is_array(session()->get('success'))): ?>

            <?php $__currentLoopData = session()->get('success'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $succ): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            toastr.success("<?php echo e($succ); ?>");

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

        toastr.success("<?php echo e(session()->get('success')); ?>");

        <?php endif; ?>



        <?php endif; ?>



        <?php if(session()->has('error')): ?>

        <?php if(is_array(session()->get('error'))): ?>

            <?php $__currentLoopData = session()->get('error'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(is_array($error)): ?>

            <?php $__currentLoopData = $error; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

toastr.error("<?php echo e($err); ?>");

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>



        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

        <?php endif; ?>

    });



    /*  jQuery(document).ready(function($) {

     "use strict";



     // Pie chart flotPie1

     var piedata = [

     { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},

     { label: "Tab visits", data: [[1,33]], color: '#ef5350'},

     { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}

     ];



     //            $.plot('#flotPie1', piedata, {

     //                series: {

     //                    pie: {

     //                        show: true,

     //                        radius: 1,

     //                        innerRadius: 0.65,

     //                        label: {

     //                            show: true,

     //                            radius: 2/3,

     //                            threshold: 1

     //                        },

     //                        stroke: {

     //                            width: 0

     //                        }

     //                    }

     //                },

     //                grid: {

     //                    hoverable: true,

     //                    clickable: true

     //                }

     //            });

     // Pie chart flotPie1  End

     // cellPaiChart

     var cellPaiChart = [

     { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},

     { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}

     ];

     $.plot('#cellPaiChart', cellPaiChart, {

     series: {

     pie: {

     show: true,

     stroke: {

     width: 0

     }

     }

     },

     legend: {

     show: false

     },grid: {

     hoverable: true,

     clickable: true

     }



     });

     // cellPaiChart End

     // Line Chart  #flotLine5

     var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];



     var plot = $.plot($('#flotLine5'),[{

     data: newCust,

     label: 'New Data Flow',

     color: '#fff'

     }],

     {

     series: {

     lines: {

     show: true,

     lineColor: '#fff',

     lineWidth: 2

     },

     points: {

     show: true,

     fill: true,

     fillColor: "#ffffff",

     symbol: "circle",

     radius: 3

     },

     shadowSize: 0

     },

     points: {

     show: true,

     },

     legend: {

     show: false

     },

     grid: {

     show: false

     }

     });

     // Line Chart  #flotLine5 End

     // Traffic Chart using chartist

     if ($('#traffic-chart').length) {

     var chart = new Chartist.Line('#traffic-chart', {

     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],

     series: [

     [0, 18000, 35000,  25000,  22000,  0],

     [0, 33000, 15000,  20000,  15000,  300],

     [0, 15000, 28000,  15000,  30000,  5000]

     ]

     }, {

     low: 0,

     showArea: true,

     showLine: false,

     showPoint: false,

     fullWidth: true,

     axisX: {

     showGrid: true

     }

     });



     chart.on('draw', function(data) {

     if(data.type === 'line' || data.type === 'area') {

     data.element.animate({

     d: {

     begin: 2000 * data.index,

     dur: 2000,

     from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),

     to: data.path.clone().stringify(),

     easing: Chartist.Svg.Easing.easeOutQuint

     }

     });

     }

     });

     }

     // Traffic Chart using chartist End

     //Traffic chart chart-js

     if ($('#TrafficChart').length) {

     var ctx = document.getElementById( "TrafficChart" );

     ctx.height = 150;

     var myChart = new Chart( ctx, {

     type: 'line',

     data: {

     labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],

     datasets: [

     {

     label: "Visit",

     borderColor: "rgba(4, 73, 203,.09)",

     borderWidth: "1",

     backgroundColor: "rgba(4, 73, 203,.5)",

     data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]

     },

     {

     label: "Bounce",

     borderColor: "rgba(245, 23, 66, 0.9)",

     borderWidth: "1",

     backgroundColor: "rgba(245, 23, 66,.5)",

     pointHighlightStroke: "rgba(245, 23, 66,.5)",

     data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]

     },

     {

     label: "Targeted",

     borderColor: "rgba(40, 169, 46, 0.9)",

     borderWidth: "1",

     backgroundColor: "rgba(40, 169, 46, .5)",

     pointHighlightStroke: "rgba(40, 169, 46,.5)",

     data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]

     }

     ]

     },

     options: {

     responsive: true,

     tooltips: {

     mode: 'index',

     intersect: false

     },

     hover: {

     mode: 'nearest',

     intersect: true

     }



     }

     } );

     }

     //Traffic chart chart-js  End

     // Bar Chart #flotBarChart

     //            $.plot("#flotBarChart", [{

     //                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],

     //                bars: {

     //                    show: true,

     //                    lineWidth: 0,

     //                    fillColor: '#ffffff8a'

     //                }

     //            }], {

     //                grid: {

     //                    show: false

     //                }

     //            });

     // Bar Chart #flotBarChart End

     });*/

</script>

<?php echo $__env->yieldContent('js'); ?>

</body>

</html>

<?php /**PATH /home/qdegrees/public_html/idfc/audit_online/resources/views/layouts/master_audit_list.blade.php ENDPATH**/ ?>