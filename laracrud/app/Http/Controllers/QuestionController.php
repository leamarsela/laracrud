<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Question;

// use App\Models\QuestionsModel;
// use App\Models\UsersQuestionsModel;

class QuestionController extends Controller
{   

    public function index() {

        $questions = Question::get_all();

        return view('question.index', compact('questions'));
    }

    public function create() {

        return view('question.create');
    }

    public function store(Request $request) {
        // $data = $request->all();

        // dd($data);
        // $user = $request->get('user_id');
        
        // $newquestion = new Question([
        //     'judul' => $request->get('judul'),
        //     'isi' => $request->get('isi')
        // ]);

        $question = new Question;
        $question->judul = 'ini judul';
        $question->isi = 'Ini isi';

        $question->save();

        dd($question);
        
        // // $user->question()->create($newquestion);
        // $user->question()->insert([
        //     'judul' => $request->get('judul'),
        //     'isi' => $request->get('isi')
        // ]);

        // dd($user);

        // $data = new \App\Models\Question;
        // $data->judul = $request->get('judul');
        // $data->isi = $request->get('isi');

        // $new = 

        // $data->save();


    }
    // public function index() {
    //     $questions = QuestionsModel::get_all();

    //     return view('question.index', compact('questions'));
    // }

    // public function create() {

    //     return view('question.create');
    // }

    // public function store(Request $request) {

    //     // dd($request->all());
    //     $data = $request->all();
    //     unset($data["_token"]);
    //     // $dataquestion = new \App\Models\QuestionsModel;
        
        
    //     $item = QuestionsModel::save($data);
    //     if($item) {
    //         return redirect('/question');
    //     }
    //     // $data = App\Models\QuestionsModel;
    //     // $data->judul = $request->('judul');
    // }

    // public function store(Request $request) {

    //     $item = QuestionsModel::save([
    //         'judul'=> $request->get('judul'),
    //         'isi' => $request->get('isi')
    //     ]);

    //     $id = QuestionsModel::last($request->get('judul'));

        
        // dd($id);

        // $dataquestion->judul = $request->get('judul');
        // $dataquestion->isi = $request->get('isi');
        
        // $id = QuestionsModel::insertGetId([
        //     'judul'=> $request->get('judul'),
        //     'isi' => $request->get('isi')
        // ]);
        // dd($id);

        // $item_user = UsersQuestionsModel::save([
        //     'user_id' => $request->get('user_id'),
        //     'question_id' => QuestionsModel::last($request->get('judul')),
        //     'value' => 0
        // ]);
        
        // $item_user = new UsersQuestionsModel(['question_id'=> $id]);

        // $userid = $request->get('user_id');

        // $userid->question()->create($item_user);

        // dd($userid);

        // dd($item_user);
        // $datauserquestion = new \App\Models\UsersQuestionsModel;
        // $datauserquestion->user_id = $request->get('user_id');

        // $datauserquestion->save();
        
        // return redirect('/question');

    // }


}
