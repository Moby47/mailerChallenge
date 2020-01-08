<?php

namespace App\Http\Controllers;

use App\Subscribers;
use App\Http\Resources\SubscribersResource as SubscriberRes;
use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View all subscribers
        $subscribers = Subscribers::orderBy('id','desc')
                                   ->select('id','name','email','state','created_at')
                                   ->get();

        return SubscriberRes::collection($subscribers);
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
        // Validate the requests...
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:Subscribers',
            'state' => 'required|string|max:12',
        ]);

        // get requests...
        $name = $request->input('name');
        $email = $request->input('email');
        $state = $request->input('state');

        $save = new Subscribers;

        $save->name = $name;
        $save->email = $email;
        $save->state = $state;

        $save->save();

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //View all subscribers
        $subscriber = Subscribers::select('id','name','email','state','created_at')
                                  ->where('id', $id)
                                  ->get();
                                   
         return new SubscriberRes($subscriber);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
