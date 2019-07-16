<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Session;

class CategoriesController extends Controller
{
    public function adminIndex()
    {  
        $categories = Category::all();

        return view('categories.admin_index', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get category id and user id
        $category = Category::find($id);
        
        $session = Session::where([['user_id', Auth::id()], ['category_id', 1]]);

        dd($session);

        // check if session exists
        if($session->exists()) {
            if($session->is_finished) {
                dd('yes i am finished');
            } else {
                dd('no i am not finished');
            }
        } else {
            dd('no, i dont exist');
        }
        
        dd('henlo');
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
        ]);

        Category::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return back()->with('success', 'Category successfully created.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
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
        $category = Category::find($id);

        $validatedData = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
        ]);

        $category->update([
            'title' => $validatedData['title'],
            'description' =>  $validatedData['description'],
        ]);

        return back()->with('success', 'Category successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return back()->with('success', 'Category successfully deleted.');
    }
}
