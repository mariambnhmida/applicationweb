<h2>
    Device: {{$device->name_device}}  ({{$device->id_mac}})
</h2>
<ul>
    @foreach($deviceNotifications as $notification)
    <li>{{$notification->message}}</li>
    @endforeach
</ul>
