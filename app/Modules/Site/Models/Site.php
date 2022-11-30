<?php

namespace App\Modules\Site\Models;

use App\DeviceNotification;
use App\Modules\Devise\Models\Devise;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Site extends Model {

    protected $fillable = [
        'localisation',
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function devises()
    {
        return $this->hasMany(Devise::class);

    }

    public function notifications()
    {
        return $this->hasManyThrough(DeviceNotification::class, Devise::class, 'site_id', 'device_id');
    }

    public function unseenNotifications()
    {
        return $this->notifications()->where('seen', false)
            ->get();
    }

    public function lastNotification()
    {
        return $this->notifications()
            ->orderBy('id', 'desc')
            ->first();
    }

    public function hasNotification()
    {
        $lastNotification = $this->lastNotification();
        return $lastNotification ? $lastNotification->seen == false : false;
    }

    public function hasBadNotification()
    {
        $lastNotification = $this->lastNotification();
        if (!$lastNotification)
            return false;

        return in_array(
            $lastNotification->type,
            [DeviceNotification::TYPE_ALERT_SETTING, DeviceNotification::TYPE_DEVICE_TIMEOUT]
        );

    }
}
