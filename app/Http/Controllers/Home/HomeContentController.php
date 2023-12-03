<?php

namespace App\Http\Controllers\Home;

use App\Models\HomeContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;


class HomeContentController extends Controller
{
    public function AboutContent()
    {
        return view('admin.home.home_about');
    }

    public function StoreAboutContent(Request $request)
    {
        $id = HomeContent::find(1);

        if ($request->file('about_image')) {
            $file = $request->file('about_image');

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(608, 552)->save('upload/home_content/' . $name_gen);
            $save_url = 'upload/home_content' . $name_gen;

            HomeContent::findOrFail($id)->update([
                'intro' => $request->intro,
                'title' => $request->title,
                'short_description' => $request->short_description,
                'about_image' => $save_url
            ]);

            $notification = array('message' => 'Content Updated with Image Successfully', 'alert-type' => 'success');

            return redirect()->back()->with($notification);


        } else {

            HomeContent::findOrFail($id)->update([
                'intro' => $request->intro,
                'title' => $request->title,
                'short_description' => $request->short_description,

            ]);

            $notification = array('message' => 'Content Updated without Image Successfully', 'alert-type' => 'success');

            return redirect()->back()->with($notification);

        }

    }
}
