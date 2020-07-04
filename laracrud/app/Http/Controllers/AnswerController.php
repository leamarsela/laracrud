<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswersModel;
use App\Models\QuestionsModel;

class AnswerController extends Controller
{
    public function index($id) {
        
        $answer_id = AnswersModel::get_id($id);
        $question_id = QuestionsModel::get_id($id);


        return view('answer.index', compact('answer_id', 'question_id'));
    }

    public function create() {

        return view('answer.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);

        $item = AnswersModel::save($data);
        if($item) {
            return redirect('/question');
        }
    
    }
}
