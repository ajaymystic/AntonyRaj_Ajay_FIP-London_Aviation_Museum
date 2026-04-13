<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;

class MessageController extends Controller
{
    // This is to return all messages ordered by submission date descending so the most recent messages are at the top 
    public function index()
    {
        $messages = ContactSubmission::orderByDesc('submitted_at')->get();
        return response()->json($messages);
    }
}