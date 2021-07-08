<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function addNewsletter( request $request)
    {
        $n_newsletter = new Newsletter;

        $n_newsletter->email = $request->email;

        $n_newsletter->save();

        return redirect('/')->with('msg','E-mail successfully registered!');
    }
}
