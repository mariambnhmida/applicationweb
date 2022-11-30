<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected  $fillable =['subject','text','id_user'];


    public function user(){
    return $this->belongsTo(user::class);
}

}

