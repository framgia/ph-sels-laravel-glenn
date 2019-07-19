<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\User;
use App\Relationship;
use App\Activity;

class RelationshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->relationship_status == 0) { // not yet followed    
            $relationship = Relationship::create([
                'followed_id' => $request->onpage_userid,
                'follower_id' => Auth::id(),
            ]);

            // create activity when following
            Activity::create([
                'user_id' => Auth::id(),
                'activity_id' => $relationship->id,
                'activity_type' => 'App\Relationship',
            ]);

            return back();
        } else {
            User::find(Auth::id())->relationships()->where('followed_id', $request->onpage_userid)->first()->delete();
            return back();
        }
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
        // declare arrays
        $followers = $followings = [];

        // get follower IDs
        $followerIDs = Relationship::where('followed_id', $id)->get();

        // get following IDs
        $followingIDs = Relationship::where('follower_id', $id)->get();

        // get follower user data from follower IDs
        foreach ($followerIDs as $followerID) {
            $followers = Arr::prepend($followers, User::find($followerID->follower_id));
        }

        // get following user data from following IDs
        foreach ($followingIDs as $followingID) {
            $followings = Arr::prepend($followings, User::find($followingID->followed_id));
        }

        $user = User::find($id);

        return view('relationships.show', compact('followers', 'followings', 'user'));
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
