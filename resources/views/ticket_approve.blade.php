@extends('ticket_view')
@section('title','确认工单')

@section('actions')
<div class="form-group">
    <hr />
    <label>审批意见</label>
    <textarea class="form-control" id="inputComment" name="comment" rows="3"></textarea>
    <br />
    <button id="btnApprove" type="button" class="btn btn-success">确认工单</button>
    <button id="btnCancel" type="button" class="btn btn-danger">撤销工单</button>
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
    $("#btnApprove").click(function() {
        $('form').attr("action","/ticket_approve/{{$ticket->id}}").submit();
    });
    //button actions
    $("#btnCancel").click(function() {
        $('form').attr("action","/ticket_cancel/{{$ticket->id}}").submit();
    });

    $('#headingTwo .btn').click()
});
</script>
@endsection
