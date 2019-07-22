<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Relationship;
use App\Activity;
use Image;
use File;

class UsersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
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
        // check for following status
        if(Auth::id() == $id) {
            $relationship['status'] = 2; // self
        } else {
            if(Auth::user()->followings()->where('followed_id', $id)->first()) {
                $relationship['status'] = 1; // already following
            } else {
                $relationship['status'] = 0; // not following
            }
        }

        // check for following count of auth user
        $relationship['following_user'] = Relationship::where('follower_id', Auth::id())->count();

        // check for following count of onpage user
        $relationship['following_onpage'] = Relationship::where('follower_id', $id)->count();

        // check for followers count of auth user
        $relationship['follower_user'] = Relationship::where('followed_id', Auth::id())->count();

        // check for followers count of auth user
        $relationship['follower_onpage'] = Relationship::where('followed_id', $id)->count();

        // load onpage user profile data
        $userOnPage = User::find($id);

        // load onpage user activities
        $activities = Activity::where('user_id', $id)->get();

        return view('users.show', compact('userOnPage', 'relationship', 'activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
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
        $user = User::find($id);

        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            // Delete current image before uploading new image
            if ($user->avatar !== 'default.png') {
                $file = 'uploads/avatars/' . $user->avatar;

                if (File::exists($file)) {
                    unlink($file);
                }

            }

            Image::make($avatar)->resize(300, 300)->save('uploads/avatars/' . $filename);
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' =>  $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return view('users.edit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // logout user before deletion from database
        Auth::logout();

        // delete user data from database
        User::find($id)->delete();

        // return to main splash page
        return view('welcome');
    }
}
