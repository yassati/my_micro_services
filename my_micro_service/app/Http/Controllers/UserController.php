<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        $alluser = User::all();
        return response($alluser);
    }
        public function showOne($id)
    {
        return response()->json(User::find($id));
    }
    public function create(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function update($id, Request $request)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->password = app('hash')->make($request->input('passsword'));

        $data->save();
        return response('update reussi OK');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}