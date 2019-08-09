@extends('layout')
@section('title','环境监控')

@section('content')
<div id="app">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">环境监控</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> 生成报告</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">温度</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div v-cloak class="h5 mb-0 font-weight-bold text-gray-800">@{{sensor.tmp}}℃</div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
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
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">湿度</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div v-cloak class="h5 mb-0 font-weight-bold text-gray-800">@{{sensor.hum}}%</div>
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

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">PM2.5</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div v-cloak class="h5 mb-0 mr-3 font-weight-bold text-gray-800">@{{sensor.pm25}}μg/m³</div>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-smog fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CO<sub>2</sub></div>
                <div v-cloak class="h5 mb-0 font-weight-bold text-gray-800">@{{sensor.co2}}ppm</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-leaf fa-2x text-gray-300"></i>
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
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">1层大厅<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">29.3℃</div>
                        <div class="col">61%</div>
                        <div class="w-100"></div>
                        <div class="col">29μg/m³</div>
                        <div class="col">428ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">1层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">28.9℃</div>
                        <div class="col">62%</div>
                        <div class="w-100"></div>
                        <div class="col">28μg/m³</div>
                        <div class="col">433ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">101教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.8℃</div>
                        <div class="col">43%</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">572ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">102教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.1℃</div>
                        <div class="col">45%</div>
                        <div class="w-100"></div>
                        <div class="col">21μg/m³</div>
                        <div class="col">746ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">103教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">27.2℃</div>
                        <div class="col">44%</div>
                        <div class="w-100"></div>
                        <div class="col">25μg/m³</div>
                        <div class="col">820ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">104教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.6℃</div>
                        <div class="col">41%</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">895ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-dark m-2" style="width: 11rem">
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
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">2层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">29.8℃</div>
                        <div class="col">63%</div>
                        <div class="w-100"></div>
                        <div class="col">26μg/m³</div>
                        <div class="col">452ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">201教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">26.5℃</div>
                        <div class="col">44%</div>
                        <div class="w-100"></div>
                        <div class="col">24μg/m³</div>
                        <div class="col">672ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">202教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">27.3℃</div>
                        <div class="col">45%</div>
                        <div class="w-100"></div>
                        <div class="col">22μg/m³</div>
                        <div class="col">725ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">203教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">27.1℃</div>
                        <div class="col">39%</div>
                        <div class="w-100"></div>
                        <div class="col">21μg/m³</div>
                        <div class="col">809ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">204教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">27.8℃</div>
                        <div class="col">42%</div>
                        <div class="w-100"></div>
                        <div class="col">19μg/m³</div>
                        <div class="col">856ppm</div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <!--Unit Card-->
            <div class="card border-warning m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-warning">3层楼道<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col text-warning">31.3℃</div>
                        <div class="col">60%</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">473ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">301教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">28.1℃</div>
                        <div class="col">38%</div>
                        <div class="w-100"></div>
                        <div class="col">18μg/m³</div>
                        <div class="col">965ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-warning m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-warning">302教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col text-warning">30.5℃</div>
                        <div class="col">41%</div>
                        <div class="w-100"></div>
                        <div class="col">22μg/m³</div>
                        <div class="col text-warning">1027ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-success m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-success">303教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col">29.6℃</div>
                        <div class="col">35%</div>
                        <div class="w-100"></div>
                        <div class="col">20μg/m³</div>
                        <div class="col">965ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-warning m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-warning">304教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col text-warning">30.4℃</div>
                        <div class="col">42%</div>
                        <div class="w-100"></div>
                        <div class="col">17μg/m³</div>
                        <div class="col">876ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-warning m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-warning">305教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col text-warning">31.2℃</div>
                        <div class="col">41%</div>
                        <div class="w-100"></div>
                        <div class="col">19μg/m³</div>
                        <div class="col">833ppm</div>
                    </div>
                </div>
            </div>
            <!--Unit Card-->
            <div class="card border-warning m-2" style="width: 11rem">
                <div class="card-header p-3 text-white bg-warning">306教室<a class="float-right" herf="#"><i class="fas fa-power-off fa-sm"></i></a></div>
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col text-warning">30.9℃</div>
                        <div class="col">40%</div>
                        <div class="w-100"></div>
                        <div class="col">23μg/m³</div>
                        <div class="col">962ppm</div>
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
</div>
@endsection

@section('custom_script')
    <script src="/js/env.js"></script>
@endsection