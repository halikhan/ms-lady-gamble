<?php

namespace App\Http\Controllers\Web;

use App\Models\Gift;
use App\Models\User;
use App\Models\order;
use App\Models\Banner;
use App\Models\Redeem;
use App\Models\Payment;
use App\Models\BasicInfo;
use App\Models\user_coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{
    public function boot()
    {
        Paginator::useBootstrap();
    }
    public function userDashboard()
    {

        $condtion = Banner::where('page', 'Term & condtion')->first();
        $userPurchase = Gift::where('user_id', Auth::id())->where('status', Gift::SOLD)->has('coupon')->get();
        // $withdraw_request = Redeem::where('user_id', Auth()->user()->id)->orderBy('id', 'DESC')->latest()->paginate(6);
        $withdraw_request = Redeem::where('user_id', Auth()->user()->id)->orderBy('id', 'DESC')->latest()->get();
        $userfreecredit = User::where('id', Auth()->id())->first();
        $userfreecreditamount = $userfreecredit->user_balance;
        // dd($userfreecreditamount);
        $totalcoins = 0;
        foreach ($withdraw_request as $item) {
            $totalcoins += $item->bit_coin_wallet;
        }
        $wallattotalamont = $totalcoins + $userfreecreditamount;
        // dd($userfreecreditamount);
        // return $totalcoins;

        $amount = 0;
        $myInfo = BasicInfo::where('user_id', Auth::id())->first();
        $wallets = Payment::where('user_id', Auth::id())->get();
        // dd($wallets);
        $order = order::where('user_id', Auth::id())->get();
        $sum = order::where('user_id', Auth::id())->has('carts')->get();
        // dd($sum[0]->carts);
        foreach ($sum as $item) {
            $amount += $item->carts[0]->total_amount;
        }
        // dd($amount);
        return view('dashboard.index', get_defined_vars(), compact('condtion'));
    }

    public function myInfo(Request $request)
    {
        //    return $request->all();
        $this->validate($request, [
            'first_name' => "required|max:255",
            'last_name' => "required|max:255",
            'address' => "required|max:255",
            'zip_code' => "required|max:255",
            'city' => "required|max:255",
            'country' => "required|max:255",
            'contact_no' => "required|",
            'bank_name' => "required|max:255",
            'account_title' => "required|max:255",
            'iban' => "required|max:255",
            'bitcoin_wallet_address' => "required|max:255",

        ]);

        // $userInfo = User::where('id',Auth::id())->first();
        $myInfo = BasicInfo::where('user_id', Auth::id())->first();
        if ($myInfo) {
            $myInfo->user_id = Auth::id();
            $user = User::find(Auth::id());
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->Username = $request->Username;
            // $user->email = $request->email;
            $user->state = $request->state;
            $user->D_O_Birth = $request->D_O_Birth;
            $user->save();
            $myInfo->address = $request->address;
            $myInfo->zip_code = $request->zip_code;
            $myInfo->city = $request->city;
            $myInfo->country = $request->country;
            $myInfo->contact_no = $request->contact_no;
            $myInfo->bank_name = $request->bank_name;
            $myInfo->account_title = $request->account_title;
            $myInfo->iban = $request->iban;
            $myInfo->bitcoin_wallet_address = $request->bitcoin_wallet_address;
            $myInfo->save();
            $request->session()->flash('sucess-data', 'message');
            return redirect()->back();
        } else {
            $myInfo = new BasicInfo();
            $myInfo->user_id = Auth::id();
            $myInfo->address = $request->address;
            $myInfo->zip_code = $request->zip_code;
            $myInfo->city = $request->city;
            $myInfo->country = $request->country;
            $myInfo->contact_no = $request->contact_no;
            $myInfo->bank_name = $request->bank_name;
            $myInfo->account_title = $request->account_title;
            $myInfo->iban = $request->iban;
            $myInfo->bitcoin_wallet_address = $request->bitcoin_wallet_address;
            $myInfo->save();
            $request->session()->flash('sucess-data', 'message');
            return redirect()->back();
        }
    }

    public function soldCoupon()
    {
        $sold_Coupons = Gift::where('status', Gift::SOLD)->latest()->get();
        return view('admin.sold coupon.sold_coupon', get_defined_vars());
    }

    public function updatepassword(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'password' => 'min:6|required_with:confrim_password|same:confrim_password',

        ]);
        $id = $request->hidden;
        $user = User::find($id);
        // dd('here');
        $user->update([
            'password' => $request->password,
        ]);
        $request->session()->flash('update-password', 'message');
        return redirect()->back();

    }
}
