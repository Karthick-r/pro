<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

public function docs(){
    return $this->hasMany('App\Docs');
}

}
