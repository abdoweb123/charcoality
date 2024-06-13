<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\BasicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Modules\Contact\Entities\Model as Contact;
use Modules\Slider\Entities\Model as Slider;
use Modules\Advertisement\Entities\Model as Advertisement;
use Modules\Service\Entities\Model as Service;
use Modules\Client\Entities\Model as Client;
use Modules\Blog\Entities\Model as Blog;
use Modules\FAQ\Entities\Model as FAQ;
use Modules\Company\Entities\Model as Company;
use Modules\Line\Entities\Model as Line;
use Modules\Product\Entities\Model as Product;
use Modules\Media\Entities\Gallery;
use Modules\Media\Entities\Media;
use Modules\Value\Entities\Model as Value;

class HomeController extends BasicController
{
    public function home()
    {
        $Sliders = Slider::Active()->get();
        $Services = Service::Active()->get();
        $FAQ = FAQ::Active()->get();
        $Media = Media::Active()->withCount(['Gallery'])->with(['Gallery'])->get();
        return view('Client.home', compact('Sliders','Services','FAQ','Media'));
    }
    public function about()
    {
        $Values = Value::Active()->get();
        $Companies = Company::Active()->get();
        $Products = Product::Active()->get();
        $Lines = Line::Active()->get();
        return view('Client.about', compact('Values','Products','Companies','Lines'));
    }

    public function gallery($id = null)
    {
        $Media = Media::Active()->withCount(['Gallery'])->with(['Gallery'])->when($id, function ($q) use ($id) {
            return $q->where('id', $id);
        })->first();
        return view('Client.gallery', compact('Media'));
    }
    public function gallery_details($id)
    {
        $Gallery = Gallery::Active()->when($id, function ($q) use ($id) {
            return $q->where('id', $id);
        })->first();
        
        $Media = Media::Active()->withCount(['Gallery'])->with(['Gallery' => function($q) use ($Gallery) {
            return $q->WhereNot('id', $Gallery->id);
        }])->where('id', $Gallery->media_id)->first();
        
        return view('Client.gallery_details', compact('Gallery','Media'));
    }


    public function blog()
    {
        $Blogs = Blog::Active()->get();
        return view('Client.blog', compact('Blogs'));
    }
    public function blog_details($id)
    {
        $Blogs = Blog::Active()->get();
        $Blog = $Blogs->where('id',$id)->firstorfail();
        $Blogs = $Blogs->whereNotIn('id',[$id]);
        return view('Client.blog_details', compact('Blog','Blogs'));
    }



    public function contact(Request $request)
    {
        Contact::create($request->all());
        alert()->success(__('trans.EmailU'));
        return redirect()->back();
    }
    public function subscribe(Request $request)
    {
        DB::table('subscriptions')->insert(
            ['email' => $request->email]
        );
        alert()->success(__('trans.EmailU'));
        return redirect()->back();
    }
    public function faq(Request $request)
    {
        $FAQ = FAQ::Active()->get();
        return view('Client.faq', compact('FAQ'));
    }
}
