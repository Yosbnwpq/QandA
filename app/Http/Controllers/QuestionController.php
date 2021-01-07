<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {

        $questions = Question::orderBy('created_at', 'desc')->get();
        
        $defaultQuestions = [
            'So what is right?',
            'And what is wrong?',
            'Give me a sign.',
            'What is love?'
        ];
        $placeholderQuestion = Arr::random($defaultQuestions, 1)[0];

        return view('questions.index', ['questions' => $questions, 'placeholderQuestion' => $placeholderQuestion]);
    }

    public function store(Request $request, Question $question)
    {

        $this->validate($request, [
            'body' => 'required|min:5|ends_with:?',           
        ]);
        
        $question->body = $request->body;
        $question->save();
        
        return back();
    }

    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }
}
