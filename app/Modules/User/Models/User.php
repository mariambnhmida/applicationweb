<?php

namespace App\Modules\User\Models;

//use App\Http\Controllers\Controller;
//use http\Env\Request;
//use Illuminate\Database\Eloquent\Model;

use App\DeviceNotification;
use App\Modules\Devise\Models\Devise;
use App\Modules\Site\Models\Site;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'nom',
        'prenom',
        'adresse',
        'pays',
        'tel',
        'site_id',
        'status',
        'role'
    ];

    public function sites()
    {
        return $this->belongsTo('App\Modules\Site\Models\Site' , 'site_id','id');
    }


    public function contact(){
        return $this->hasMany(contact::class);
    }

    public function devices()
    {
        return $this->hasManyThrough(Devise::class, Site::class, 'site_id');
    }

    public function notifications()
    {
        return DeviceNotification::join('devises', 'device_notifications.device_id', 'devises.id')
            ->join('sites', 'sites.id', '=', 'devises.site_id')
            ->where('sites.id', $this->site_id)
            ->orderBy('device_notifications.id', 'desc');
    }


    public function unseenNotifications()
    {
        return $this->notifications()
            ->where('seen', false)
            ->get();
    }

    public function hasUnseenNotifications()
    {
        return $this->unseenNotifications()->count() > 0;
    }
}
