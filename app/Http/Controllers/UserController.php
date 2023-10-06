<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'hello from UserController';
        // resource
        $userRes = UserResource::make(User::findOrFail(1));
        $userJson = $userRes->toJson();
        dump('userRes', $userRes);
        dump('userJson', $userJson);
        // resource collection
        $userColl = DB::table('users')->select('*')->paginate(4);
        $userResColl = UserCollection::make($userColl);
        dump('userResColl', $userResColl);
        // Transform the resource into an HTTP response
        $userListJson = $userResColl->response()->getContent();
        dump('userListJson', $userListJson);
        
        return view('user', [
            'user' => $userJson,
            'users' => $userListJson
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    
    public function login(Request $request) {
        $request->validate([
            'username' => 'required|min:3|max:10',
            'password' => 'required|min:5'
        ]);
        return $request->input();
    }
}
