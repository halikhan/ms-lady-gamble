<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mail\GiftPurchaseMail;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
use App\Models\Contact;
use App\Models\Coupon;
use App\Models\Faq;
use App\Models\Gift;
use App\Models\order;
use App\Models\Payment;
use App\Models\user_coupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    public function index()
    {
        // dd('here');
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $banners = Banner::where('page', '!=', 'About Us')->get();
        return view('web.home.index', compact('banners', 'condtion'));
    }

    public function about_us()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $about = Banner::where('page', 'About Us')->first();
        return view('web.about.about_us', compact('about', 'condtion'));
    }

    public function articles()
    {
        $articles = Article::all();
        return view('web.article.articles', compact('articles'));
    }

    public function faq()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $faqs = Faq::all();
        return view('web.faq.faq', compact('faqs', 'condtion'));
    }

    public function policy()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $policy = Banner::where('page', 'Policy')->first();
        return view('web.policy.policy', compact('policy', 'condtion'));
    }
    public function condition()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        return view('web.conditions.condtions', compact('condtion'));
    }

    public function long_snappers()
    {
        $long_snappers = User::where('isLongSnapper', 1)->orderBy('rating', 'DESC')->get();
        return view('web.long_snapper.long_snappers', compact('long_snappers'));
    }

    public function packages()
    {
        // dd('yes');
        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.package.packages', compact('packages'));
    }

    public function contact_us()
    {
        return view('web.contact.contact_us');
    }

    public function web_register()
    {
        if (auth()->user()) {
            if (auth()->user()->type == 'Admin' || auth()->user()->type == 'User') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        }
        $condtion = Banner::where('page', 'Term & condtion')->first();

        $packages = Package::where('title', '!=', 'Trial')->get();
        return view('web.auth.register', compact('packages', 'condtion'));
    }


    public function web_login(Request $request)
    {
        //   dd($request->all());

        $condtion = Banner::where('page', 'Term & condtion')->first();
        //        if (auth()->user()) {
        //            if (auth()->user()->type == 'Admin') {
        //                return redirect()->back();
        //                // return redirect()->route('dashboard');
        //            }
        //            elseif (auth()->user()->type == 'User') {
        //                return redirect()->route('user-dashboard');
        //            }
        //             else {
        //                // dd('here');
        //                return redirect()->route('home');
        //                // $notification = array('message' =>'Your have Successfully logged in' , 'alert-type'=>'success' );
        //                // return redirect()->route('home')->with($notification);
        //            }
        //        }
        return view('web.auth.login', compact('condtion'));
    }


    public function authenticate(Request $request)
    {
        if ($request->email == null or $request->password == null) {
            // dd('here');
            $request->session()->flash('emailnotfound', 'not Found');
            return back()->with('failed', 'Failed! User not created');
        }
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], false, false)) {

            if (Auth::user()->type == 'Admin') {
                // session()->put("Userloggedin",true);
                $request->session()->flash('emailnotfound', 'not Found');
                return redirect()->route('home')->with('failed', 'Failed! User not created');
            } elseif (Auth::user()->type == 'User') {
                $notification = array(
                    'message' => 'You have login successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->route('user-dashboard')->with($notification);
                // return redirect()->route('user-dashboard');
            }
        } else {
            $request->session()->flash('emailnotfound', 'not Found');
            return redirect()->route('home')->with('failed', 'Failed! User not created');
        }
    }

    public function admin_authenticate(Request $request)
    {
        // dd($request->all());
        if ($request->email == null or $request->password == null) {
            // dd('here');
            $request->session()->flash('emailnotfound', 'not Found');
            return back()->with('failed', 'Failed! User not created');
        }
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            // 'type' => ['Admin'],
        ]);
        $checkUSer = User::where('email', $request->email)->where('type', 'User')->first();
        if ($checkUSer) {

            $request->session()->flash('emailnotfound', 'not Found');
            return redirect()->route('home')->with('failed', 'Failed! User not created');
        }

        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], false, false)) {
            if (Auth::user()->type == 'Admin') {
                session()->put("Userloggedin", true);
                return redirect()->route('dashboard');
            } else {
                $request->session()->flash('emailnotfound', 'not Found');
                return redirect()->route('home')->with('failed', 'Failed! User not created');
            }
        } else {
            // dd('you have not logged in');
            session()->put("Usernotfound", true);
            return redirect()->back();
            // invalid credentials, act accordingly
        }
    }
    public function my_profile()
    {
        // PAYPAL STUFF
        // $result = get_paypal_access_token();
        // create_paypal_billing_plan($result['access_token']);
        // list_paypal_billing_plans($result['access_token']);
        // activate_paypal_billing_plan($result['access_token']);
        // create_paypal_billing_agreement($result['access_token']);
        // show_paypal_agreement_details($result['access_token']);
        // execute_paypal_agreement($result['access_token']);
        if (!(auth()->user())) {
            return redirect()->back();
        }

        $user = User::find(auth()->user()->id);
        // dd($user);
        return view('web.profile.my_profile', compact('user'));
    }

    public function profile(Request $request)
    {
        // dd($request->all());
        if (!($user = User::where('id', $request->id)->where('type', '!=', 'Admin')->where('type', '!=', 'User')->first())) {
            return redirect()->back();
        }
        // dd($user);
        return view('web.profile.profile', compact('user'));
    }

    public function search_players(Request $request)
    {
        $query = $request->all();

        $users = User::where('created_at', '!=', NULL)->where('type', '!=', 'Admin')->where('type', '!=', 'User');

        if (isset($query['isKicker'])) {
            $users->where('isKicker', 1);
        }

        if (isset($query['isPunter'])) {
            $users->where('isPunter', 1);
        }

        if (isset($query['isLongSnapper'])) {
            $users->where('isLongSnapper', 1);
        }

        if (isset($query['grad_year'])) {
            $users->where('grad_year', $query['grad_year']);
        }

        if (isset($query['state'])) {
            $users->where('state', $query['state']);
        }

        if (isset($query['height'])) {
            $users->where('height', $query['height']);
        }

        if (isset($query['weight'])) {
            $users->where('weight', $query['weight']);
        }

        if (isset($query['gpa'])) {
            $users->where('gpa', $query['gpa']);
        }

        if (isset($query['act'])) {
            $users->where('act', $query['act']);
        }

        if (isset($query['sat'])) {
            $users->where('sat', $query['sat']);
        }

        if (isset($query['ncaa_id'])) {
            $users->where('ncaa_id', $query['ncaa_id']);
        }

        if (isset($query['other_sports'])) {
            $users->where('other_sports', $query['other_sports']);
        }

        $players = $users->get();

        return view('web.player.players', compact('players'));
    }
    public function paypal_payment(Request $request, $id)
    {

        // $user = ($this->userService->find($id));
        dd($id);
        // 'package_id'=> $request->package_id,
        // $user= User::where()
        // dd($user);
        // dd(Session());
        // return view('web.auth.login');
    }

    public function contact_data(Request $request)
    {
        Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'contact_no' => $request['contact_no'],
            'message' => $request['message'],
        ]);

        return redirect()->back()->with('message', 'Your Enquiry Send Successfully To Admin');

        // return redirect()->route('login')->withm(['email' => ['message' => 'Your account is inactive.']]);
        // return redirect()->back();
        // return redirect()->back()->
        //    'message'=>'success',
        // dd($user);
        // code...
        // return view('web.contact.contact_us');
    }
    public function test(Request $request)
    {
        $input = $request->input();
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        $refId = 'ref' . time();
        $cardNumber = preg_replace('/\s+/', '', $input['cardNumber']);

        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber("4111111111111111");
        $creditCard->setExpirationDate("2038-12");
        $creditCard->setCardCode("123");

        // Add the payment data to a paymentType object
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($input['amount']);
        $transactionRequestType->setPayment($paymentOne);

        // Assemble the complete transaction request
        $requests = new AnetAPI\CreateTransactionRequest();
        $requests->setMerchantAuthentication($merchantAuthentication);
        $requests->setRefId($refId);
        $requests->setTransactionRequest($transactionRequestType);

        // Create the controller and get the response
        $controller = new AnetController\CreateTransactionController($requests);
        // dd($controller);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        dd($response->getMessages());
    }
    public function cart()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $packages = Package::all();
        // dd($packages);
        return view('web.cart.cart', compact('packages', 'condtion'));
    }
    public function checkOut(Request $request)
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        //         return($request->all());
        //         dd(count($request->data['price']));
        $order = new order();
        $order->user_id = Auth::id();
        $order->save();
        //        dd(count($request->data['price']));
        for ($i = 0; $i < count($request->data['price']); $i++) {
            if ($request->data['qty'][$i] == null)
                continue;
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->price = $request->data['price'][$i];
            $cart->qty = $request->data['qty'][$i];
            $cart->order_id = $order->id;
            $amount = $request->data['qty'][$i] * $request->data['price'][$i];
            $cart->ammount = $amount;
            $cart->total_amount = $request->hidden_amount;
            $cart->save();
        }
        $sessiomAmount = $order::find($order->id)->carts[0]->total_amount;
        Session::put('sessiomAmount', $sessiomAmount);
        Session::put('order_id', $order->id);

        $amount = 0;
        $user = User::find(Auth::id());
        $order = order::where('user_id', Auth::id())->get();
        $sum = order::where('user_id', Auth::id())->has('carts')->get();
        foreach ($sum as $item) {
            $amount += $item->carts[0]->total_amount;
        }
        //1 cash app
        $url = 'https://cash.app/$KingofPalmsGaming/';
        $QrCode = QrCode::generate($url . $sessiomAmount);
        $QrCodeSvg = substr($QrCode, 39);
        $QrCodeHTML = '<img src="data:image/svg+xml;base64,' . base64_encode($QrCodeSvg) . '"width="100" height="100"/>';
        //    end

        //2 cash app
        $url = 'https://cash.app/$KingofPalmsGaming2/';
        $QrCode = QrCode::generate($url . $sessiomAmount);
        $QrCodeSvg = substr($QrCode, 39);
        $QrCodeHTML2 = '<img src="data:image/svg+xml;base64,' . base64_encode($QrCodeSvg) . '"width="100" height="100"/>';
        //    end

        //3 cash app
        $url = 'https://cash.app/$KingofPalmsGaming3/';
        $QrCode = QrCode::generate($url . $sessiomAmount);
        $QrCodeSvg = substr($QrCode, 39);
        $QrCodeHTML3 = '<img src="data:image/svg+xml;base64,' . base64_encode($QrCodeSvg) . '"width="100" height="100"/>';
        //    end

        //4 cash app
        $url = 'https://cash.app/$KingofPalmsGaming4/';
        $QrCode = QrCode::generate($url . $sessiomAmount);
        $QrCodeSvg = substr($QrCode, 39);
        $QrCodeHTML4 = '<img src="data:image/svg+xml;base64,' . base64_encode($QrCodeSvg) . '"width="100" height="100"/>';
        //    end

        //5 cash app
        $url = 'https://cash.app/$kopfive/';
        $QrCode = QrCode::generate($url . $sessiomAmount);
        $QrCodeSvg = substr($QrCode, 39);
        $QrCodeHTML5 = '<img src="data:image/svg+xml;base64,' . base64_encode($QrCodeSvg) . '"width="100" height="100"/>';
        //    end
        return view('web.checkout.chechout', get_defined_vars());
    }
    public function payment(Request $request)
    {
        $amount = $request->session()->get('sessiomAmount');
        $order_id = $request->session()->get('order_id');
        $input = $request->input();
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName(env('MERCHANT_LOGIN_ID'));
        $merchantAuthentication->setTransactionKey(env('MERCHANT_TRANSACTION_KEY'));

        $refId = 'ref' . time();
        $cardNumber = preg_replace('/\s+/', '', $input['card_no']);

        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber($input['card_no']);
        $creditCard->setExpirationDate($input['exp_year'] . '-' . $input['exp_month']);
        $creditCard->setCardCode($input['cvv']);

        // Add the payment data to a paymentType object
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount($amount);
        $transactionRequestType->setPayment($paymentOne);

        // Assemble the complete transaction request
        $requests = new AnetAPI\CreateTransactionRequest();
        $requests->setMerchantAuthentication($merchantAuthentication);
        $requests->setRefId($refId);
        $requests->setTransactionRequest($transactionRequestType);

        // Create the controller and get the response
        $controller = new AnetController\CreateTransactionController($requests);
        // dd($controller);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        if ($response->getMessages()->getResultCode() == "Ok") {
            $tresponse = $response->getTransactionResponse();
            Payment::create([
                'amount' => $amount,
                'response_code' => $tresponse->getResponseCode(),
                'transaction_id' => $tresponse->getTransId(),
                'auth_id' => $tresponse->getAuthCode(),
                'message_code' => $tresponse->getMessages()[0]->getCode(),
                'user_id' => Auth::id(),
                'order_id' => $order_id,
            ]);
            $details = [
                'order' => Order::find($order_id),
            ];
            Mail::to(Auth::user()->email)->send(new OrderMail($details));
            Mail::to('infokingofplams@gmail.com')->send(new OrderMail($details));
            $request->session()->flash('payment-successful', 'payment-successful');
            return redirect()->route('user-dashboard');
        } else {
            return $response->getMessages();
        }
    }
    public function ada_compliance()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $adaCompliance = Banner::where('page', 'ADA Compliance Statement')->first();
        // dd($adaCompliance);
        return view('web.ada compliance.ada_compliance', compact('adaCompliance', 'condtion'));
    }
    public function email()
    {
        // dd('here');
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
        Mail::to('infokingofplams@gmail.com')->send(new OrderMail($details));
        dd("mail sent");
    }
    public function shop()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $gifts = Coupon::has('gift')->latest()->get();
        // dd($gifts);
        $gift_10 = [];
        $gift_25 = [];
        $gift_100 = [];
        foreach ($gifts as $key => $value) {
            if ($value->price == 10) {
                array_push($gift_10, $value);
            }
            if ($value->price == 25) {
                array_push($gift_25, $value);
            }
            if ($value->price == 100) {
                array_push($gift_100, $value);
            }
        }
        // return([$gift_10,$gift_25,$gift_100]);
        return view('web.shop.shop', get_defined_vars(), compact('condtion'));
    }
    public function userGiftPurchase(Request $request)
    {
        //   $email = Auth::user()->email;
        //   dd($email);
        // return $request->all();
        $gift_id = [];
        $user = User::find(Auth::id());
        if ($request->total_ammount > $user->user_balance) {
            Session::flash('amount-error');
            return redirect()->back();
        }

        // dd($request->total_ammount);
        if (isset($request->gift_10_qty[0])) {
            $checkqty = intval($request->gift_10_qty[0]);
            $remainQty = count(Coupon::find($request->gift_10_check[0])->remainGifts);
            if ($checkqty > $remainQty) {
                Session::flash('qty-error');
                return redirect()->back();
            }
        }
        if (isset($request->gift_25_qty[0])) {
            $checkqty = intval($request->gift_25_qty[0]);
            $remainQty = count(Coupon::find($request->gift_25_check[0])->remainGifts);
            if ($checkqty > $remainQty) {
                Session::flash('qty-error');
                return redirect()->back();
            }
        }
        if (isset($request->gift_100_qty[0])) {
            //            dd(($request->gift_100_check[0]));
            $checkqty = intval($request->gift_100_qty[0]);
            $remainQty = count(Coupon::find($request->gift_100_check[0])->remainGifts);
            if ($checkqty > $remainQty) {
                Session::flash('qty-error');
                return redirect()->back();
            }
        }

        $user_balance = $user->user_balance - $request->total_ammount;
        $user->user_balance = $user_balance;
        $user->save();
        if (isset($request->gift_10_check)) {
            $qty = intval($request->gift_10_qty[0]);
            foreach ($request->gift_10_check as $key => $value) {
                $userGiftPurchase = new user_coupon();
                $userGiftPurchase->user_id = Auth::id();
                $userGiftPurchase->coupon_id = $value;
                $userGiftPurchase->save();
            }
            for ($i = 0; $i < $qty; $i++) {
                // return $request->gift_10_check;
                $giftUpdate = Gift::where('status', Gift::REMAIN)
                    ->where('coupon_id', $request->gift_10_check[0])
                    ->latest()
                    ->first();
                $giftUpdate->status = Gift::SOLD;
                $giftUpdate->user_id = Auth::id();
                $giftUpdate->save();
                array_push($gift_id, $giftUpdate->id);
            }
        }
        if (isset($request->gift_25_check)) {
            $qty = intval($request->gift_25_qty[0]);
            foreach ($request->gift_25_check as $key => $value) {
                $userGiftPurchase = new user_coupon();
                $userGiftPurchase->user_id = Auth::id();
                $userGiftPurchase->coupon_id = $value;
                $userGiftPurchase->save();
            }
            for ($i = 0; $i < $qty; $i++) {
                // dd($request->gift_25_check[$i]);
                $giftUpdate = Gift::where('status', Gift::REMAIN)
                    ->where('coupon_id', $request->gift_25_check[$i])
                    ->latest()
                    ->first();
                $giftUpdate->status = Gift::SOLD;
                $giftUpdate->user_id = Auth::id();
                $giftUpdate->save();
                array_push($gift_id, $giftUpdate->id);
            }
        }
        if (isset($request->gift_100_check)) {
            $qty = intval($request->gift_100_qty[0]);
            foreach ($request->gift_100_check as $key => $value) {
                $userGiftPurchase = new user_coupon();
                $userGiftPurchase->user_id = Auth::id();
                $userGiftPurchase->coupon_id = $value;
                $userGiftPurchase->save();
                for ($i = 0; $i < $qty; $i++) {
                    $giftUpdate = Gift::where('status', Gift::REMAIN)
                        ->where('coupon_id', $request->gift_100_check[$i])
                        ->latest()
                        ->first();
                    $giftUpdate->status = Gift::SOLD;
                    $giftUpdate->user_id = Auth::id();
                    $giftUpdate->save();
                    array_push($gift_id, $giftUpdate->id);
                }
            }
        }
        $gift_id;
        $user_purcahse_gift = Gift::whereIn('id', $gift_id)->get();
        $details = [
            'gifts' => $user_purcahse_gift,
        ];
        Session::put('total-amount', $request->total_ammount);
        Mail::to(Auth::user()->email)->send(new GiftPurchaseMail($details));
        Mail::to('infokingofplams@gmail.com')->send(new GiftPurchaseMail($details));
        // dd(Session::get('total-amount'));
        Session::flash('gift-purchase');
        return redirect()->back();
    }


    public function how_to_play()
    {
        $condtion = Banner::where('page', 'Term & condtion')->first();
        $banners = Banner::where('page', '!=', 'About Us')->get();
        return view('web.howtoplay.how_to_play', compact('banners', 'condtion'));
    }
}
