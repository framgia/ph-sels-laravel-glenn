<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;
use Image;
=======
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
use Illuminate\Support\Facades\Auth;
use App\User;
>>>>>>> [SELS-TASK] User Profile Page

class UsersController extends Controller
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> [SELS-TASK] User Profile Page
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
<<<<<<< HEAD
=======
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
>>>>>>> [SELS-TASK] User Profile Page
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return view('users.show', [
=======
        $img = url('storage/img/2x2.jpg');
=======
        $img = asset('storage/img/2x2.jpg');
>>>>>>> [SELS-TASK] User Edit Page and Home Page
        
        return view('users.show', [
            'img' => $img,
<<<<<<< HEAD
>>>>>>> [SELS-TASK] User Profile Page
            'user' => User::find($id),
=======
            'user' => User::findOrFail($id),
>>>>>>> [SELS-TASK] User Edit Page and Home Page
        ]);
=======
        return view('users.user_show');
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
        $img = url('storage/img/2x2.jpg');
        
        return view('users.user_show', [
            'img' => $img,
            'user' => User::find($id),
        ]);
>>>>>>> [SELS-TASK] User Profile Page
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        return view('users.edit', [
            'user' => User::find($id),
        ]);
=======
        //
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, User $user)
    {
        $user = Auth::user();

        // Handle the user upload of avatar
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            // Delete current image before uploading new image
            if($user->avatar !== 'default.png') {

                $file = 'uploads/avatars/' . $user->avatar;

                if (File::exists($file)) {
                    unlink($file);
                }
            }

            Image::make($avatar)->resize(300, 300)->save('uploads/avatars/' . $filename);
            $user->update(['avatar' => $filename]);
        }
        
        $user->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'username' => request('username'),
            'email' => request('email'),
        ]);
        
        return view('users.edit', compact('user'))
            ->with('success','You have successfully upload image.');
    } 
=======
    public function update(Request $request, $id)
    {
        //
    }
>>>>>>> [SELS-TASK] User Registration, Login, and Logout

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        // log user out before deletion
        Auth::logout();

        // delete user data from database
        User::find($id)->delete();

        // redirect to welcome page
        return view('welcome');
=======
        //
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
    }
}
