<?php

namespace App\Modules\Site\Controllers;

use App\Http\Requests\SiteCreateFormRequest;
use App\Http\Requests\SiteUpdateFormRequest;
use App\Modules\Devise\Models\Devise;
use App\Modules\Site\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SiteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showSite()
    {
        if (Auth::user()) {
            $user = Auth::user();
            return view("Site::site",['user'=>$user]);
        }
        return redirect(route('log'));
    }

    public function showlistsite()
    {
        if (Auth::user()) {

            $sites = Site::all();
            $user = Auth::user();


            return view("Site::listsite", ['sites' => $sites,'user'=>$user]);
        }
        return redirect(route('log'));
    }

    public function showeditsite($id)
    {
        if (Auth::user()) {

            $sites = Site::find($id);
            $user = Auth::user();

            return view("Site::editsite", ['sites' => $sites,'user'=>$user]);
        }
        return redirect(route('log'));
    }

    public function handleEditSite($id, SiteUpdateFormRequest $request)
    {
        $sites = Site::find($id);

        $sites->update([
            'name' => $request->nom,
            'localisation' => $request->localisation,
        ]);
        return redirect(route('showlistsite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param SiteCreateFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create(SiteCreateFormRequest $request)
    {
        $site = Site::create([
            'name' => $request->nom,
            'localisation' => $request->localisation,

        ]);
        return redirect(route('showlistsite'));
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */


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
    public function deletesite($id)
    {
        $site = Site::find($id);
        $site->delete();
        return redirect()->back();
    }
    public function showListSiteDevise(Request $request, $id)
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $devise = Devise::where('site_id',$id)->get();

        return view("Devise::listdevise2",['devises'=>$devise]);

    }
}
