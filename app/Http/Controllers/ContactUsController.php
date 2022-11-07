<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){

        return view('contactus.index');
    }

    public function store(){

        $correo = new ContactUsMailable;

        Mail::to('teo.arb03@gmail.com')->send($correo);

        return "Mensaje enviado";
    }
}
