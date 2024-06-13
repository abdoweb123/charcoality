<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BasicController;
use App\Http\Requests\Client\RegisterRequest;
use App\Models\Client;

class RegisterController extends BasicController
{
    public function index()
    {
        if (setting('register') == 0) {
            abort(404);
        }

        return view('Client.register');
    }

    public function store(RegisterRequest $request)
    {
        $client = Client::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => bcrypt($request->get('password')),
        ]);
        auth('client')->login($client);
        alert()->success(__('trans.profileCompleted'));

        return redirect()->route('client.profile.index');
    }
}
