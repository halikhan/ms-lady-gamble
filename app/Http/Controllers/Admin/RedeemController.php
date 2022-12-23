<?php

namespace App\Http\Controllers\Admin;


use Storage;
use App\Models\User;
use App\Models\Redeem;

use App\Mail\RedeemMail;
use App\Models\BasicInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;



class RedeemController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->all());
        // $request->session()->put('key', $value);
        session()->put('pin_code', $request->pin_code);
        session()->put('bit_coin_wallet', $request->bit_coin_wallet);
        session()->put('amount_request', $request->amount_requested);


        $this->validate($request, [

            'bit_coin_wallet' => 'required',
            'amount_requested' => 'required',
            // 'pin_code_confirm' => 'required_with:pin_code|same:pin_code'
        ]);
        $checkBasicInfo = BasicInfo::where('user_id',auth()->id())->first();
        if($checkBasicInfo){
        $withdraw_request = new Redeem();
        $withdraw_request->pin_code = $request->pin_code;
        $withdraw_request->bit_coin_wallet = $request->bit_coin_wallet;
        $withdraw_request->amount_request = $request->amount_requested;
        $withdraw_request->request_date = now();
        $withdraw_request->user_id = Auth::user()->id;
        $withdraw_request->save();
        $details = Redeem::where('id', $withdraw_request->id)->with('user.basicInfo')->first();
        Mail::to(Auth::user()->email)->send(new RedeemMail($details));
        Mail::to('info@msladygamble.com')->send(new RedeemMail($details));
        // dd('done');
        }
        else{
            return back()->with('address_check', 'Kindly Add First Bitcoin Wallet Address');
        }
        return back()->with('withdraw_request', 'sucssessfully added');
    }


    public function withdraw_list()
    {
        $withdraw = Redeem::with('user.basicInfo')->orderBy('id', 'DESC')->get();
        // return $withdraw;
        return view('admin.redeem.redeem', compact('withdraw'));
    }
    public function redeem_action(Request $request, $id)
    {
        $redeem_status = Redeem::where('id', $id)->first();
        $newStatus = ($redeem_status->status == 0) ? 1 : 0;
        $redeem_status->update([
            'status' => $newStatus,
            'approve_tag' => $request->approve_tag,
            'approve_id' => $request->approve_id
        ]);
        Redeem::where('id', $id)->first();
        // Mail::to(Auth::user()->email)->send(new RedeemMail($details));
        $notification = array('message' =>'Redeem Status changed successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
    }
}
