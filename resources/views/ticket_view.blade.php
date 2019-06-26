@extends('layout')
@section('title','创建工单')

@section('content')
<style type="text/css">
.type-selector {
    width: 6rem;
}
.type-selector i.fas {
    padding: 1rem 0rem 0.5rem 0rem;
    display: block;
}
.type-selector input[type=radio] {
    display: none;
}
.type-selector.selected {
    color: #fff !important;
    background-color: #4e73df !important;
    border-color: #4e73df !important;
}
#inputPriority .btn.active {
    color: #fff !important;
    background-color: #4e73df !important;
    border-color: #4e73df !important;
}
.btn.type-selector:not(.selected) {
    display: none;
}
#inputPriority .btn:not(.selected) {
    display: none;
}


.tracking-detail {
 padding:3rem 0
}
#tracking {
 margin-bottom:1rem
}
[class*=tracking-status-] p {
 margin:0;
 font-size:1.1rem;
 color:#fff;
 text-transform:uppercase;
 text-align:center
}
[class*=tracking-status-] {
 padding:1.6rem 0
}
.tracking-status-intransit {
 background-color:#65aee0
}
.tracking-status-outfordelivery {
 background-color:#f5a551
}
.tracking-status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-status-delivered {
 background-color:#4cbb87
}
.tracking-status-attemptfail {
 background-color:#b789c7
}
.tracking-status-error,.tracking-status-exception {
 background-color:#d26759
}
.tracking-status-expired {
 background-color:#616e7d
}
.tracking-status-pending {
 background-color:#ccc
}
.tracking-status-inforeceived {
 background-color:#214977
}
.tracking-list {
 border:1px solid #e5e5e5
}
.tracking-item {
 border-left:1px solid #e5e5e5;
 position:relative;
 padding:2rem 1.5rem .5rem 2.5rem;
 font-size:.9rem;
 margin-left:3rem;
 min-height:5rem
}
.tracking-item:last-child {
 padding-bottom:4rem
}
.tracking-item .tracking-date {
 margin-bottom:.5rem
}
.tracking-item .tracking-date span {
 color:#888;
 font-size:85%;
 padding-left:.4rem
}
.tracking-item .tracking-content {
 padding:.5rem .8rem;
 background-color:#f4f4f4;
 border-radius:.5rem
}
.tracking-item .tracking-content span {
 display:block;
 color:#888;
 font-size:85%
}
.tracking-item .tracking-icon {
 line-height:2.6rem;
 position:absolute;
 left:-1.3rem;
 width:2.6rem;
 height:2.6rem;
 text-align:center;
 border-radius:50%;
 font-size:1.1rem;
 background-color:#fff;
 color:#fff
}
.tracking-item .tracking-icon.status-sponsored {
 background-color:#f68
}
.tracking-item .tracking-icon.status-delivered {
 background-color:#4cbb87
}
.tracking-item .tracking-icon.status-outfordelivery {
 background-color:#f5a551
}
.tracking-item .tracking-icon.status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-item .tracking-icon.status-attemptfail {
 background-color:#b789c7
}
.tracking-item .tracking-icon.status-exception {
 background-color:#d26759
}
.tracking-item .tracking-icon.status-inforeceived {
 background-color:#214977
}
.tracking-item .tracking-icon.status-intransit {
 color:#e5e5e5;
 border:1px solid #e5e5e5;
 font-size:.6rem
}
@media(min-width:992px) {
 .tracking-item {
  margin-left:10rem
 }
 .tracking-item .tracking-date {
  position:absolute;
  left:-10rem;
  width:7.5rem;
  text-align:right
 }
 .tracking-item .tracking-date span {
  display:block
 }
 .tracking-item .tracking-content {
  padding:0;
  background-color:transparent
 }
}

</style>

<form name='ticket' method="POST" action="/ticket/{{$ticket->id}}" >
    @csrf
    <div class="accordion" id="accordionExample">
        <div class="card">
            <button id="headingOne" class="btn btn-lg btn-primary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{$ticket->title}}
            </button>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">当前状态</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$ticket->state}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">收费金额</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$ticket->amount}}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <hr />
                    <label class="col-sm-2 col-form-label">报单人</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control" value="宋老师" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button"><i class="fas fa-phone"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <hr />
                    <label class="col-sm-2 col-form-label">派单人</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control" value="王经理" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button"><i class="fas fa-phone"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">接单人</label>
                    <div class="input-group col-sm-10">
                        <input type="text" class="form-control" value="吴小双" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-info" type="button"><i class="fas fa-phone"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-file" style="padding-right:0.5rem"></i>工单详情
                </button>
            </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                <div class="form-group">
                    <label for="inputType">工单类型</label>
                    <br />
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="照明" autocomplete="off">
                        <i class="fas fa-lightbulb fa-2x"></i>
                        照明
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="电源" autocomplete="off">
                        <i class="fas fa-plug fa-2x"></i>
                        电源
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="网络" autocomplete="off">
                        <i class="fas fa-wifi fa-2x"></i>
                        网络
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="空调" autocomplete="off">
                        <i class="fas fa-wind fa-2x"></i>
                        空调
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="电脑" autocomplete="off">
                        <i class="fas fa-desktop fa-2x"></i>
                        电脑
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="桌椅" autocomplete="off">
                        <i class="fas fa-chair fa-2x"></i>
                        桌椅
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="门窗" autocomplete="off">
                        <i class="fas fa-door-open fa-2x"></i>
                        门窗
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="上下水" autocomplete="off">
                        <i class="fas fa-tint fa-2x"></i>
                        上下水
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="电梯" autocomplete="off">
                        <i class="fas fa-caret-square-up fa-2x"></i>
                        电梯
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="清洁" autocomplete="off">
                        <i class="fas fa-broom fa-2x"></i>
                        清洁
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="安保" autocomplete="off">
                        <i class="fas fa-user-shield fa-2x"></i>
                        安保
                    </label>
                    <label class="btn btn-secondary type-selector">
                        <input type="radio" name="type" value="其他" autocomplete="off">
                        <i class="fas fa-question-circle fa-2x"></i>
                        其他
                    </label>
                </div>
                <div class="form-group">
                    <label for="inputLocation">所在位置</label>
                    <input type="text" class="form-control" value="{{$ticket->location}}" readonly>
                </div>
                <div class="form-group">
                    <label for="inputPriority">优先级</label><br />
                    <div id="inputPriority" class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="priority" value="高" autocomplete="off"> 紧急
                    </label>
                    <label class="btn btn-secondary active">
                        <input type="radio" name="priority" value="中" autocomplete="off" checked> 正常
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="priority" value="低" autocomplete="off"> 不急
                    </label>
                    </div>
                <div>
                <div class="form-group">
                    <label>现场照片</label>
                    <div class="card" style="width: 5rem;">
                        <img class="card-img-top" src="http://img.mp.itc.cn/upload/20170405/6b16b3f626f44fba8412926edeb89a84.jpeg"></img>
                        <div class="card-body" style="text-align: center;">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDescription">问题描述</label>
                    <textarea class="form-control" id="inputDescription" name="description" rows="3" readonly>{{ $ticket->description }}</textarea>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-history" style="padding-right:0.5rem"></i>处理过程
                </button>
            </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            <div class="tracking-list">
               <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>05:01 PM</span></div>
                  <div class="tracking-content">王老师 创建工单<span>101教室照明问题</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>05:29 PM</span></div>
                  <div class="tracking-content">赵主任 审核通过<span>请尽快维修!</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>05:34 PM</span></div>
                  <div class="tracking-content">王经理 分派工单<span>我已就近分配维修人员</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-intransit">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>05:40 PM</span></div>
                  <div class="tracking-content">张师傅 接受工单<span>预计6月13日7:00PM上门</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-inforeceived">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>07:42 PM</span></div>
                  <div class="tracking-content">王经理 调整金额<span>线路开关损坏，更换开关面板。调整工单费用为50元</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-outfordelivery">
                      <i class="fas fa-shipping-fast"></i>
                  </div>
                  <div class="tracking-date">2019年6月13日<span>07:46 PM</span></div>
                  <div class="tracking-content">张师傅 未完工，再次预约<span>配件不全，需库房调货。预计6月14日8:30AM上门</span></div>
               </div>
               <div class="tracking-item">
                  <div class="tracking-icon status-outfordelivery">
                      <i class="fas fa-plus"></i>
                  </div>
                  <div class="tracking-date">点此添加记录<span></span></div>
               </div>
            </div>

            </div>
            </div>
        </div>
    </div>

    @yield('actions')
    
</form>
@endsection

@section('custom_script')
<script>
$(document).ready( function () {
    if (window.innerWidth<640) $("#sidebarToggleTop").click();
    //set type
    $(".btn.type-selector input[value={{$ticket->type}}]").parent().addClass("selected active");
    //set priority
    $("#inputPriority input[value={{$ticket->priority}}]").parent().addClass("selected active");
});
</script>
@endsection
