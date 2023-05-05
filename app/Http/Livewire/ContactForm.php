<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name, $email, $msg = "";

    protected $rules = [
        'name' => 'bail|required',
        'email' => 'bail|required|email',
        'msg' => 'bail|required'
    ];

    public function submit()
    {
        $this->validate();

        Mail::to("riveterwan8@gmail.com")->send(new ContactMail($this->name, $this->email, $this->msg));

        // On flash un message d'alert
        session()->flash("message", "Message envoyé ! Merci.");

        // On réinitialise les champs
        return redirect()->route('contact');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
