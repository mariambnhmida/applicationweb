<?php

namespace App\Modules\Devise\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static $settingNames = [
        'PH',
        'ORP',
        'water temprature',
        'air temprature',
        'ppm',
    ];

    protected $fillable = [
        'name',
        'up_ph',
        'down_ph',
        'up_orp',
        'down_orp',
        'up_tempwater',
        'down_tempwater',
        'up_tempair',
        'down_tempair',
//        'lvl_flotteur1',
//        'lvl_flotteur2',
        'up_ppm',
        'dow_ppm',
        'devise_id'
    ];

    public function devise(){
        return $this->belongsTo(Devise::class);
    }
}
