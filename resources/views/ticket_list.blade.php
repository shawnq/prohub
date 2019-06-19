@extends('layout')
@section('title','工单列表')

@section('custom_style')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="table-responsive">
    <table id="ticket_list" style="width:100%" class="table">
        <thead>
            <th>ID</th>
            <th>工单</th>
            <th>状态</th>
            <th>优先级</th>
            <th>报告人</th>
        </thead>
        <tfoot>
            <th>ID</th>
            <th>工单</th>
            <th>状态</th>
            <th>优先级</th>
            <th>报告人</th>
        </tfoot>
        <tbody>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td><a href="/ticket/{{$ticket->id}}">{{$ticket->title}}</a></td>
                <td><a href="/ticket_process/{{$ticket->id}}" class="btn">{{$ticket->state}}<a></td>
                <td>{{$ticket->priority}}</td>
                <td>{{$ticket->created_by}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('custom_script')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#ticket_list').DataTable();
    if (window.innerWidth<640) $("#sidebarToggleTop").click();
});
</script>
@endsection