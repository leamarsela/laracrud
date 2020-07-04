<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class AnswersUsersModel {

    public static function save($data) {
        
        $user_id = DB::table('answer_user')->insert(data);

        return $user_id;
    }




}