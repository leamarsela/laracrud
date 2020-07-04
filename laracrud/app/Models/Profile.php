<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Profile {

    public function user() {
        return $this->belongsTo("App\Models\User");
    }

}