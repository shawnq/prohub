@extends('ticket_view')
@section('title','完成确认')

@section('actions')
<hr />
<div class="form-group">
    <label>完成照片</label>
    <div class="card" style="width: 5rem;">
        <div class="card-body" style="text-align: center;">
        <i class="fas fa-plus fa-2x text-gray-300"></i>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputDescription">完成记录</label>
    <textarea class="form-control" id="inputDescription" name="resolve_note" rows="3"></textarea>
</div>
<br/>
<div class="form-group">
    <button id="btnResolve" type="button" class="btn btn-success">确认完成</button>
    <button id="btnReject" type="button" class="btn btn-danger">退回工单</button>
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
        $('form').attr("action","/ticket_resolve/{{$ticket->id}}").submit();
    });
    $("#btnReject").click(function() {
        $('form').attr("action","/ticket_reject/{{$ticket->id}}").submit();
    });
});
</script>
@endsection
