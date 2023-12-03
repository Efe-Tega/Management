<?php

namespace App\Http\Controllers\Menu;

use App\Models\Celebrity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class CelebrityController extends Controller
{
    //Create Celebrity 
    public function CreateCelebrity()
    {
        return view('admin.menu.create_celeb');
    }

    public function StoreCelebrity(Request $request)
    {

        $image = $request->file('image');

        // Generate New Image Name
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/celebrity/'), $name_gen);

        Celebrity::insert([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'occupation' => $request->occupation,
            'known_for' => $request->known_for,
            'booking_fee' => $request->booking_fee,
            'born' => $request->born,
            'years_active' => $request->years_active,
            'image' => $name_gen,
            'birthday_fee' => $request->birthday_fee,
            'acceptance_fee' => $request->acceptance_fee,
            'music_fee' => $request->music_fee,
            'endorsement' => $request->endorsement,
            'wedding_fee' => $request->wedding_fee,
            'virtual_event' => $request->virtual_event
        ]);

        $notification = array(
            'message' => 'Celebrity Created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function AllCelebrity()
    {
        $celebrities = Celebrity::latest()->get();

        return view('admin.menu.all_celebrity', compact('celebrities'));
    }

    public function ProfilePage()
    {
        $profile_id = Auth::user()->id;
        $profileData = User::find($profile_id);

        return view('admin.edit_profile', compact('profileData'));
    }

    public function StoreProfile(Request $request)
    {
        $profile_id = Auth::user()->id;
        $profileData = User::findOrFail($profile_id);

        $profileData->number = $request->number;
        $profileData->address = $request->address;
        $profileData->site_email = $request->site_email;
        $profileData->short_name = $request->short_name;
        $profileData->save();

        $notification = array(
            'message' => 'Profile Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function EditCelebrity($id)
    {
        $celebData = Celebrity::findOrFail($id);
        return view('admin.menu.edit_celebrity', compact('celebData'));
    }

    public function UpdateCeleb(Request $request)
    {
        $celeb_id = $request->id;
        $imageData = Celebrity::find($celeb_id);

        if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('upload/celebrity/' . $imageData->image));
            $filename = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/celebrity'), $filename);
        }

        Celebrity::findOrFail($celeb_id)->update([
            'name' => $request->name,
            'short_description' => $request->short_description,
            'occupation' => $request->occupation,
            'known_for' => $request->known_for,
            'booking_fee' => $request->booking_fee,
            'born' => $request->born,
            'years_active' => $request->years_active,
            'image' => $filename,
            'birthday_fee' => $request->birthday_fee,
            'acceptance_fee' => $request->acceptance_fee,
            'music_fee' => $request->music_fee,
            'endorsement' => $request->endorsement,
            'wedding_fee' => $request->wedding_fee,
            'virtual_event' => $request->virtual_event
        ]);

        $notification = array(
            'message' => 'Celebrity Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.celeb')->with($notification);

    }

    public function DeleteCeleb($id)
    {
        $celeb = Celebrity::findOrFail($id);
        $img = 'upload/celebrity/' . $celeb->image;
        unlink($img);

        Celebrity::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Celebrity Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
