<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Helpers\PhoneHelper;

class ContactController extends Controller
{
    public function submit(Request $request) {
        $formatted = PhoneHelper::format($request->phone_number);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $formatted,
            'content' => $request->content,
        ]);

        return back()->with('success', 'success!');
    }
}
