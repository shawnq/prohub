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
</style>

<form name='ticket' method="POST" action="/ticket" >
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
        <select class="form-control" id="inputLocation" name="location">
            <option>一层大厅</option>
            <option>一层楼道</option>
            <option>二层楼道</option>
            <option>三层楼道</option>
            <option>阶梯教室</option>
            <option>101教室</option>
            <option>102教室</option>
            <option>103教室</option>
            <option>104教室</option>
            <option>201教室</option>
            <option>202教室</option>
        </select>
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
        <label>照片上传(可选)</label>
        <div class="card" style="width: 5rem;">
            <div class="card-body" style="text-align: center;">
            <i class="fas fa-plus fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputDescription">问题描述(可选)</label>
        <textarea class="form-control" id="inputDescription" name="description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">提交工单</button>
    
</form>
@endsection

@section('custom_script')
<script type="text/javascript">
$(document).ready( function () {
    if (window.innerWidth<640) $("#sidebarToggleTop").click();
    $( ".btn.type-selector" ).click(function() {
        $(".btn.type-selector.selected").removeClass("selected active");
        $(this).addClass("selected active");
    });
});
</script>
@endsection
