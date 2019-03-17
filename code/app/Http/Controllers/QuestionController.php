<?php

namespace App\Http\Controllers;

use App\Question;
use App\Tag;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('q') && $request->get('q') !== null) {
            $questions = Question::search($request->get('q'))->paginate(10);
        } else {
            $questions = Question::paginate(10);
        }

        return view('questions.index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = array_map('trim', explode(',', $request->get('tags')));

        $question = new Question([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
        ]);

        $tagList = [];

        foreach ($tags as $tag)
        {
            $tagList[] = Tag::where('name',$tag)->first()
                ? Tag::where('name',$tag)->first()
                : new Tag(['name' => $tag])
            ;
        }

        $question->save();

        $question->tags()->saveMany($tagList);

        return redirect(route('questions.show', $question->getId()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
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

        $tags = array_map('trim', explode(',', $request->get('tags')));
        $tagList = [];

        foreach ($tags as $tag)
        {
            $tagList[] = Tag::where('name',$tag)->first()
                ? Tag::where('name',$tag)->first()
                : new Tag(['name' => $tag])
            ;
        }

        $question
            ->setTitle($request->get('title'))
            ->setDescription($request->get('description'))
        ;

        $question->tags()->delete();

        $question->tags()->saveMany($tagList);

        $question->save();


        return redirect(route('questions.show'), $question->getId());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->forceDelete();

        return redirect(route('question.index'));
    }
}
