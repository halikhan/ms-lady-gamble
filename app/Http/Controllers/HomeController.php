<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //  $email = 'fredaston49@gmail.com';
        //   Mail::send('testemail',['data' => route('home',['token'=> 'abc'])],function($messages)use($email) {
        //         $messages->to($email);
        //         $messages->subject('ResetPasswordEmail');
        //     });
        // dd('here');
        return view('home');
    }
}
