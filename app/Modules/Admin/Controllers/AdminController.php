<?php

namespace App\Modules\Admin\Controllers;

use App\Modules\Admin\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use UxWeb\SweetAlert\SweetAlert;


class AdminController extends Controller
{
    public function showlogin()
    {
        return view('Admin::login');
    }

    public function showUserDashboard()
    {
        if (!Auth::user()) {
            return redirect(route('showlogin'));
        }

        $user = User::get();
        return view('User::user');
    }


    public function handleAdminLogin()
    {
        $user = User::all();
        request()->validate(
            [
                'email' => ['required', 'email'],
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
                return redirect(route('showAdmin'));
            }
            return redirect(route('showDashboard'));
        }
    }
}

?>
