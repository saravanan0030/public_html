<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);

        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string',
            'email'   => 'nullable|email',
            'country' => 'nullable|string|max:100',
            'details' => 'nullable|string',
        ]);

        Contact::create($data);

        return view('thank-you');
    }
}
