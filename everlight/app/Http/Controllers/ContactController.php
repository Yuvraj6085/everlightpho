<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }
    public function index()
    {
        // Fetch all contact messages
        $contacts = Contact::all();

        // Send data to view
        return view('contacts.index', compact('contacts'));
        // OR: return view('contacts.index')->with('contacts', $contacts);
    }
}

