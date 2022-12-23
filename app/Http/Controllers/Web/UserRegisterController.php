<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Mail\NewRegUser;
use App\Models\BasicInfo;
use App\Mail\UserRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;
use Illuminate\Foundation\Auth\RegistersUsers;


class UserRegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        // dd($request->all());
        return view('web.auth.register');
    }

    public function resgister(Request $request)
    {

        // dd($request->all());

          $checkEmail = User::where('email','=', $request->email)->first();
        //   dd($checkEmail->email);
          if ($checkEmail) {
            $notification = array(
                'message' => 'Email is already exists!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
          }

        // @if()
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'Username' => 'required',
            'email' => "required|email|unique:users",
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'state' => 'required',
            'country' => 'required',
            'contact_no' => 'required',
            'D_O_Birth' => 'required',
            'checktype' => 'required',
            'password' => 'required|confirmed|min:6',
            // 'password' => 'min:6|required_with:confirm_password|same:confirm_password',
        ]);

        // dd($request->all());
        if ($validator->fails()) {
            $notification = array(
                'message' => 'please eneter same password!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        // dd($request->all());
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->Username = $request->Username;
        $user->email = $request->email;
        $user->state = $request->state;
        $user->D_O_Birth = $request->D_O_Birth;
        $user->checktype = $request->checktype;
        $user->password = $request->password;
        $user->save();
        $myInfo = new BasicInfo();
        $myInfo->user_id = $user->id;
        $myInfo->address = $request->address;
        $myInfo->zip_code = $request->zip_code;
        $myInfo->city = $request->city;
        $myInfo->country = $request->country;
        $myInfo->contact_no = $request->contact_no;
        $myInfo->save();
        // Session::flash('message','You have successfully registered!');
        $details = User::where('id', $myInfo->user_id)->first();
        Mail::to($details->email)->send(new UserRegister($details));
        Mail::to('info@msladygamble.com')->send(new NewRegUser($details));
        // return redirect()->route('web_login');
        $notification = array(
            'message' => 'You have successfully registered!',
            'alert-type' => 'success'
        );
        return redirect()->route('web_login')->with($notification);
    }

    // public function resgister(Request $request)
    // {
    //     dd($request->all());
    //     $validator = Validator::make($request->all(), [
    //         'first_name' => 'required|max:255',
    //         'last_name' => 'required',
    //         'Username' => 'required',
    //         'email' => 'required',
    //         'Address' => 'required',
    //         'city' => 'required',
    //         'zip' => 'required',
    //         'state' => 'required',
    //         'country' => 'required',
    //         'phone_number' => 'required',
    //         'D_O_Birth' => 'required',
    //         'checktype' => 'required',
    //         'profile_img' => 'required',
    //         'password' => 'required|confirmed|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         return Redirect::back()->withErrors($validator);
    //     }

    //     // dd($request->all());
    //     $user = new User();
    //     $user->first_name = $request->first_name;
    //     $user->last_name = $request->last_name;
    //     $user->Username = $request->Username;
    //     $user->email = $request->email;
    //     $user->Address = $request->Address;
    //     $user->city = $request->city;
    //     $user->zip = $request->zip;
    //     $user->state = $request->state;
    //     $user->country = $request->country;
    //     $user->phone_number = $request->phone_number;
    //     $user->D_O_Birth = $request->D_O_Birth;
    //     $user->checktype = $request->checktype;
    //     $user->password = $request->password;
    //     if ($request->file('profile_img')) {
    //         $userProfileImg = $request->profile_img;
    //         $userProfileImgName = Str::random(10) . '.' . $userProfileImg->getClientOriginalExtension();
    //         Storage::disk('public_users')->put($userProfileImgName, File::get($userProfileImg));
    //         $user->profile_img = $userProfileImgName;
    //     }
    //     $user->save();
    //     return redirect()->route('web_login')->with('message');

    // }



    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'first_name' => $data['first_name'],
            'profile_img' => $data['profile_img'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => 'User',
            'user_status' => User::PENDING,
        ]);
    }
    protected function guard()
    {

        return Auth::guard();
    }
}
