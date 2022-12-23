<?php

namespace App\Http\Controllers\Admin;


use App\Models\Banner;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\BannerService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class BannerController extends Controller
{
    private $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
        $this->middleware('auth');
    }

    public function index()
    {
        $banners = $this->bannerService->paginate(env('PAGINATE'));
        return view('admin.banner.banner', compact('banners'));

    }

    public function all()
    {
        return $this->bannerService->all();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'page' => 'required',
            'title' => 'sometimes',
            'subtitle' => 'sometimes',
            'description' => 'sometimes',
            'status' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);
        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_banners')->put($imageName, File::get($image));
            $req['image'] = $imageName;
        }

        // status work
        if(isset($request['status'])){
            $req['status'] = 'Active';
        }
        else{
            $req['status'] = 'Inactive';
        }
        // create banner
        $banner = ($this->bannerService->create($req))['banner']['banner'];

        return redirect()->back();
    }

    public function show($id)
    {
         $banner = Banner::find($id);
        return view('admin.banner.banner_edit',compact('banner'));

    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        // $id = $request->hidden;
        if ($request->description == null) {
            $notification = array(
                'message' => 'please enter description',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
          }
        $banner = ($this->show($id))['banner'];
        $data = Banner::find($id);
        $data->page = $request->page;
        $data->title = $request->title;
        $data->description = $request->description;
        // image work
        // $req = Arr::except($request->all(),['image']);

        // image
        if($request->image){
            Storage::disk('public_banners')->delete($banner->image);
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_banners')->put($imageName, File::get($image));
            $req['image'] = $imageName;
            $data->image = $imageName;
        }
        $data->save();
        $notification = array('message' =>'Content Updated successfully!' ,
        'alert-type'=>'success' );
       return redirect()->route('banner.index')->with($notification);
        // return redirect()->route('banner.index');
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->bannerService->delete($id);

        return redirect()->back();
    }

    public function search_banners(Request $request)
    {
        $query = $request['query'];

        $banners = $this->bannerService->search_banners($query);

        return view('admin.banner.banner', compact('banners'));
    }

}
