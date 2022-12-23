<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('admin.faq.faq',compact('faqs'));
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
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
        ]);
        // $checkEmail = User::where('email','=', $request->email)->first();
        //   dd($checkEmail->email);
          if ($request->answer == null) {
            $notification = array(
                'message' => 'please enter a valid answer',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
          }
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        $notification = array('message' =>'FAQs Added successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id ,Request $request )
    {
        $faq = Faq::find($id);
        // dd($faq);
        // return ['data'=>$faq];
        // $article = Faq::find($id);
        // $article = $article['article'];
       return view('admin.faq.faq_edit',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        // dd($request->all());
        if ($request->answer == null) {
            $notification = array(
                'message' => 'please enter a valid answer',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
          }
        $id = $request->hidden;
        $updatefaq = Faq::find($id);
        $updatefaq->update([
            'question'=> $request->question,
            'answer'=> $request->answer,
        ]);
        $notification = array('message' =>'FAQs Updated successfully!' ,
        'alert-type'=>'success' );
    //    return redirect()->back()->with($notification);
        return redirect('/admin/faq')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $faq = Faq::find($request->hidden);
        $faq->delete();
        $notification = array('message' =>'FAQs Deleted successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
    }
}
