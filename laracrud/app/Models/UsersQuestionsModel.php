<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class UsersQuestionsModel {

    public static function save($data) {
        $new_data = DB::table('user_question')->insert($data);

        return $new_data;
    }
    // public static function get_all() {
    //     $questions = DB::table('questions')->get();

    //     return $questions;
    // }

    // public static function get_id($id) {
    //     $question = DB::table('questions')->find($id);

    //     return $question;
    // }
    
    // public static function save($data) {
    //     $new_question = DB::table('questions')->insert($data);

    //     return $new_question;
    // }

    public function question() {
        return $this->belongsto('App\Models\UserQuestionsModel');
    }


}