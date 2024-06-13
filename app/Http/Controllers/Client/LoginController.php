<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BasicController;
use App\Http\Requests\Client\LoginRequest;

class LoginController extends BasicController
{
    public function index()
    {
        if (setting('login') == 0) {
            abort(404);
        }

        return view('Client.login');
    }

    public function store(LoginRequest $request)
    {
        if (auth('client')->attempt($request->only('phone', 'password'))) {
            alert()->success(__('trans.loginSuccessfully'));

            return redirect()->route('client.profile.index');

        }
        alert()->error(__('trans.emailPasswordIncorrect'));

        return redirect()->back();
    }

    public function logout()
    {
        if (auth('client')->check()) {
            auth('client')->logout();
        }
        alert()->success(__('trans.logoutSuccessfully'));

        return redirect('/');
    }
}
