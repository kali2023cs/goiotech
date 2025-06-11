<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request)
    {
        $data = $request->validated();

        Mail::to('goiotech.in@gmail.com')->send(new ContactFormSubmission($data));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
