<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function _invoke(contactRequest $request)
    {
        Mail::to('arjumanjesmin221186@gmail.com')->send(new contactMail($request->name, $request->email, $request->body));

        return redirect()->back();
    }
    
}
