@extends('layouts.admin.index')


@section('content')

<div class="main-content">

    <div class="content-wrapper">
        <!--Statistics cards Starts-->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-blackberry">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">
                            <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$2156</h3>
                                    <span>Total Tax</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-pie-chart font-large-1"></i>
                                </div>
                            </div>
                        </div>
                        <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-ibiza-sunset">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">
                            <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$1567</h3>
                                    <span>Total Cost</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-bulb font-large-1"></i>
                                </div>
                            </div>
                        </div>
                        <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-green-tea">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">
                            <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$4566</h3>
                                    <span>Total Sales</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-graph font-large-1"></i>
                                </div>
                            </div>
                        </div>
                        <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-pomegranate">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">
                            <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$8695</h3>
                                    <span>Total Earning</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-wallet font-large-1"></i>
                                </div>
                            </div>
                        </div>
                        <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Statistics cards Ends-->

        <!--Line with Area Chart 1 Starts-->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> @lang('dashboard.product_sales')  </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="chart-info mb-3 ml-3">
                                <span class="gradient-blackberry d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
                                Sales
                                <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
                                Visits
                            </div>
                            <div id="line-area" class="height-350 lineArea">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Line with Area Chart 1 Ends-->

        <div class="row match-height">
            <div class="col-xl-4 col-lg-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-content">

                        <p class="font-medium-2 text-muted text-center pb-2">Last 6 Months Sales</p>
                        <div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-12">
                <div class="card">
                    <div class="card-header pb-2">
                        <h4 class="card-title">Shopping Cart</h4>
                    </div>
                    <div class="card-content">
                        <table class="table table-responsive-sm text-center">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="media-object round-media height-50" src="app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>
                                    <td>Ferrero Rocher</td>
                                    <td>1</td>
                                    <td>
                                        <a class="btn white btn-round btn-primary">Active</a>
                                    </td>
                                    <td>$19.94</td>
                                    <td>
                                        <a class="danger" data-original-title="" title="">
                                            <i class="ft-x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="media-object round-media height-50" src="app-assets/img/elements/07.png" alt="Generic placeholder image" /></td>
                                    <td>Headphones</td>
                                    <td>2</td>
                                    <td>
                                        <a class="btn white btn-round btn-danger">Disabled</a>
                                    </td>
                                    <td>$99.00</td>
                                    <td>
                                        <a class="danger" data-original-title="" title="">
                                            <i class="ft-x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="media-object round-media height-50" src="app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>
                                    <td>Camera</td>
                                    <td>1</td>
                                    <td>
                                        <a class="btn white btn-round btn-info">Paused</a>
                                    </td>
                                    <td>$299.00</td>
                                    <td>
                                        <a class="danger" data-original-title="" title="">
                                            <i class="ft-x"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img class="media-object round-media height-50" src="app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>
                                    <td>Beer</td>
                                    <td>2</td>
                                    <td>
                                        <a class="btn white btn-round btn-success">Active</a>
                                    </td>
                                    <td>$24.51</td>
                                    <td>
                                        <a class="danger" data-original-title="" title="">
                                            <i class="ft-x"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-xl-8 col-lg-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Visit & Sales Statistics</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="chart-info mb-2">
                                <span class="text-uppercase mr-3"><i class="fa fa-circle primary font-small-2 mr-1"></i> Sales</span>
                                <span class="text-uppercase"><i class="fa fa-circle deep-purple font-small-2 mr-1"></i> Visits</span>
                            </div>
                            <div id="line-area2" class="height-400 lineAreaDashboard">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-12">
                <div class="card gradient-blackberry">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title white">Statistics</h4>
                            <div class="p-2 text-center">
                                <a class="white font-medium-1">Month</a>
                                <a class="btn btn-raised btn-round bg-white mx-3 px-3">Week</a>
                                <a class="white font-medium-1">Day</a>
                            </div>
                            <div class="my-3 text-center white">
                                <a class="font-large-2 d-block mb-1">$ 78.89 <span class="ft-arrow-up font-large-2"></span></a>
                                <span class="font-medium-1">Week2 +15.44</span>
                            </div>
                        </div>
                        <div id="lineChart" class="height-250 lineChart lineChartShadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row match-height">
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>
                    </div>
                    <div class="card-content">

                        <p class="font-medium-2 text-muted text-center">Hobbies</p>
                        <div id="bar-chart" class="height-250 BarChartShadow BarChart">
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center">
                                    <span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                    <span class="font-large-1 d-block mb-2">48</span>
                                    <span>Sport</span>
                                </div>
                                <div class="col text-center">
                                    <span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                    <span class="font-large-1 d-block mb-2">9</span>
                                    <span>Music</span>
                                </div>
                                <div class="col text-center">
                                    <span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                    <span class="font-large-1 d-block mb-2">26</span>
                                    <span>Travel</span>
                                </div>
                                <div class="col text-center">
                                    <span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
                                    <span class="font-large-1 d-block mb-2">17</span>
                                    <span>News</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">User List</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media mb-1">
                                <a>
                                    <img alt="96x96" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-12.png">
                                </a>
                                <div class="media-body">
                                    <h4 class="font-medium-1 mt-1 mb-0">Jessica Rice</h4>
                                    <p class="text-muted font-small-3">UX Designer</p>
                                </div>
                                <div class="mt-1">
                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" checked id="customcheckbox1">
                                        <label class="custom-control-label" for="customcheckbox1"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="media mb-1">
                                <a>
                                    <img alt="96x96" class="media-object d-flex mr-3 bg-danger height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-11.png">
                                </a>
                                <div class="media-body">
                                    <h4 class="font-medium-1 mt-1 mb-0">Jacob Rios</h4>
                                    <p class="text-muted font-small-3">HTML Developer</p>
                                </div>
                                <div class="mt-1">
                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox2">
                                        <label class="custom-control-label" for="customcheckbox2"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="media mb-1">
                                <a>
                                    <img alt="96x96" class="media-object d-flex mr-3 bg-success height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png">
                                </a>
                                <div class="media-body">
                                    <h4 class="font-medium-1 mt-1 mb-0">Russell Delgado</h4>
                                    <p class="text-muted font-small-3">Database Designer</p>
                                </div>
                                <div class="mt-1">
                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox3">
                                        <label class="custom-control-label" for="customcheckbox3"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="media mb-1">
                                <a>
                                    <img alt="96x96" class="media-object d-flex mr-3 bg-warning height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-6.png">
                                </a>
                                <div class="media-body">
                                    <h4 class="font-medium-1 mt-1 mb-0">Sara McDonald</h4>
                                    <p class="text-muted font-small-3">Team Leader</p>
                                </div>
                                <div class="mt-1">
                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" checked id="customcheckbox4">
                                        <label class="custom-control-label" for="customcheckbox4"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="media mb-1">
                                <a>
                                    <img alt="96x96" class="media-object d-flex mr-3 bg-info height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-18.png">
                                </a>
                                <div class="media-body">
                                    <h4 class="font-medium-1 mt-1 mb-0">Janet Lucas</h4>
                                    <p class="text-muted font-small-3">Project Manger</p>
                                </div>
                                <div class="mt-1">
                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox5">
                                        <label class="custom-control-label" for="customcheckbox5"></label>
                                    </div>

                                </div>
                            </div>
                            <div class="action-buttons mt-2 text-center">
                                <a class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Stats</h4>
                    </div>
                    <div class="card-content">

                        <p class="font-medium-2 text-muted text-center">Project Tasks</p>
                        <div id="donut-dashboard-chart" class="height-250 donut">
                        </div>

                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">23% - Started</span>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">14% - In Progress</span>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-amber" role="progressbar" style="width: 14%;" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">35% - Remaining</span>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-deep-purple bg-lighten-1" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <span class="mb-1 text-muted d-block">28% - Done</span>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar bg-blue" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- END : End Main Content-->

@endsection


@section('js')
 @parent
 <script src="{{ getasset('/app-assets/js/dashboard1.js')}}" type="text/javascript"></script>
@endsection


@section('js')
 @parent
 <script src="{{ getasset('/app-assets/js/dashboard1.js')}}" type="text/javascript"></script>
@endsection