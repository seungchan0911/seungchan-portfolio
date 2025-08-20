<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Contact;

class AdminController extends Controller
{
    public function showAdmin() {
        $contacts = Contact::latest()->get();

        return view('admin.admin', compact('contacts'));
    }

    public function showLogin() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $admin = Admin::first();

        if ($admin->code === $request->code) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin');
        } else {
            return back();
        }
    }
}
