<?php

namespace App\Http\Controllers;

use App\Mail\LetterMail;
use App\Models\newsletter;
use Illuminate\Http\Request;
use App\Mail\LetterAdminMail;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;



class NewsletterController extends Controller
{

    public function index()
    {
        $newsletterData = newsletter::latest()->get();
        return view('admin.newsletter.index',get_defined_vars());

    }

    public function store(Request $request)
    {
        // session()->put('email' , $request->email);
        $this->validate($request, [
            'email' => "required|email|unique:newsletters",
        ]);
        $cms = new newsletter();
        $cms->email = $request->email;
        $cms->save();
        $FreeCreditCode = Setting::find(17);
        // $code = $FreeCreditCode->value;
        // dd($code);
        $details = newsletter::where('id', $cms->id)->first();
        // dd($details);
        Mail::to($details->email)->send(new LetterMail($details,$FreeCreditCode));
        Mail::to('iamjamesalbertt@gmail.com')->send(new LetterAdminMail($details));
        // Mail::to('production@designprosusa.com')->send(new LetterAdminMail($details));
        $notification = array(
            'message' => '',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

        // return redirect()->back()->with('message', '');

    }

    public function destroy($id)
    {
        $subscribe = newsletter::find($id);
        $subscribe->delete();
        return redirect()->back();
    }

}
