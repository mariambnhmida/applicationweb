<?php

namespace App\Modules\Devise\Models;

use App\DeviceNotification;
use App\Modules\ShowDevice\Models\ShowDevice;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Devise extends Model {

    const STATUS_WORKING="Working";
    const STATUS_NOT_WORKING="Not Working";

    private $user = null;

    protected $fillable =[

        'id' ,'name_device' , 'code_device' , 'id_mac','site_id', 'status', 'timeout'
    ];

    protected $attributes = [
        'status' => self::STATUS_NOT_WORKING,
    ];

    public function site()
    {
        return $this->belongsTo('App\Modules\Site\Models\Site' , 'site_id','id');

    }

    public function user()
    {
        if (!$this->user) {
            $this->user = User::where('site_id', $this->site_id)->first();
        }
        return $this->user;
    }

    public function setting(){
        return $this->hasOne(Setting::class);
    }

    public function notifications()
    {
        return $this->hasMany(DeviceNotification::class);
    }

    public function getLastSetting($settingName)
    {
        return Setting::where('devise_id', $this->id)
            ->where('name', $settingName)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function isWorking()
    {
        return $this->status == self::STATUS_WORKING;
    }
}
