<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store()
    {
        $event = [
            'title' => 'Evento Atribuição em Massa ' . rand(1, 100),
            'description' => 'Descrição atualizada...',
            'body' => 'Conteúdo do evento atualizado com atualização em massa',
            'slug' => 'evento-atribuicao-em-massa',
            'start_event' => date('Y-m-d H:i:s'),
        ];

        return Event::create($event);
    }

    public function update($event)
    {
        $eventData = [
            'title' => 'Evento Atribuição em Massa '. rand(1, 1000),
        ];

        $event = Event::find($event);

        $event->update($eventData);

        return $event;
    }

    public function destroy($event)
    {
       $event = Event::findOrFail($event);

       return $event->delete();

    }
}
