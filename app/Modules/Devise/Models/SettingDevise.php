<?php

namespace App\Modules\Devise\Models;

use App\Modules\Devise\Models\Devise;
use Illuminate\Database\Eloquent\Model;

class SettingDevise extends Model
{
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
        'lvl_flotteur1',
        'lvl_flotteur2',
        'up_ppm',
        'dow_ppm',
    ];

    public function devise(){
        return $this->belongsTo(Devise::class);
    }
}
