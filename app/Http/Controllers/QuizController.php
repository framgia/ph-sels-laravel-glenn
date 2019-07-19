<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Answer;
use App\Choice;
use App\Category;
use App\Activity;
use App\Category_Session;

class QuizController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->choice_id == null) {
            $request->choice_id = 0;
            $is_correct = 0;
        } else {
            $is_correct = Choice::find($request->choice_id)->is_correct;
        }

        // update or create for if user goes back in quiz to change answers
        $test = Answer::updateOrCreate(
            ['word_id' => $request->word_id],
            ['user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'word_id' => $request->word_id,
            'choice_id' => $request->choice_id,
            'is_correct'=> $is_correct
        ]);

        if($request->nextPage == null) {
            $category_session = Category_Session::where('user_id', Auth::id())->where('category_id', $request->category_id)->first();
            $category_session->update([
                'is_finished' => 1
            ]);

            // create a activity for finishing category
            Activity::create([
                'user_id' => Auth::id(),
                'activity_id' => $category_session->id,
                'activity_type' => 'App\Category_Session',
            ]);
 
            $category = Category::find($request->category_id);
            $answers = Answer::where('user_id', Auth::id())->get()->where('category_id', $request->category_id);
            return view('categories.results', compact('answers', 'category'));
        } else {
            return redirect()->away($request->nextPage);
        }
    }
}
