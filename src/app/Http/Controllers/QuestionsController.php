<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;
use App\Http\Requests\StoreQuestion;

class QuestionsController extends Controller
{
    protected $questionRepository;

    public function __construct(QuestionRepository $repository)
    {
        $this->questionRepository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'questions' => 'test'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestion $request)
    {
        $attributes = $request->validated();

        $question = $this->questionRepository->create($attributes);

        return response()->json([
            'question' => $question
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = $this->questionRepository->findOrFail($id);

        return response()->json([
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
