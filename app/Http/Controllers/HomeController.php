<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    private $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $events = $this->event->orderBy('start_event', 'DESC')->paginate(15);

        return view('home', compact('events'));
    }

    public function show($slug)
    {
        $event = $this->event->whereSlug($slug)->first();

        return view('event', compact('event'));
    }
}
