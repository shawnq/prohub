@extends('ticket_view')
@section('title','分派工单')

@section('actions')
<div class="form-group">
    <hr />
    <label>上门时间</label>
    <input type="datetime-local" class="form-control" id="inputDate" placeholder="请与客户确认">
    <br />
    <button id="btnAccept" type="button" class="btn btn-success">接受工单</button>
    <button id="btnForward" type="button" class="btn btn-primary">委托他人</button>
</div>

@endsection

@section('custom_script')
<script>
$(document).ready( function () {
    if (window.innerWidth<640) $("#sidebarToggleTop").click();

    //set type
    $(".btn.type-selector input[value={{$ticket->type}}]").parent().addClass("selected active");
    //set priority
    $("#inputPriority input[value={{$ticket->priority}}]").parent().addClass("selected active");
    //button actions
    $("#btnAccept").click(function() {
        $('form').attr("action","/ticket_accept/{{$ticket->id}}").submit();
    });
    $("#btnForward").click(function() {
        alert("请在'↗'菜单中点击分享");
    });
});
</script>
@endsection
