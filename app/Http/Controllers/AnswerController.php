<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Question $question, Answer $answer, Request $request)
    {
        $this->validate($request, [
            'body' => 'required|min:5',           
        ]);

        $answer->body = $request->body;
        $answer->question_id = $question->id;
        $answer->save();

        return back();
    }
}
