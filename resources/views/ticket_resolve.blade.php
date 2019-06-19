@extends('ticket_view')
@section('title','完成确认')

@section('actions')
<div class="form-group">
    <hr />
    <label>请填写完成回执</label>
    <button type="button" class="btn btn-success">确认完成</button>
    <button type="button" class="btn btn-danger">退回工单</button>
</div>
@endsection