<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Word;
use App\Choice;

class WordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = Category::find($request->category_id);

        return view('words.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'choice_1' => ['required', 'max:255'],
            'choice_2' => ['required', 'max:255'],
            'choice_3' => ['required', 'max:255'],
            'choice_4' => ['required', 'max:255'],
        ]);

        // create word
        $word = new Word;
        $word->category_id = $request->category_id;
        $word->question = $validatedData['question'];
        $word->save();
        
        // create choices
        for($i = 1; $i <= 4; $i++)
        {
            // choice_x
            $choice = 'choice_' . $i;

            // check for is_correct
            if($i == $request->is_correct) {
                $boolean = true;
            } else {
                $boolean = false;
            }

            Choice::create([
                'word_id'=> $word->id,
                'content' => $validatedData[$choice],
                'is_correct' => $boolean,
            ]);
        }

        // get category
        $category = Category::find($request->category_id);

        // return to view with category data
        $request->session()->flash('success', 'Word successfully added to category.');
        return view('/words/create', compact('category'));
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
