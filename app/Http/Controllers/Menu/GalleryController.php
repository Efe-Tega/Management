<?php

namespace App\Http\Controllers\Menu;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;


class GalleryController extends Controller {
    public function GalleryPage() {
        return view('admin.home.gallery_page');
    }

    public function StoreGallery(Request $request) {

        $image = $request->file('image_gallery');

        foreach($image as $image_gallery) {
            // Generate new Image Name
            $name_gen = hexdec(uniqid()).'.'.$image_gallery->getClientOriginalExtension();

            // Resize image using image intervention package
            Image::make($image_gallery)->resize(260, 220)->save('upload/gallery/'.$name_gen);
            $save_url = 'upload/gallery/'.$name_gen;

            Gallery::insert([
                'image_gallery' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Gallery Image Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.image')->with($notification);

    }

    public function AllImage() {
        $galleryImage = Gallery::all();
        return view('admin.home.all_image', compact('galleryImage'));
    }

    public function EditGalleryImage($id) {
        $gallery = Gallery::findOrFail($id);
        return view('admin.home.edit_images', compact('gallery'));
    }

    public function UpdateGalleryImage(Request $request) {
        $gallery_id = $request->id;

        if($request->file('image_gallery')) {
            $image = $request->file('image_gallery');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(260, 220)->save('upload/gallery/'.$name_gen);
            $save_url = 'upload/gallery/'.$name_gen;

            Gallery::findOrFail($gallery_id)->update([
                'image_gallery' => $save_url
            ]);

            $notification = array(
                'message' => 'Gallery Image Updated successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.image')->with($notification);

        }
    }

    public function DeleteGalleryImage($id) {

        $galleryImg = Gallery::findOrFail($id);
        $img = $galleryImg->image_gallery;
        unlink($img);

        Gallery::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
