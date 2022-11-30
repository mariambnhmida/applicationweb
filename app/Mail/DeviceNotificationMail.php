<?php

namespace App\Mail;

use App\DeviceNotification;
use App\Modules\Devise\Models\Devise;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeviceNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * @var DeviceNotification[]
     */
    public $deviceNotifications;

    /**
     * @var Devise
     */
    public $device;

    /**
     * Create a new message instance.
     *
     * @param DeviceNotification[] $deviceNotifications
     */
    public function __construct(array $deviceNotifications, Devise $devise)
    {
        $this->deviceNotifications = $deviceNotifications;
        $this->device = $devise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('alert@dig2s.com')
            ->subject('Device Alert')
            ->view('emails.notifications.device-alert');
    }
}
