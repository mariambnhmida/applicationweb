<?php

namespace App\Modules\ShowDevice\Models;

use Illuminate\Database\Eloquent\Model;

class ShowDevice extends Model {

    protected $fillable =[
        'id_mac'
    ];
    public function Device(){
        return $this->hasOne('App\Modules\Devise\Models\Devise');
    }


}
