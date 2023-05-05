<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;

    public $email;

    public $msg = '';

    protected $rules = [
        'name' => 'bail|required',
        'email' => 'bail|required|email',
        'msg' => 'bail|required',
    ];

    public function submit()
    {
        $this->validate();

        Mail::to('riveterwan8@gmail.com')->send(new ContactMail($this->name, $this->email, $this->msg));

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->msg,
        ]);
        // On flash un message d'alert
        session()->flash('message', 'Message envoyé ! Merci.');

        // On réinitialise les champs
        return redirect()->route('contact');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
