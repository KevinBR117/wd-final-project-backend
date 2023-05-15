<?php

namespace App\Http\Controllers\VarkTest;

use App\Http\Controllers\Controller;
use App\Models\VarkTest\VarkQuestions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function getQuestions()
    {
        $questions = VarkQuestions::with('answers')->get();
        return response()->json($questions);
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(VarkQuestions $question)
    {
    }

    public function edit(VarkQuestions $question)
    {
    }

    public function update(Request $request, VarkQuestions $question)
    {
    }

    public function destroy(VarkQuestions $question)
    {
    }
}
