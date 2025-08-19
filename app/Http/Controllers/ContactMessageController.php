<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Models\ContactMessage;
use App\Mail\ContactMessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contactMessage.create');
    }

    public function store(ContactMessageRequest $request)
    {


$contactMessage = ContactMessage::create([
    'name' => $request->name,
    'email' => $request->email,
    'subject' => $request->subject,
    'message' => $request->message,
]);

Mail::to('admin@example.com')->send(new ContactMessageReceived($contactMessage));

        ;
        return redirect('/contact')->with('success', 'Message sent!');
    }
}
