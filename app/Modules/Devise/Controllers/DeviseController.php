<?php

namespace App\Modules\Devise\Controllers;

use App\Http\Requests\DeviceCreateFormRequest;
use App\Http\Requests\DeviceSettingEditFormRequest;
use App\Http\Requests\DeviceUpdateFormRequest;
use App\Modules\Devise\Models\Devise;
use App\Modules\Devise\Models\SettingDevise;
use App\Modules\Site\Models\Site;
use App\Modules\Devise\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\ShowDevice\Models\ShowDevice;
use PDF;


class DeviseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function search()
    {
        $user = Auth::user();
        return view("Devise::search", ['user' => $user]);
    }

    public function index()
    {
        $devises = Devise::all();
        $user = Auth::user();


        return view("Devise::Devise", ['devises' => $devises, 'user' => $user]);
    }

    public function showlistdevise()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devises = Devise::all();
        $user = Auth::user();

        return view("Devise::listdevise", ['devises' => $devises, 'user' => $user]);
    }

    public function showlistdevise2()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devises = Devise::all();
        $user = Auth::user();
        return view("Devise::listdevise2", ['devises' => $devises, 'user' => $user]);
    }

    public function showlist()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $user = Auth::user();
        return view("Devise::list", ['user' => $user]);
    }

    public function showdevise()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devises = Devise::all();
        $sites = Site::all();
        $user = Auth::user();
        if (Auth::user()) {

            return view("Devise::Devise", ['devises' => $devises, 'sites' => $sites, 'user' => $user]);
        }
        return redirect(route('log'));
    }

    public function showEditDevise(Request $request, $id)
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devises = Devise::find($id);
        $sites = Site::all();
        $user = Auth::user();
        return view("Devise::EditDevise", ['devises' => $devises, 'sites' => $sites, 'user' => $user]);
    }

    public function handleeditdevise(DeviceUpdateFormRequest $request, $id)
    {
        $devises = Devise::find($id);
        $devises->update([
            'name_device' => $request->name_device,
            'id_mac' => $request->id_mac,
            'site_id' => $request->site_id,
            'timeout' => $request->timeout
        ]);
        $devises->save();
        return redirect(route('showlistdevise2'));
    }

    public function handelCreateDevise(DeviceCreateFormRequest $request)
    {
        Devise::create([
            'name_device' => $request->name_device,
            'code_device' => '' . random_int(1000, 9999),
            'id_mac' => $request->id_mac,
            'site_id' => $request->site_id,
            'timeout' => $request->timeout
        ]);
        return redirect(route('showlistdevise2'));
    }

    public function handleDeleteDevise($id)
    {
        $devise = Devise::find($id);
        $devise->delete();
        return redirect()->back();
    }

    /**
     *
     * /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showeditsettingsdevise($id, Request $request)
    {
        $devise = Devise::find($id);
        if (!Auth::user()) {
            return redirect(route('log'));
        }

//        $settings_devises = Devise::find($id);

        return view("Devise::settings", ['devises' => $devise]);
    }


    public function handleEditSettingsDevise($id, DeviceSettingEditFormRequest $request)
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devise = Devise::find($id);


        if ($request->name == 'PH') {
            Setting::create([
                'name' => $request->name,
                'up_ph' => $request->Up,
                'down_ph' => $request->Down,
                'devise_id' => $devise->id
            ]);
        }
        if ($request->name == 'ORP') {
            Setting::create([
                'name' => $request->name,
                'up_orp' => $request->Up,
                'down_orp' => $request->Down,
                'devise_id' => $devise->id
            ]);
        }
        if ($request->name == 'water temprature') {
            Setting::create([
                'name' => $request->name,
                'up_tempwater' => $request->Up,
                'down_tempwater' => $request->Down,
                'devise_id' => $devise->id
            ]);
        }
        if ($request->name == 'air temprature') {
            Setting::create([
                'name' => $request->name,
                'up_tempair' => $request->Up,
                'down_tempair' => $request->Down,
                'devise_id' => $devise->id
            ]);
        }
        if ($request->name == 'ppm') {
            Setting::create([
                'name' => $request->name,
                'up_ppm' => $request->Up,
                'dow_ppm' => $request->Down,
                'devise_id' => $devise->id
            ]);
        }


        return view("Devise::settings", ['devises' => $devise]);
    }

    public function export_pdf()
    {
        $devises = Devise::all();
        // Fetch all customers from database
        foreach ($devises as $devise) {
            $data = ShowDevice::where('MAC', $devise->id_mac)->limit(100)->get();
        }

        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('Devise::search', ['data' => $data]);
        // If you want to store the generated pdf to the server then you can use the store function
        // $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('History.pdf');

    }

    public function showchart()
    {

        if (!Auth::user()) {
            return redirect(route('log'));
        }
        return view("Devise::chart");

    }
}
