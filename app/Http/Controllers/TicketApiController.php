<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $filter='all')
    {
        //todo: apply $filter
        $tickets = Ticket::all();
        return $tickets;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->title = $request->location . "的" . $request->type . "问题";
        $ticket->type = $request->type;
        $ticket->location = $request->location;
        $ticket->priority = $request->priority;
        $ticket->description = $request->description;
        $ticket->state = '待确认';
        $ticket->created_by = 1;
        
        $ticket->save();
        return $ticket;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return $ticket;
    }
}
