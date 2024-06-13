<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BasicController;
use App\Http\Requests\User\RegisterRequest;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends BasicController
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        if (! tenant()) {
            return view('auth.register');
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function register(RegisterRequest $request)
    {
        session()->put('data', $request->validated());
        $domain = strtolower(str_replace(' ', '', $request->domain_name));
        $tenant = Tenant::create(['id' => $domain]);
        $tenant->domains()->create(['domain' => $domain.'.'.env('APP_DOMAIN')]);

        return redirect()->route('admin.login')->domain($domain.'.'.env('APP_DOMAIN'));
    }
}
