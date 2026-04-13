<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $first   = trim($request->input('first_name', ''));
        $last    = trim($request->input('last_name', ''));
        // this to remove any newline characters or null bytes from the email to block header injection
        $raw     = str_replace(["\r", "\n", "%0a", "%0d"], '', trim($request->input('email', '')));
        $email   = filter_var($raw, FILTER_VALIDATE_EMAIL);
        $message = trim(($request->input('message', '')));

        $errors = [];

        if ($first === '') {
            $errors[] = 'First name is required.';
        }

        if ($last === '') {
            $errors[] = 'Last name is required.';
        }

        if (!$email) {
            $errors[] = 'A valid email is required.';
        }

        if ($message === '') {
            $errors[] = 'Message cannot be empty.';
        }

        if (!empty($errors)) {
            return response()->json(['errors' => $errors], 422);
        }

        //Saves the submission to the database so the admin messages page can display it
        ContactSubmission::create([
            'first_name' => $first,
            'last_name'  => $last,
            'email'      => $email,
            'message'    => $message,
        ]);

        $visitorName = htmlspecialchars($first . ' ' . $last, ENT_QUOTES, 'UTF-8');

        return response()->json(['message' => 'Thank you ' . $visitorName . ', we will get back to you soon!']);
    }
}