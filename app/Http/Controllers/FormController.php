<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'country' => 'required|string',
            'details' => 'required|string',
        ]);

        FormSubmission::create($validated);

        return redirect()->route('form.thankyou');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
