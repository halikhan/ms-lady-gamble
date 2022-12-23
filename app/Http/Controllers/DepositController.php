<?php

namespace App\Http\Controllers;


use App\Models\Deposit;
use App\Mail\depositMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('Deposit');
         $withdraw = Deposit::with('user.basicInfo')->orderBy('id', 'DESC')->get();
        // return $withdraw;
        return view('admin.deposit.deposit', compact('withdraw'));

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
        // dd($request->all());
        Validator::make($request->all(), [
            'pin_code_box' => 'required',
            'deposit_amount_box' => 'required',
            'game_type' => 'required',
        ]);

        $myInfo = new Deposit();
        $myInfo->user_id = Auth::user()->id;
        $myInfo->game_type = $request->game_type;
        $myInfo->deposit_amount_box = $request->deposit_amount_box;
        $myInfo->pin_code_box = $request->pin_code_box;
        $myInfo->save();
        $details = Deposit::where('user_id', $myInfo->user_id)->first();
        Mail::to(Auth::user()->email)->send(new depositMail($details));
        Mail::to('msladygamble@gmail.com')->send(new depositMail($details));
        return back()->with('deposit_request', 'sucssessfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $redeem_status = Deposit::where('id', $id)->first();
        $newStatus = ($redeem_status->status == 0) ? 1 : 0;
        $redeem_status->update([
            'status' => $newStatus,
        ]);
        Deposit::where('id', $id)->first();
        // Mail::to(Auth::user()->email)->send(new RedeemMail($details));
        $notification = array('message' =>'Deposit Status changed successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
