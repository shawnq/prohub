@extends('layout')
@section('title','环境监控')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">环境监控</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 生成报告</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">温度</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">26.3℃</div>
                </div>
                <div class="col">
                    <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">二氧化碳</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">438ppm</div>
                </div>
                <div class="col">
                    <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-bolt fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">PM2.5</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">23μg/m³</div>
                </div>
                <div class="col">
                    <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-tint fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">湿度</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">62%</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Content Row -->

    <div class="row">

    <!-- Unit Chart -->
    <div class="col-xl-12">
    <div class="card shadow ">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">实时检测</h6>
            <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">操作:</div>
                <a class="dropdown-item" href="#">导出</a>
                <a class="dropdown-item" href="#">打印</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">设置</a>
            </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <h5>主楼</h5>
            <div class="row">
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">1层大厅<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">1层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">101教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">102教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">103教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">104教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-dark m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-dark">阶梯教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">-</div>
                        <div class="col">-</div>
                        <div class="w-100"></div>
                        <div class="col">-</div>
                        <div class="col">-</div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">2层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">201教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">202教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">203教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">204教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">3层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">301教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">302教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">303教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">304教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">305教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 10rem">
                <div class="card-header p-3 text-white bg-success">306教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.3℃</div>
                        <div class="col">438ppm</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">62%</div>
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
@endsection

@section('custom_script')
<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
@endsection