<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BasicController;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends BasicController
{
    public function index()
    {
        return view('Client.forgetPassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);
        $client = Client::where('phone', $request->phone)->update(['password' => Hash::make($request->password)]);

        return redirect()->route('client.login.index')->with('success', 'Your password has been changed!');
    }

    public function resetPage(Request $request)
    {
        $phone = $request->phone;

        $token = $request->token;

        return view('Client.forgetPasswordLink', compact('phone', 'token'));
    }
}
