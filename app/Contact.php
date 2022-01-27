<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = 'id_contact';

    public function admin(){
        return $this->hasOne(User::class,'id','id_admin');
    }
}
