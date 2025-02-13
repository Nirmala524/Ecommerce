<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()

    {

        $mailData = [

            'title' => 'kaliyaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'body' => 'dant kadhvanu band kar'
        ];

        Mail::to('malialkesh4444@gmail.com')->send(new DemoMail($mailData));
        dd("Email is sent successfully.");
    }
}
