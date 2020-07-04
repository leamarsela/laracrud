<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswersModel {

    public static function get_all() {
        $answers = DB::table('answers')->get();

        return $answers;
    }

    public static function get_id($id) {
        $answers_id = DB::table('answers')->find($id);

        return $answers_id;
    }
    
    public static function save($data) {
        $new_answer = DB::table('answers')->insert($data);

        return $new_answer;
    }




}