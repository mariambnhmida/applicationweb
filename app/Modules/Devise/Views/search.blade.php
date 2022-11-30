<table class="table table-bordered" style=" border: 1px solid black;">
    <thead>
    <tr>
        <th style=" border: 1px solid black;" >ID</th>
        <th style=" border: 1px solid black;">Mac</th>
        <th style=" border: 1px solid black;">Time</th>
        <th style=" border: 1px solid black;">PH</th>
        <th style=" border: 1px solid black;">ORP</th>
        <th style=" border: 1px solid black;">TempWater</th>
        <th style=" border: 1px solid black;">TempAir</th>
        <th style=" border: 1px solid black;">Flotteur1</th>
        <th style=" border: 1px solid black;">Flotteur2</th>
        <th style=" border: 1px solid black;">ppm</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $device)
        <tr>
            <td style=" border: 1px solid black;">{{ $device->id }}</td>
            <td style=" border: 1px solid black;">{{ $device->MAC }}</td>
            <td style=" border: 1px solid black;">{{ $device->Time_S }}</td>
            <td style=" border: 1px solid black;">{{ $device->Ph}}</td>
            <td style=" border: 1px solid black;">{{ $device->ORP}}</td>
            <td style=" border: 1px solid black;">{{ $device->TempWater}}</td>
            <td style=" border: 1px solid black;">{{ $device->TempAir}}</td>
            <td style=" border: 1px solid black;">{{ $device->Flotteur1}}</td>
            <td style=" border: 1px solid black;">{{ $device->Flotteur2}}</td>
            <td style=" border: 1px solid black;">{{ $device->ppm}}</td>
        </tr>
    @endforeach
    </tbody>
