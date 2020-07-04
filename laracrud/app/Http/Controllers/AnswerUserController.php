<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerUserModel;

class AnswerUserController extends Controller
{
    public static function save($data) {

        $new_data = DB::table('user_question')->insert($data);

        dd($new_data);

    }
    
}
