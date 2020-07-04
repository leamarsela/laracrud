<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class User {

    public function profile() {
        return $this->hasOne("App\Models\Profile");
    }

    public function question() {
        return $this->hasMany("App\Models\Question");
    }
    

}