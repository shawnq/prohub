@extends('ticket_view')
@section('title','服务评价')

@section('actions')
<style>
.fa-star.checked {
  color: orange;
}
</style>
<div class="form-group">
    <hr />
    <label>您对本次服务综合评价是？</label>
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    <br />
    <label>您对您对服务结果否满意？</label>
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    <label>您对本次服务速度是否满意？</label>
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    <label>您对服务人员的态度否满意？</label>
    <div class="rating">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    <br />
    <label>服务评语</label>
    <textarea class="form-control" id="inputComment" name="comment" rows="3" ></textarea>
    <br />
    <button id="btnFeedback" type="button" class="btn btn-success">提交评价</button>
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
    $("#btnFeedback").click(function() {
        $('form').attr("action","/ticket_feedback/{{$ticket->id}}").submit();
    });
});
</script>
@endsection