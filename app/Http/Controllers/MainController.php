<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  
    public function contact(Request $request){
        
        $contact = new contact();
        $contact -> name = $request ->input('name');
        $contact -> email = $request ->input('email');
        $contact -> subject = $request ->input('phone');
        $contact -> message = $request ->input('message');
        $contact ->submit();

        return redirect()->back()->with('success', 'Submitted successfully!');
    }
}
