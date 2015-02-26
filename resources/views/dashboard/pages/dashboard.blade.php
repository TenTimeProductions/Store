@extends('dashboard.master')

@section('title')
    <title>{{ $user->name }} | {{$page}} - FM Group</title>
@endsection

@section('header')
    <link href="/back/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="/back/plugins/metrojs/metrojs.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="/back/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>

        .ibox-content h1, .ibox-content h2, .ibox-content h3, .ibox-content h4, .ibox-content h5, .ibox-title h1, .ibox-title h2, .ibox-title h3, .ibox-title h4, .ibox-title h5 {
            font-size: 22px;
        }
        .no-margins {
            margin: 0 !important;
        }
        .text-success {
            color: #1c84c6;
        }
        .font-bold {
            font-weight: 600;
        }
        .stat-percent {
            float: right;
        }
        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
            box-shadow: 0 0 1px rgb(151, 150, 150);
        }
        .ibox:after,
        .ibox:before {
            display: table;
        }
        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 4px 0px 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            height: 48px;
        }
        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0px;
        }
        .ibox-content {
            clear: both;
        }
        .ibox-heading {
            background-color: #f3f6fb;
            border-bottom: none;
        }
        .ibox-heading h3 {
            font-weight: 200;
            font-size: 24px;
        }
        .ibox-title h5 {
            display: inline-block;
            font-size: 14px;
            margin: 0 0 7px;
            padding: 0;
            text-overflow: ellipsis;
            float: left;
        }
        .ibox-title .label {
            float: left;
            margin-left: 4px;
        }
        .ibox-tools {
            display: inline-block;
            float: right;
            margin-top: 0;
            position: relative;
            padding: 0;
        }
        .ibox-tools a {
            cursor: pointer;
            margin-left: 5px;
            color: #c4c4c4;
        }
        .ibox-tools a.btn-primary {
            color: #fff;
        }
        .ibox-tools .dropdown-menu > li > a {
            padding: 4px 10px;
            font-size: 12px;
        }
        .ibox .open > .dropdown-menu {
            left: auto;
            right: 0;
        }
    </style>
@endsection

@section('content')
    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content" class="dashboard">
        <div class="row m-t-20">
            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">Mensal</span>
                        <h5>Visitas</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">3,200</h1>
                        <div class="stat-percent font-bold text-success">78% <i class="fa fa-bolt"></i></div>
                        <small>Visitas totais</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Mensal</span>
                        <h5>Encomendas</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">31</h1>
                        <div class="stat-percent font-bold text-info">12% <i class="fa fa-level-up"></i></div>
                        <small>Novas Encomendas</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">Total</span>
                        <h5>Estatísticas</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="no-margins">€ 4,420</h1>
                                <div class="font-bold text-navy">54% <i class="fa fa-level-up"></i> <small>Subida rápida</small></div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="no-margins">26,120</h1>
                                <div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Subida lenta</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Créditos</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">31</h1>
                        <div class="stat-percent font-bold text-info">131 <i class="fa fa-level-up"></i></div>
                        <small>Comprados</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b-20">
                <div class="modal fade" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Manage</strong> my events</h4>
                            </div>
                            <div class="modal-body">
                                <p></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event">Create event</button>
                                <button type="button" class="btn btn-danger delete-event"  data-dismiss="modal">Delete</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div id="external-events" class="bg-white row m-0">
                    <div class="col-md-2 p-0">
                        <div class="widget bg-gray-l">
                            <div class="widget-body p-b-0">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h2 class="panel-title width-100p c-blue w-500 f-20 carrois" id="calender-current-day">Events Manager</h2>
                                        <div id='external-events'>
                                            <br><br><br>
                                            <div class="external-event bg-green" data-class="bg-green" style="position: relative;">
                                                <i class="fa fa-move"></i>Sport
                                            </div>
                                            <div class="external-event bg-purple" data-class="bg-purple" style="position: relative;">
                                                <i class="fa fa-move"></i>Meeting
                                            </div>
                                            <div class="external-event bg-red" data-class="bg-red" style="position: relative;">
                                                <i class="fa fa-move"></i>Work
                                            </div>
                                            <div class="external-event bg-blue" data-class="bg-blue" style="position: relative;">
                                                <i class="fa fa-move"></i>Children
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10  p-0 no-bd">
                        <div class="widget bg-white">
                            <div class="widget-body p-b-0">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
@endsection

@section('footer')
        <!-- BEGIN MANDATORY SCRIPTS -->
<script src="/back/plugins/jquery-1.11.js"></script>
<script src="/back/plugins/jquery-migrate-1.2.1.js"></script>
<script src="/back/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
<script src="/back/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/back/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="/back/plugins/bootstrap-select/bootstrap-select.js"></script>
<script src="/back/plugins/icheck/icheck.js"></script>
<script src="/back/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/back/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
<script src="/back/plugins/nprogress/nprogress.js"></script>
<script src="/back/plugins/charts-sparkline/sparkline.min.js"></script>
<script src="/back/plugins/breakpoints/breakpoints.js"></script>
<script src="/back/plugins/numerator/jquery-numerator.js"></script>
<!-- END MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/back/plugins/metrojs/metrojs.min.js"></script>
<script src='/back/plugins/fullcalendar/moment.min.js'></script>
<script src='/back/plugins/fullcalendar/fullcalendar.min.js'></script>
<script src="/back/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="/back/plugins/google-maps/markerclusterer.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="/back/plugins/google-maps/gmaps.js"></script>
<script src="/back/plugins/charts-flot/jquery.flot.js"></script>
<script src="/back/plugins/charts-flot/jquery.flot.animator.min.js"></script>
<script src="/back/plugins/charts-flot/jquery.flot.resize.js"></script>
<script src="/back/plugins/charts-flot/jquery.flot.time.min.js"></script>
<script src="/back/plugins/charts-morris/raphael.min.js"></script>
<script src="/back/plugins/charts-morris/morris.min.js"></script>
<script src="/back/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="/back/js/calendar.js"></script>
<script src="/back/js/dashboard.js"></script>
<!-- END  PAGE LEVEL SCRIPTS -->
<script src="/back/js/application.js"></script>


        <script src="/back/plugins/jquery.cookie.min.js"></script>

@endsection