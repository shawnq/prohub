@extends('ticket_view')
@section('title','完成确认')

@section('actions')
<div class="form-group">
    <hr />
    <label>请填写完成回执</label>
    <br/>
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
