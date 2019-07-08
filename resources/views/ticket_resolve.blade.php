@extends('ticket_view')
@section('title','完成确认')

@section('actions')
<hr />
<div class="accordion" id="accordionForm">
    <div class="form-group">
        <button type="button" class="btn btn-success" data-toggle="collapse" aria-expanded="false" data-target="#multiCollapseResolve">完成工单</button>
        <button type="button" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" data-target="#multiCollapseReschedule">服务改期</button>
        <button type="button" class="btn btn-danger" data-toggle="collapse" aria-expanded="false" data-target="#multiCollapseReject">退回工单</button>
    </div>
    <div class="form-group collapse multi-collapse" id="multiCollapseResolve" data-parent="#accordionForm">
        <label>处理照片</label>
        <div class="card" style="width: 5rem;">
            <div class="card-body" style="text-align: center;">
            <i class="fas fa-plus fa-2x text-gray-300"></i>
            </div>
        </div>
        <label for="inputComment">处理记录</label>
        <textarea class="form-control" id="inputResolveComment" name="resolve_comment" rows="3"></textarea>
        <br/>
        <button id="btnResolve" type="button" class="btn btn-success">提交</button>
    </div>
    <div class="form-group collapse multi-collapse" id="multiCollapseReschedule" data-parent="#accordionForm">
        <label>上门时间</label>
        <input type="datetime-local" class="form-control" id="inputDate" placeholder="请与客户确认">
        <label for="inputComment">改期备注</label>
        <textarea class="form-control" id="inputResolveComment" name="reschedule_comment" rows="3"></textarea>
        <br/>
        <button id="btnReschedule" type="button" class="btn btn-primary">提交</button>
    </div>
    <div class="form-group collapse multi-collapse" id="multiCollapseReject" data-parent="#accordionForm">
        <label>处理照片</label>
        <div class="card" style="width: 5rem;">
            <div class="card-body" style="text-align: center;">
            <i class="fas fa-plus fa-2x text-gray-300"></i>
            </div>
        </div>
        <label for="inputComment">处理记录</label>
        <textarea class="form-control" id="inputResolveComment" name="reject_comment" rows="3"></textarea>
        <br/>
        <button id="btnReject" type="button" class="btn btn-danger">提交</button>
    </div>
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
    $("#btnResolve").click(function() {
        $('form').attr("action","/ticket/{{$ticket->id}}/resolve").submit();
    });
    $("#btnReschedule").click(function() {
        $('form').attr("action","/ticket/{{$ticket->id}}/reschedule").submit();
    });
    $("#btnReject").click(function() {
        $('form').attr("action","/ticket/{{$ticket->id}}/reject").submit();
    });
});
</script>
@endsection
