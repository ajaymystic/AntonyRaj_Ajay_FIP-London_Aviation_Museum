<?php

namespace App\Http\Controllers;

use App\Models\BorPilot;

class BorController extends Controller
{
    // This is to select the fields the frontend needs to keep the payload small
    public function index()
    {
        $pilots = BorPilot::select('id', 'last_name', 'initials', 'full_name', 'in_book', 'photo_path')
            ->orderBy('last_name')
            ->get();

        return response()->json($pilots);
    }

    // I return the full record here since the profile page needs all fields
    public function show(BorPilot $borPilot)
    {
        return response()->json($borPilot);
    }
}