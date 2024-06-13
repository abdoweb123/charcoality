<?php

namespace Modules\Country\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Country\Entities\Country;

class CountryController extends BasicController
{
    public function index(Request $request)
    {
        $Countries = Country::get();

        return view('country::countries.index', compact('Countries'));
    }

    public function create()
    {
        $Countries = Country::get();

        return view('country::countries.create', compact('Countries'));
    }

    public function store(Request $request)
    {
        $Country = Country::create($request->all());
        if ($request->hasFile('image')) {
            $Country->image = Upload::UploadFile($request->image, 'Countries');
            $Country->save();
        }
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($id)
    {
        $Country = Country::with('Regions')->where('id', $id)->firstorfail();
        if (isset(request()->delivery_cost)) {
            $Country->Regions()->update([
                'delivery_cost' => request()->delivery_cost,
            ]);
        }
        if (isset(request()->cod)) {
            $Country->Regions()->update([
                'cod' => request()->cod,
            ]);
        }

        return view('country::countries.show', compact('Country'));
    }

    public function edit($id)
    {
        $Countries = Country::get();
        $Country = Country::where('id', $id)->firstorfail();

        return view('country::countries.edit', compact('Country', 'Countries'));
    }

    public function update(Request $request, $id)
    {
        $Country = Country::where('id', $id)->firstorfail();
        $Country->update($request->all());
        if ($request->hasFile('image')) {
            $Country->image = Upload::UploadFile($request->image, 'Countries');
            $Country->save();
        }
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Country = Country::where('id', $id)->delete();
        alert()->success(__('trans.DeletedSuccessfully'));

        return redirect()->back();
    }
}
