<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class QuestionsModel {

    public static function get_all() {
        $questions = DB::table('questions')->get();

        return $questions;
    }

    public static function get_id($id) {
        $question = DB::table('questions')->find($id);

        return $question;
    }
    
    public static function save($data) {
        $new_question = DB::table('questions')->insert($data);

        return $new_question;
    }

    public static function last($data) {
        // $last = DB::table('questions')->latest()->first();

        // return $last;
        $last_id = DB::table('questions')->where('judul', $data)->value('id');

        return $last_id;
    }

    public static function join() {
        $data = DB::table('questions')
                    ->join('users', 'questions.id', '=', 'users.id')
                    ->get();
        
        return $data;
    }

    public function user() {
        return $this->belongsto('App\Models\UsersQuestionsModel');
    } 

}