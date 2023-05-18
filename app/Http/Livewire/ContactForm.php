<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name;

    public string $email;

    public string $msg = '';

    protected $rules = [
        'name' => 'bail|required',
        'email' => 'bail|required|email',
        'msg' => 'bail|required',
    ];

    public function submit(): RedirectResponse
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

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
