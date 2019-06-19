@extends('ticket_view')
@section('title','分派工单')

@section('actions')
<div class="form-group">
    <hr />
    <label>上门时间</label>
    <input type="datetime-local" class="form-control" id="inputDate" placeholder="请与客户确认">
    <br />
    <button type="button" class="btn btn-success">接受工单</button>
    <button type="button" class="btn btn-primary">转发他人</button>
</div>
@endsection