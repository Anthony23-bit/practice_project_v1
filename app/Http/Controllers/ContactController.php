<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');
        $reservation->phone = $request->input('phone');
        $reservation->save();
        
        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}
