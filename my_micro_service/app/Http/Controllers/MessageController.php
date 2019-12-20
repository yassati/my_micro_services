<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    
    public function showAll()
    {
        return Message::all();
    }
    public function showOne($id)
    {
        $message = Message::find($id);
        return response($message);
    }
    public function create(Request $request)
    {
        $message = Message::create($request->all());

        return response()->json($message, 201);
    }

    public function update($id, Request $request)
    {
        $message = Message::findOrFail($id);
        $message->update($request->all());

        return response()->json($message, 200);
    }

    public function delete($id)
    {
        Message::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}