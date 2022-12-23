<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
use Illuminate\Support\Str;
use Validator;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;
class GiftsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // dd('here');
        $users = Gift::where('status',Gift::REMAIN)->has('coupon')->latest()->paginate(10);
        return view('admin.Gift.Gift',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $count =0;
        foreach ($request->card_number as $item) {
            // return $item;
            $giftCardPrice = new Gift();
            $giftCardPrice->coupon_id =  $request->gift_card[$count];
            $giftCardPrice->card_number =  $request->card_number[$count];
            $giftCardPrice->serial_number =  $request->serial_number[$count];
            $giftCardPrice->save();
            $count++;
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Gift::find($id);
        return view('admin.Gift.Gift_master',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //   dd('here');
        // dd($request->all());
         $id = $request->Gift_hidden;
        $gifts = Gift::find($id);
        $gifts->name = $request->name;
        $gifts->UniqueCode = $request->UniqueCode;
        // return $gifts;
           if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid() . "." . $extension;
            $file->move(public_path('uploads/gifts/'), $filename);
            $gifts->image = $filename;

            }
        $gifts->price = $request->price;
        $gifts->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
    }


    public function GiftDelete(Request $request, $id)
    {
        // $id = $request->hidden;
        $gifts = Gift::find($id);
        $gifts->delete();
        return redirect()->back();
    }

    public function search_Gift(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

       // Search in the title and body columns from the posts table
        $users = Gift::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")
        ->paginate(4);
       // Return the search view with the resluts compacted
        return view('admin.Gift.Gift',get_defined_vars());

    }

    public function send_email(){

        $details = [
            'title' => 'Mail from Online Web Tutor',
            'body' => 'Test mail sent by Laravel 8 using SMTP.'
        ];

        Mail::to('imhalikhan@gmail.com')->send(new MyTestMail($details));
        dd("Email is Sent, please check your inbox.");

      }

    public function addGift()
    {
        return view('admin.Gift.add_gift');
    }



}  // End of GiftsManagementController
