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
</style>

<form name='ticket' method="POST" action="/ticket/{{$ticket->id}}" >
    @csrf
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

    @yield('actions')
    
</form>
@endsection

@section('custom_script')
<script>
    //set type
    $(".btn.type-selector input[value={{$ticket->type}}]").parent().addClass("selected active");
    //set priority
    $("#inputPriority input[value={{$ticket->priority}}]").parent().addClass("selected active");
</script>
@endsection
