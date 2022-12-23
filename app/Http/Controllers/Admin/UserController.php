<?php

namespace App\Http\Controllers\Admin;


use Hash;
use App\Models\User;
use App\Models\newsletter;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\SettingService;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;




class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth');
    }

    public function index()
    {
        // $users = User::with('basicInfo')->get();
        $users = User::where('type', 'User')->with('basicInfo')->get();
        // $details = newsletter::where('email', $users->email)->get();
        // dd($details);
        return view('admin.user.user', compact('users'));
    }

    public function index_kickers()
    {
        $users = $this->userService->paginate_kickers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }
    public function index_punters()
    {
        $users = $this->userService->paginate_punters(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }
 
    public function index_long_snappers()
    {
        $users = $this->userService->paginate_long_snappers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => "required|email|unique:users",
        ]);

        User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'password' => $request['password'],
            'email' => $request['email'],
            'user_status' => 2,
        ]);

        $notification = array(
            'message' => 'User Added successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function show($id)
    {
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        return $this->userService->find($id);
        // return view('admin.user.profile');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $id = $request->hidden;
        $user = User::find($id);

        if ($request->user_wallet == null) {
            // dd('here');
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_balance' => $request->user_wallet,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            $notification = array(
                'message' => 'User Updated successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }

        $items = Setting::where('id', 17)->Where('value', 'like', '%' . $request->user_wallet . '%')->first();
        // dd($items);
        if ($items == null) {
            // dd('here');
            $notification = array(
                'message' => 'Your free credit value does not match with configuration value!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        if ($items) {
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_balance' => $request->user_wallet,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            $notification = array(
                'message' => 'User Updated successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;
        $this->userService->delete($id);

        if ($request->user_type == 'rider') {
            return $this->getRiders($request);
        }

        $notification = array(
            'message' => 'User Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function search_users(Request $request)
    {
        $query = $request['query'];
        $users = $this->userService->search_users($query);
        return view('admin.user.user', compact('users'));
    }

    public function profile_builder(Request $request, $id)
    {
        $user = ($this->userService->find($id))['user'];
        $req = Arr::except($request->all(), ['image']);
        if (!(isset($req['password']))) {
            $req = Arr::except($req, ['password']);
        }
        // image
        if ($request->image) {
            if ($user->image) {
                Storage::disk('public_users')->delete($user->image);
            }
            $image = $request->image;
            $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
            Storage::disk('public_users')->put($imageName, File::get($image));
            $req['image'] = $imageName;
        }

        // rating
        if (isset($req['rating'])) {
            $req['rating'] = $req['rating'] / 2;
        }
        $this->userService->update($req, $id);
        return redirect()->back();
    }
}
