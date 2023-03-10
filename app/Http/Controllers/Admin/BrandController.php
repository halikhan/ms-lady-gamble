<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BrandService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Storage;

class BrandController extends Controller
{
    private $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = $this->brandService->paginate(env('PAGINATE'));
        return view('admin.brand.brand', compact('brands'));
    }

    public function all()
    {
        return $this->brandService->all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'link' => 'sometimes',
            'image' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);
        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_brands')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        // create brand
        $brand = ($this->brandService->create($req))['brand']['brand'];

        $notification = array('message' =>'Brand Updated successfully!' ,
        'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }

    public function show($id)
    {
        // dd($id);
        if(array_key_exists('id', $_REQUEST)){
            // dd($_REQUEST['id']);
            return $this->brandService->find($_REQUEST['id']);
        }

        return $this->brandService->find($id);
    }

    public function update(Request $request, $id)
    {
        $id = $request->hidden;
        $brand = ($this->show($id))['brand'];

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes',
            'image' => 'sometimes',
            'link' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            Storage::disk('public_brands')->delete($brand->image);
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_brands')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        $brand = ($this->brandService->update($req, $id))['brand']['brand'];
        $notification = array('message' =>'Brand Updated successfully!' ,
        'alert-type'=>'success' );
        return redirect()->back()->with($notification);
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->brandService->delete($id);

        return redirect()->back();
    }

    public function search_brands(Request $request)
    {
        $query = $request['query'];

        $brands = $this->brandService->search_brands($query);

        return view('admin.brand.brand', compact('brands'));
    }

}
