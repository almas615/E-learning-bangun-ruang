<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../../public/template/default/assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!-- date range picker -->
    <link href="../../public/template/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Plugins css-->
    <link href="../../public/template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../../public/template/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../../public/template/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- App css -->
    <link href="../../public/template/default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/default/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../public/template/plugins/switchery/switchery.min.css">
    <!-- DataTables -->
    <link href="../../public/template/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../public/template/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <link rel="stylesheet" type="text/css" href="../../public/css/trix.css">
    <script type="text/javascript" src="../../public/js/trix.js"></script>
    <script type="text/javascript" src="../../public/js/attachments.js"></script>
    <script src="../../public/template/default/assets/js/modernizr.min.js"></script>
   
</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
                <!-- Image logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                <!--<img src="../../public/template/default/assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                <!--<img src="../../public/template/default/assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
                <!--</a>-->
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="hidden-xs">
                            <a href="#" class="menu-item">New</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a data-toggle="dropdown" class="dropdown-toggle menu-item" href="#" aria-expanded="false">English
                                <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge up bg-success">4</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Notifications</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-danger">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-warning">
                                            <i class="mdi mdi-settings"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Settings</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Notification</a></p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-email"></i>
                                <span class="badge up bg-danger">8</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Messages</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="../../public/template/default/assets/images/users/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Patricia Beach</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="../../public/template/default/assets/images/users/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Connie Lucas</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="../../public/template/default/assets/images/users/avatar-4.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Margaret Becker</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>

                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="../../public/template/default/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Hi, John</h5>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Data User </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="index.php?module=daftar_user">Daftar User</a></li>
                                <li><a href="ui-typography.html">Tambah User</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Topik</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="index.php?module=daftar_topik">Daftar topik</a></li>
                                <li><a href="index.php?module=tambah_topik">Tambah topik</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Materi</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="index.php?module=daftar_materi&topikId=0">Daftar Materi</a></li>
                                <li><a href="index.php?module=tambah_materi">Tambah Materi</a></li>

                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Soal </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="index.php?module=daftar_soal&topikId=0">Daftar Soal</a></li>
                                <li><a href="ui-typography.html"> Tambah Soal</a></li>

                            </ul>
                        </li>


                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted m-t-0">For Help ?</h5>
                    <p class=""><span class="text-custom">Email:</span> <br /> kimcilsupport@support.com</p>
                    <p class="m-b-0"><span class="text-custom">Call:</span> <br /> (+123) 123 456 789</p>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard 2 </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Zircos</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard </a>
                                    </li>
                                    <li class="active">
                                        Dashboard 2
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <?php

                        if ($_GET['module'] == "home") {
                            include "module/home/index.php";
                        } elseif ($_GET['module'] == "daftar_user") {
                            include "module/user/daftar_user.php";
                        } elseif ($_GET['module'] == "daftar_topik") {
                            include "module/topik/daftar_topik.php";
                        } elseif ($_GET['module'] == "daftar_materi") {
                            include "module/materi/daftar_materi.php";
                        } elseif ($_GET['module'] == "daftar_soal") {
                            include "module/soal/daftar_soal.php";
                        } elseif ($_GET['module'] == "edit_user") {
                            include "module/user/edit_user.php";
                        } elseif ($_GET['module'] == "edit_topik") {
                            include "module/topik/edit_topik.php";
                        } elseif ($_GET['module'] == "edit_materi") {
                            include "module/materi/edit_materi.php";
                        } elseif ($_GET['module'] == "edit_soal") {
                            include "module/soal/edit_soal.php";
                        } elseif ($_GET['module'] == "tambah_user") {
                            include "module/user/tambah_user.php";
                        } elseif ($_GET['module'] == "tambah_topik") {
                            include "module/topik/tambah_topik.php";
                        } elseif ($_GET['module'] == "tambah_materi") {
                            include "module/materi/tambah_materi.php";
                        } elseif ($_GET['module'] == "tambah_soal") {
                            include "module/soal/tambah_soal.php";
                        } else {
                            include "module/home/index.php";
                        }
                        ?>
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2016 - 2018 © Zircos theme by Coderthemes.
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="mdi mdi-close-circle-outline"></i>
            </a>
            <h4 class="">Settings</h4>
            <div class="setting-list nicescroll">
                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="../../public/template/default/assets/js/jquery.min.js"></script>
    <script src="../../public/template/default/assets/js/bootstrap.min.js"></script>
    <script src="../../public/template/default/assets/js/detect.js"></script>
    <script src="../../public/template/default/assets/js/fastclick.js"></script>
    <script src="../../public/template/default/assets/js/jquery.blockUI.js"></script>
    <script src="../../public/template/default/assets/js/waves.js"></script>
    <script src="../../public/template/default/assets/js/jquery.slimscroll.js"></script>
    <script src="../../public/template/default/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../../public/template/plugins/switchery/switchery.min.js"></script>

    <!-- Counter js  -->
    <script src="../../public/template/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../public/template/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Flot chart js -->
    <script src="../../public/template/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="../../public/template/plugins/flot-chart/jquery.flot.crosshair.js"></script>

    <script src="../../public/template/plugins/moment/moment.js"></script>
    <script src="../../public/template/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- data table -->
    <script src="../../public/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="../../public/template/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../../public/template/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="../../public/template/plugins/datatables/jszip.min.js"></script>
    <script src="../../public/template/plugins/datatables/pdfmake.min.js"></script>
    <script src="../../public/template/plugins/datatables/vfs_fonts.js"></script>
    <script src="../../public/template/plugins/datatables/buttons.html5.min.js"></script>
    <script src="../../public/template/plugins/datatables/buttons.print.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../../public/template/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.colVis.js"></script>
    <script src="../../public/template/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    <!-- form advance -->
    <script src="../../public/template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="../../public/template/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script src="../../public/template/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="../../public/template/plugins/select2/js/select2.min.js"></script>
    <script src="../../public/template/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="../../public/template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
    <script src="../../public/template/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="../../public/template/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <script src="../../public/template/plugins/autocomplete/jquery.mockjax.js"></script>
    <script src="../../public/template/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script src="../../public/template/plugins/autocomplete/countries.js"></script>
    <script src="../../public/template/default/assets/pages/jquery.autocomplete.init.js"></script>

    <script src="../../public/template/default/assets/pages/jquery.form-advanced.init.js"></script>
    <!-- init -->
    <script src="../../public/template/default/assets/pages/jquery.datatables.init.js"></script>
    <!-- Dashboard init -->
    <script src="../../public/template/default/assets/pages/jquery.dashboard_2.js"></script>

    <!-- App js -->
    <script src="../../public/template/default/assets/js/jquery.core.js"></script>
    <script src="../../public/template/default/assets/js/jquery.app.js"></script>

    <script type="text/javascript" src="../../public/template/plugins/parsleyjs/parsley.min.js"></script>
    <script>
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker({
            format: 'MM/DD/YYYY',
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2016',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            drops: 'down',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-success',
            cancelClass: 'btn-default',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Cancel',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
                keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "../plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
    </script>
    
</body>

</html>