<?php

namespace App;

use App\Modules\Devise\Models\Devise;
use Illuminate\Database\Eloquent\Model;

class DeviceNotification extends Model
{
    const TYPE_DEVICE_TIMEOUT = 'device_inactive';
    const TYPE_ALERT_SETTING = 'device_alert_setting';
    const TYPE_ACTIVE_STATUS = 'device_alert_active';

    protected $fillable = [
        'device_id',
        'message',
        'type',
        'show_device_id',
        'setting_name',
        'seen'
    ];

    public function device()
    {
        return $this->belongsTo(Devise::class, 'device_id');
    }

    public function user()
    {
        return User::where('site_id', $this->device()->site_id)
            ->first();
    }

    public function isGood()
    {
        return $this->type == self::TYPE_ACTIVE_STATUS;
    }

    public function isBad()
    {
        return in_array($this->type, [self::TYPE_DEVICE_TIMEOUT, self::TYPE_ALERT_SETTING]);
    }
}
