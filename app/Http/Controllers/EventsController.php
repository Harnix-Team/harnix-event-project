<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventsCategory;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\TicketsCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;



class EventsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventCategories = EventCategory::all(); 

        $events = Event::where('date_end', '>=', now())->orderBy('created_at', 'desc')->get();

        // return all events
        return view('events', compact('events', 'eventCategories'));
    }


    public function displayInHome()
    {
        $eventCategories = EventCategory::all(); 

        $events = Event::where('date_end', '>=', now('UTC'))
        ->orderBy('created_at', 'desc')
        ->take(4) 
        ->get();
        // return all events
        return view('home', compact('events', 'eventCategories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $ticketCategories = TicketsCategory::all();

        $eventCategories = EventCategory::all();

        return view('users.events.create_events', compact('ticketCategories', 'eventCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            
            'event_name' => ['required', 'string', 'max:255'],
            'event_type' => ['required', 'numeric'],
            'event_description' => ['required', 'string'],
            'img_event' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:10000'],
            'tags' => ['required', 'string', 'max:255'],
            'event_place' => ['required', 'string', 'max:255'],
            'agency' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'begin_date' => ['required', 'date', 'max:255'],
            'begin_time' => ['required', 'string', 'max:255'],
            'end_date' => ['required', 'date', 'after_or_equal:begin_date'],
            'end_time' => ['required', 'string', 'max:255'],
            'ticket_names.*' => ['required', 'max:255'],
            'ticket_prices.*' => ['required', 'numeric', 'min:0'],
            'ticket_description.*' => ['required', 'string', 'max:255'],
            'ticket_numbers.*' => ['required', 'numeric', 'min:1'],
        ]);
        
        // create link of event picture
        if ($request->hasFile('img_event')) {
            $image = $request->file('img_event');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/img_event', $imageName);
        }
       

       
        $event = Event::create([

            'user_id' => auth()->id(),
            'name' => $request->event_name,
            'agency' => $request->agency,
            'img' => 'storage/img_event/' . $imageName,
            'category_id' => $request->event_type,
            'description' => $request->event_description,
            'tags' => $request->tags,
            'place' => $request->event_place.','.$request->adresse,
            'date_begin' => $request->begin_date.' '.$request->begin_time,
            'date_end' => $request->end_date.' '.$request->end_time, 
        ]);

        // create tickets of event
        $ticketsData = [];
        foreach ($request['ticket_names'] as $key => $ticketName) {
            $ticketsData[] = [
                'category' => $ticketName,
                'event_id' => $event->id,
                'name' => $ticketName,
                'price' => $request['ticket_prices'][$key],
                'description' => $request['ticket_description'][$key],
                'totalNumber' => $request['ticket_numbers'][$key],
            ];
        }
        Ticket::insert($ticketsData);

        // return view('users.events.event_preview', compact('event', 'ticketsData'));

        return redirect()->route('event.show', ['id' => $event->id])->with('success', 'L\'événement a été créé avec succès !');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::where('user_id', auth()->id())->findOrFail($id);
        // dd($event)
        $ticketsData = Ticket::where('event_id',$id)->get();

        // Return view to preview event
        return view('users.events.event_preview', compact('event', 'ticketsData'));
    }

    // Show event to display for Dashboard
    public function showForDash()
    {
        $currentEvents = Event::where('user_id', auth()->id())
            ->where('date_end', '>=', now()) 
            ->get();
            // dd($currentEvents);
        $passEvents = Event::where('user_id', auth()->id())
            ->where('date_end', '<', now())
            ->get();
    
        return view('users.dashboard', compact('currentEvents', 'passEvents'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $event = Event::where('user_id', auth()->id())->findOrFail($id);
        
        $ticketsData = Ticket::where('event_id',$id)->get();

        // Return view to preview event
        return view('users.events.edit-event', compact('event', 'ticketsData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'event_name' => ['required', 'string', 'max:255'],
            'event_description' => ['required', 'string'],
            'event_type' => ['required', 'numeric'],
            'tags' => ['required', 'string', 'max:255'],
            'event_place' => ['required', 'string', 'max:255'],
            'agency' => ['required', 'string', 'max:255'],
            'begin_date' => ['required', 'string', 'max:255'],
            'end_date' => ['required', 'string', 'after_or_equal:begin_date'],
            'ticket_names.*' => ['required', 'string', 'max:255'],
            'ticket_prices.*' => ['required', 'numeric', 'min:0'],
            'ticket_description.*' => ['required', 'string', 'max:255'],
            'ticket_numbers.*' => ['required', 'numeric', 'min:1'],
        ]);

        // Fetch the existing event
        $event = Event::where('user_id', auth()->id())->findOrFail($request->id);

        // Update the event data
        $event->update([

            'user_id' => auth()->id(),
            'name' => $request->event_name,
            'agency' => $request->agency,
            'category_id' => $request->event_type,
            'description' => $request->event_description,
            'tags' => $request->tags,
            'place' => $request->event_place,
            'date_begin' => $request->begin_date,
            'date_end' => $request->end_date, 
        ]);

        // Update or delete existing tickets
        $existingTicketIds = $event->tickets->pluck('id')->toArray();
        $newTicketIds = [];
        $ticketsData = [];

        // dd($request['ticket_names']);

        foreach ($request['ticket_names'] as $key => $ticketName) {
            $ticketsData = [
                'category' => $ticketName,
                'event_id' => $event->id,
                'name' => $ticketName,
                'price' => $request['ticket_prices'][$key],
                'description' => $request['ticket_description'][$key],
                'totalNumber' => $request['ticket_numbers'][$key],
            ];

            if (isset($request['ticket_ids'][$key])) {
                // Update existing ticket
                Ticket::findOrFail($request['ticket_ids'][$key])->update($ticketsData);
                $newTicketIds[] = $request['ticket_ids'][$key];
            } else {
                // Create new ticket
                $newTicketIds[] = Ticket::create($ticketsData)->id;
            }
        }

        // Delete tickets that are not present in the updated data
        $ticketsToDelete = array_diff($existingTicketIds, $newTicketIds);
        Ticket::destroy($ticketsToDelete);

        return redirect()->route('event.show', ['id' => $event->id])->with('success', 'L\'événement a été mis à jour avec succès !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        // Find the event by ID
        $event = Event::where('user_id', auth()->id())->findOrFail($id);

        // Delete the event
        $event->delete();

        // You may also want to delete associated tickets, assuming you have a relationship defined in your Event model
        // $event->tickets()->delete();

        return redirect()->back()->with('success', 'L\'événement a été supprimé avec succès !');

    }
}
