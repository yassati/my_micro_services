<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
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
        $author = User::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = User::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}