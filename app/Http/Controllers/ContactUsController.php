<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMailable;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){

        return view('contactus.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $correo = new ContactUsMailable($request->all());

        Mail::to('teo.arb03@gmail.com')->send($correo);

        return redirect()->route('contactUs.index')->with('info', 'Message Sent');
    }
}
