<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Mail\BookingFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class BookingFormController extends Controller
{
    public function PostMessage(Request $request)
    {

        Mail::to('teefwesh0@gmail.com')->send(new BookingFormMail($request));


        return redirect()->route('book');
    }
}
