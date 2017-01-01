<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Permission extends Model{
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
