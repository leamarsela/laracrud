<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $answers = Answer::where('question_id', $id)->get();
        
        return view('answers.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        $answer = new Answer;
        $answer->isi = $request->get('isi');
        $answer->is_selected = $request->get('is_selected');
        $answer->question_id = $request->get('question_id');

        $answer->save();

        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($id, Answer $answer)
    {
        $answers = Answer::where('question_id', $id)->get();

        $question = Question::where('id', $id)->first();
        
        return view('qna.index', compact('answers', 'question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        return view('answers.edit', compact('answer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        Answer::where('id', $answer->id)->update([
            'isi' => $request->isi
        ]);
        
        return redirect('/questions')->with('status', 'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        Answer::destroy($answer->id);

        return redirect('/questions')->with('status', 'Jawaban berhasil dihapus.');
    }
}
