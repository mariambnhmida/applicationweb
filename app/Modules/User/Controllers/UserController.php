<?php

namespace App\Modules\User\Controllers;

use App\Http\Requests\UserCreateFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Modules\User\Models\Contact;
use App\Modules\User\Models\User;
use App\Modules\Site\Models\Site;
use App\Modules\ShowDevice\Models\ShowDevice;
use App\Modules\Devise\Models\Devise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function showlistusersite(Request $request, $id)
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $site = site::where('id', $id)->get();

        return view("Site::listsite", ['sites' => $site]);
    }

    public function showdashboard()
    {
        if (!Auth::user()) {
            return redirect(route('showlogin'));
        }
        $sites = Site::all();
        $show_devices = ShowDevice::all();
        $devises = Devise::all();

        return view('User::dashboard', ['sites' => $sites, 'devises' => $devises, 'show_devices' => $show_devices]);
//        }
//        return redirect(route('showlogin'));

    }

    public function showlist()
    {
        if (!Auth::user()) {
            return redirect(route('showlogin'));
        }

        return view("User::list");
    }

    public function createcontact(Request $request)
    {
        if (!Auth::user()) {
            return redirect(route('showlogin'));
        }
        $contact = Contact::create([
            'id_user' => Auth::user()->id,
            'subject' => $request->subject,
            'text' => $request->text,
        ]);
        return redirect(route('showcontact'));

    }

    public function showcontact()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $user = Auth::user();
        return view('User::contact', ['user' => $user]);
    }
    public function showinbox()
    {
        if (Auth::user()) {
            $sites = Site::all();
            $users = User::all();
            $contacts = Contact::all();
            $user = Auth::user();

            return view("User::inbox",['sites'=>$sites,'users'=>$users,'contacts'=>$contacts,'user'=>$user]);
        }

        return redirect(route('log'));

    }


    public function log()
    {
        return view("User::log");
    }

    public function index2()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $sites = Site::all();
        $show_devices = ShowDevice::all();
        $devises = Devise::all();
        $user = Auth::user();
        $user = User::find($user->id);

        //            dd($devises);
        return view('User::index2', [
            'sites' => $sites,
            'devises' => $devises,
            'show_devices' => $show_devices,
            'user' => $user
        ]);
    }

    public function handleLogout()
    {
        Auth::logout();
        return redirect(route('log'));
    }

    public function showlogin()
    {
        return view('User::login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function showUserDashboard()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }

        $user = User::get();
        return view('User::user');

    }

    public function handleAdminLogin()
    {
        $user = User::all();

        request()->validate(
            ['email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        $user = auth()->attempt([

            'email' => request('email'),
            'password' => request('password'),
        ]);
        if (Auth::user()) {
            $user = Auth::user();
            Auth::login($user);
            if ($user->status == 0) {
                Auth::logout();
                SweetAlert::error('Oops\', \'Vérifiez votre status !')->persistent('Fermer');
                return redirect(route('showlogin'));
            }
            return redirect(route('index2'));
        }
    }

    public function index()
    {
        return view("User::index");
    }

    public function showlistUser()
    {
        if (Auth::user()) {

            $users = User::all();
            $user = Auth::user();

            return view("User::listuser", ['users' => $users, 'user' => $user, 'currentUser' => $user]);
        }
        return redirect(route('log'));
    }

    public function showUser()
    {
        if (!Auth::user()) {
            return redirect(route('log'));
        }
        $users = User::all();
        $sites = Site::all();
        $user = Auth::user();

        if (Auth::user()) {
            return view("User::user", ['users' => $users, 'sites' => $sites, 'user' => $user]);
        }
    }

    public function handelCreateUser(UserCreateFormRequest $request)
    {
        if (!Auth::user()) {
            return redirect(route('showlogin'));
        }

        User::create([

            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'pays' => $request->pays,
            'tel' => $request->tel,
            'status' => 1,
            'role' => 1,
            'site_id' => $request->site_id,

        ]);
        return redirect(route('showlistuser'))->with('info', 'User created successfully.');
    }

    public function showEditUser($id)
    {
        if (Auth::user()) {

            $users = User::find($id);
            $sites = Site::all();
            $user = Auth::user();
            return view("User::edituser", ['users' => $users, 'sites' => $sites, 'user' => $user]);
        }
        return redirect(route('log'));
    }

    public function handleedituser($id, UserUpdateFormRequest $request)
    {
        $user = User::find($id);

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->update([
            'email' => $request->email,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'pays' => $request->pays,
            'tel' => $request->tel,
            'site_id' => $request->site_id,
        ]);
        $user->save();
        return redirect(route('showlistuser'));
    }

    public function handleDeleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
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

}
