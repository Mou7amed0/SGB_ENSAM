<?php

namespace App\Http\Controllers;

use App\Mail\NotifMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendMail(){
        $receiver = "mohamedoutlouh@gmail.com";
        
        $title = "Testing emailing";
        $body = "If you receive this, it means that it worked as you wished.";

        $details = [
            'title' => $title,
            'body' => $body
        ];
        Mail::to($receiver)->send(new NotifMail($details));
        return redirect()->to('/');
    }

    public function writeMail(){

    }
}
