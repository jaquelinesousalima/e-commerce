<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact_message;

class ContactMessageController extends Controller
{
    public function addContactMessage(request $request)
    {
        $n_message = new Contact_message;

        $n_message -> email = $request ->email;
        $n_message -> message = $request -> msg;

        $n_message -> save();

        return redirect('/contact')->with('msg','Message sent successfully');

    }
}
