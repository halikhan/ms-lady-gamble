<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RedeemMail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function email(){
        // $details = array();
        //  $email = "fredaston49@gmail.com";
        //  dd($email);
        //   Mail::send('fredaston49@gmail.com')->send(new RedeemMail($details));
    //   Mail::send('welcome', ['data' => route('home', ['token' => 'abc'])], function ($messages) use ($email) {
    //             $messages->to($email);
    //             $messages->subject('shukar hai Allah ka');
    //         });
     $data = array('name'=>"Virat Gandhi");
        Mail::send(['text'=>'welcome'], $data, function($message) {
         $message->to('fredaston49@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('fredaston49@gmail.com','Virat Gandhi');
      });
            return 'done';
    }
}