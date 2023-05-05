<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.contact');
    }
}
