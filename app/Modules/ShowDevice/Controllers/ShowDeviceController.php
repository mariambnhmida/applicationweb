<?php

namespace App\Modules\ShowDevice\Controllers;

use App\Modules\Devise\Models\Devise;
use App\Modules\ShowDevice\Models\ShowDevice;
use App\sensor_test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShowDeviceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("ShowDevice::index");
    }
    public function showdevice1($id){
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devis = Devise::where('id', $id)->orderBy('created_at', 'desc')->get();
//        dd($devis);
//        $show_devices=ShowDevice::->orderBy('created_at', 'desc')->get();
                foreach ($devis as  $device){

        $show_devices=ShowDevice::where("MAC",$device->id_mac)->get();
        $show_devices_one=ShowDevice::where("MAC",$device->id_mac)->orderBy('Time_S', 'desc')->get();
//        dd($show_devices);
//            $devises = ShowDevice::where('id',$show_devices->id )->get();

//            dd($devises);
        }
        $user = Auth::user();
        return view("ShowDevice::list",['show_devices'=>$show_devices, 'devis' =>$devis, 'show_devices_one' =>$show_devices_one,'user'=>$user]);

    }

    /**
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
