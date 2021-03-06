<?php

namespace App\Http\Controllers;

use App\Fields;
use App\Http\Resources\FieldsResource as FieldRes;
use Illuminate\Http\Request;

class FieldsController extends Controller
{

    /**
     * Show a subscriber's field(s).
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriberfield($id)
    {
        //View all Fields for a subscriber
        $Fields = Fields::orderBy('id','desc')
                                   ->select('id','title','type','subscribers_id')
                                   ->where('subscribers_id','=', $id)
                                   
                                   ->paginate(5);

        return FieldRes::collection($Fields);
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
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        // get requests...
        $title = $request->input('title');
        $type = $request->input('type');
        $subscribers_id = $request->input('subscribers_id');

        $save = new Fields;

        $save->title = $title;
        $save->type = $type;
        $save->subscribers_id = $subscribers_id;

        $save->save();

        return 1;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateField(Request $request)
    {
         // Validate the requests...
         $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
        ]);

        // get requests...
        $title = $request->input('title');
        $type = $request->input('type');
        $id = $request->input('id');

        $update = Fields::findorfail($id);

        $update->title = $title;
        $update->type = $type;

        $update->save();

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyField(Request $request)
    {
        $id = $request->input('id');

        $fields = Fields::findorfail($id);

        $fields->delete();

        return 1;
    }
}
