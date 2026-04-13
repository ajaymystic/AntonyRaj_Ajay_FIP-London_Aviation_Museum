<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $name  = trim(strip_tags($request->input('first_name', '')));
        $raw   = trim($request->input('email', ''));
        // I strip newline characters to prevent email header injection
        $email = str_replace(["\r", "\n", "%0a", "%0d"], '', $raw);

        $errors = [];

        if ($name === '') {
            $errors[] = 'Name is required.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'A valid email is required.';
        }

        if (!empty($errors)) {
            return response()->json(['errors' => $errors], 422);
        }

        // Check before inserting to avoid a duplicate key error on the unique email column
        $existing = NewsletterSubscriber::where('email', $email)->first();

        if ($existing) {
            return response()->json(['message' => 'This email is already subscribed.']);
        }

        NewsletterSubscriber::create(['name' => $name, 'email' => $email]);

        return response()->json(['message' => "You're subscribed! Thanks for joining our newsletter."]);
    }
}