<?php

namespace Modules\Media\Http\Controllers;

use App\Functions\Upload;
use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Modules\Media\Entities\Media;
use Modules\Media\Entities\Gallery as Model;

class GalleryController extends BasicController
{
    public function index($media_id, Request $request)
    {
        $Media = Media::where('id', $media_id)->with('Gallery')->firstorfail();
        $Models = $Media->Gallery;

        return view('media::gallery.index', compact('Media', 'Models'));
    }

    public function create($id)
    {
        $Media = Media::find($id);
        return view('media::gallery.create', compact('Media'));
    }

    public function store($media_id, Request $request)
    {
        $Media = Media::where('id', $media_id)->firstorfail();
        $Model = Model::create($request->all());
        if ($request->hasFile('image')) {
            $Model->image = Upload::UploadFile($request->image, 'media');
            $Model->save();
        }
        alert()->success(__('trans.addedSuccessfully'));

        return redirect()->back();
    }

    public function show($media_id, $id)
    {
        $Media = Media::where('id', $media_id)->firstorfail();
        $Model = Model::where('id', $id)->firstorfail();

        return view('media::gallery.show', compact('Media', 'Model'));
    }

    public function edit($media_id, $id)
    {
        $Media = Media::where('id', $media_id)->firstorfail();
        $Model = Model::where('id', $id)->firstorfail();

        return view('media::gallery.edit', compact('Media', 'Model'));
    }

    public function update($media_id, Request $request, $id)
    {
        $Media = Media::where('id', $media_id)->firstorfail();
        $Model = Model::where('id', $id)->firstorfail();
        $Model->update($request->all());
        if ($request->hasFile('image')) {
            $Model->image = Upload::UploadFile($request->image, 'media');
            $Model->save();
        }
        alert()->success(__('trans.updatedSuccessfully'));

        return redirect()->back();
    }

    public function destroy($media_id, $id)
    {
        $Media = Media::where('id', $media_id)->firstorfail();
        $Model = Model::where('id', $id)->delete();
        alert()->success(__('trans.DeletedSuccessfully'));

        return redirect()->back();
    }
}
