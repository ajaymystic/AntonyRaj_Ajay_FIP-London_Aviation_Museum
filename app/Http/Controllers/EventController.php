<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // I use the ?all=1 param to let the admin fetch all events regardless of status
    public function index(Request $request)
    {
        if ($request->has('all')) {
            $events = Event::orderByDesc('event_date')->get();
        } else {
            $events = Event::where('status', 'published')
                ->orderBy('event_date')
                ->get();
        }

        return response()->json($events);
    }

    public function show(Event $event)
    {
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $title = trim($request->input('title', ''));
        $desc  = trim($request->input('description', ''));
        $date  = $request->input('event_date', '');

        if (!$title || !$desc || !$date) {
            return response()->json(['error' => 'Title, description, and date are required.'], 422);
        }

        $slug = $this->buildSlug($title);

        // I append a timestamp if the slug already exists to keep it unique
        if (Event::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . time();
        }

        $status = 'draft';
        if (in_array($request->input('status'), ['draft', 'published', 'archived'])) {
            $status = $request->input('status');
        }

        $time = null;
        if ($request->filled('event_time')) {
            $time = $request->input('event_time');
        }

        $event = Event::create([
            'title'              => $title,
            'slug'               => $slug,
            'description'        => $desc,
            'event_date'         => $date,
            'event_time'         => $time,
            'location'           => trim($request->input('location', '')),
            'featured_image_url' => trim($request->input('featured_image_url', '')),
            'category'           => trim($request->input('category', '')),
            'status'             => $status,
        ]);

        return response()->json(['message' => 'Event created.', 'id' => $event->id], 201);
    }

    public function update(Request $request, Event $event)
    {
        $status = 'draft';
        if (in_array($request->input('status'), ['draft', 'published', 'archived'])) {
            $status = $request->input('status');
        }

        $time = null;
        if ($request->filled('event_time')) {
            $time = $request->input('event_time');
        }

        $event->update([
            'title'              => trim($request->input('title', '')),
            'description'        => trim($request->input('description', '')),
            'event_date'         => $request->input('event_date', ''),
            'event_time'         => $time,
            'location'           => trim($request->input('location', '')),
            'featured_image_url' => trim($request->input('featured_image_url', '')),
            'category'           => trim($request->input('category', '')),
            'status'             => $status,
        ]);

        return response()->json(['message' => 'Event updated.']);
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json(['message' => 'Event deleted.']);
    }

    //Build slugs without regex using str_replace and a collapse loop
    private function buildSlug(string $title): string
    {
        $slug = strtolower($title);
        $slug = str_replace(
            [' ', "\t", '_', '/', '\\', '.', ',', '!', '?', '(', ')', '\'', '"', '&', '#', '@', '%', '+', '=', '[', ']', '{', '}', ':', ';'],
            '-',
            $slug
        );
        // Collapse any double dashes that result from multiple replaced characters
        $prev = '';
        while ($prev !== $slug) {
            $prev = $slug;
            $slug = str_replace('--', '-', $slug);
        }
        return trim($slug, '-');
    }
}