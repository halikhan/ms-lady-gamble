<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Gametype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GametypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdraw = Gametype::all();
        // return $withdraw;
        return view('admin.game.game', compact('withdraw'));
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
            'game_type' => 'required',
        ]);
        $myInfo = new Gametype();
        $myInfo->game_type = $request->game_type;
        $myInfo->save();
        $notification = array('message' =>'Game type added successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
        // return redirect()->back()->with('message', 'Game type added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gametype::find($id);
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
        Validator::make($request->all(), [
            'game_type' => 'required',
        ]);

        $myInfo =  Gametype::findorfail($id);
        $myInfo->game_type = $request->game_type;
        $myInfo->save();
        $notification = array('message' =>'Game type updated successfully!' ,
        'alert-type'=>'success' );
       return redirect()->back()->with($notification);
        // return back()->with('message', 'Game type updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $myInfo =  Gametype::find($id);
        $myInfo->delete();
        return redirect()->back()->with('message', 'Game type deleted successfully!');
    }
}
