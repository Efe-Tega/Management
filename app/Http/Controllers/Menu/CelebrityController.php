<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Celebrity;
use Illuminate\Http\Request;

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
}
