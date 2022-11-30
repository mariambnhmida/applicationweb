<?php

namespace App\Modules\Admin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    use Notifiable;

    protected $fillable = [
      'email','password',     
    ];

    protected $hidden = [
        'password','remember_token',
    ];
}
