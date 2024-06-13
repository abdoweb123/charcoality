<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BasicController
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(Request $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }
        if ($request->country_code && $request->phone_code) {
            auth()->user()->update($request->only('country_code', 'phone_code'));
        }
        auth()->user()->update($request->only('name', 'email', 'phone'));

        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }
}
