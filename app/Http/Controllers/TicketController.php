<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
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
        return view('ticket_list',[
            'tickets'=>$tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_create');
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
        return $this->index('all');

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
        return view('ticket_view',[
            'ticket'=>$ticket
        ]);
    }
    public function process($id)
    {
        $ticket = Ticket::find($id);
        if ($ticket->state=="待确认") {
            return view('ticket_assign',[
                'ticket'=>$ticket
            ]);    
        } else if ($ticket->state=="已派单") {
            return view('ticket_resolve',[
                'ticket'=>$ticket
            ]);    
        } else if ($ticket->state=="已解决") {
            return view('ticket_feedback',[
                'ticket'=>$ticket
            ]);    
        } else {
            return view('ticket_view',[
                'ticket'=>$ticket
            ]);
        }
    }
    //post action
    public function process_accept(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->state="已派单";
        $ticket->save();

        return view('ticket_view',[
            'ticket'=>$ticket
        ]);
    }
    //post action
    public function process_reject(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->state="待确认";
        $ticket->save();
        
        return view('ticket_view',[
            'ticket'=>$ticket
        ]);
    }
    //post action
    public function process_resolve(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->state="已解决";
        $ticket->save();
        
        return view('ticket_view',[
            'ticket'=>$ticket
        ]);

    }
    //post action
    public function process_feedback(Request $request, $id) {
        $ticket = Ticket::find($id);
        $ticket->state="已评价";
        $ticket->save();
        
        return view('ticket_view',[
            'ticket'=>$ticket
        ]);
    }
    public function assign($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket_assign',[
            'ticket'=>$ticket
        ]);
    }
    public function resolve($id)
    {
        $ticket = Ticket::find($id);
        return view('ticket_resolve',[
            'ticket'=>$ticket
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
