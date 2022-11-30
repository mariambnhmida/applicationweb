<?php

namespace App\Console\Commands;

use App\DeviceNotification;
use App\Mail\DeviceNotificationMail;
use App\Modules\Devise\Models\Devise;
use App\Modules\Devise\Models\Setting;
use App\Modules\ShowDevice\Models\ShowDevice;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class DeviceStatusChecker extends Command
{

    public static $settingsFieldMapping = [
        'PH' => [
            'name' => 'Ph',
            'setting_up' => 'up_ph',
            'setting_down' => 'down_ph'
        ],
        'ORP' => [
            'name' => 'ORP',
            'setting_up' => 'up_orp',
            'setting_down' => 'down_orp'
        ],
        'water temprature' => [
            'name' => 'TempWater',
            'setting_up' => 'up_tempwater',
            'setting_down' => 'down_tempwater'
        ],
        'air temprature' => [
            'name' => 'TempAir',
            'setting_up' => 'up_tempair',
            'setting_down' => 'down_tempair'
        ],
        'ppm' => [
            'name' => 'ppm',
            'setting_up' => 'up_ppm',
            'setting_down' => 'dow_ppm'
        ]
    ];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'device:status-check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will check if the device is working and all it\'s settings in good health';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $devices = Devise::all();

        $currentDate = Carbon::now('Europe/Paris');

        foreach ($devices as $device) {
            $this->info('================================================');
            $this->info('Device: ' . $device->code_device);
            $this->info('Device: ' . $device->id_mac);
            $this->info('Device timeout: ' . $device->timeout);
            $this->info('Current datetime: ' . $currentDate );

            $showDevice = ShowDevice::where("MAC", $device->id_mac)
                ->orderBy('id', 'desc')
                ->first();

            if (!$showDevice) {
                $this->info('Device has no data');
                if ($device->status != Devise::STATUS_NOT_WORKING) {
                    $device->status = Devise::STATUS_NOT_WORKING;
                    $device->save();
                    $this->createTimeoutNotification($device);
                }
                continue;
            }

            $this->info('Diff with current date: ' . $currentDate->diffInSeconds($showDevice->Time_S));

            //Check for device timeout
            if ($currentDate->diffInSeconds($showDevice->Time_S) >= $device->timeout) {
                if ($device->status != Devise::STATUS_NOT_WORKING) {
                    $device->status = Devise::STATUS_NOT_WORKING;
                    $device->save();
                    $this->createTimeoutNotification($device);
                }
                continue;
            } elseif ($device->status == Devise::STATUS_NOT_WORKING) {
                $device->status = Devise::STATUS_WORKING;
                $device->save();
                $this->createDeviceWorkingNotification($device, $showDevice);
            }
            //Check if setting notifications already sent
            $lastNotification = DeviceNotification::where('device_id', $device->id)
                ->orderBy('id', 'desc')
                ->first();

            if (!$lastNotification || $lastNotification->show_device_id != $showDevice->id) {
                $notifications = [];
                foreach (Setting::$settingNames as $settingName) {
                    $setting = $device->getLastSetting($settingName);
                    if (!$setting) continue;

                    $notification = $this->checkSettings($device, $setting, $showDevice);
                    if ($notification) {
                        $notifications[] = $notification;
                    }
                }

                $this->sendMailNotification($notifications, $device, $showDevice);
            }
        }
    }

    private function sendMailNotification(array $notifications, ?Devise $devise, ?ShowDevice $showDevice)
    {
        Mail::to($devise->user()->email)->send(new DeviceNotificationMail($notifications, $devise));
    }

    private function checkSettings(Devise $devise, Setting $setting, ShowDevice $showDevice)
    {
        $settingFieldMapping = self::$settingsFieldMapping[$setting->name];

        $name = $settingFieldMapping['name'];
        $settingUp = $settingFieldMapping['setting_up'];
        $settingDown = $settingFieldMapping['setting_down'];
        if ($showDevice->$name >= $setting->$settingDown) {
            return $this->createSettingAlertNotification(
                $devise,
                $showDevice,
                $showDevice->$name,
                $setting->$settingDown,
                $settingFieldMapping['name'],
                'higher'
            );
        } elseif ($showDevice->$name <= $setting->$settingUp) {
            return $this->createSettingAlertNotification(
                $devise,
                $showDevice,
                $showDevice->$name,
                $setting->$settingUp,
                $settingFieldMapping['name'],
                'lower'
            );
        }
    }

    private function createSettingAlertNotification(Devise $devise, ShowDevice $showDevice, $value, $limitValue, $settingName, $sens)
    {
        $message = 'Device ' . $devise->code_device . ' has the ' . $settingName . ' (' . $value . ') ' . $sens . ' than ' .
            $limitValue;

        $this->info('Sending setting alert notification :' . $message);

        $deviceNotification = DeviceNotification::create([
            'device_id' => $devise->id,
            'message' => $message,
            'type' => DeviceNotification::TYPE_ALERT_SETTING,
            'setting_name' => $settingName,
            'show_device_id' => $showDevice->id
        ]);

        return $deviceNotification;
    }

    private function createTimeoutNotification(Devise $devise)
    {
        $this->info('Sending Device Timeout notification');

        $deviceNotification = DeviceNotification::create([
            'device_id' => $devise->id,
            'type' => DeviceNotification::TYPE_DEVICE_TIMEOUT,
            'message' => 'Device is not working'
        ]);

        $this->sendMailNotification([$deviceNotification], $devise, null);

        return $deviceNotification;
    }

    private function createDeviceWorkingNotification(Devise $devise, ShowDevice $showDevice)
    {
        $this->info('Sending Device Working notification');
        $deviceNotification = DeviceNotification::create([
            'device_id' => $devise->id,
            'type' => DeviceNotification::TYPE_ACTIVE_STATUS,
            'message' => 'Device is activate'
        ]);
        $this->sendMailNotification([$deviceNotification], $devise, $showDevice);

        return $deviceNotification;
    }
}
