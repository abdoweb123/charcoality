<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BasicController;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubscriptionController extends BasicController
{
    public function index(Request $request)
    {
        
        $Subscriptions = Subscription::whereNotNull('email')->latest()->get();
        return view('Admin.subscription',compact('Subscriptions'));
    }
}
