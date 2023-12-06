<?php

namespace App\Http\Controllers\Menu;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DonationController extends Controller {
    public function DonationPage() {
        $donationContent = Donation::find(1);
        return view('admin.home.donation_page', compact('donationContent'));
    }

    public function StoreDonation(Request $request) {

        $donate_id = $request->id;

        Donation::findOrFail($donate_id)->update([
            'first_title' => $request->first_title,
            'first_desc' => $request->first_desc,
            'header' => $request->header,
            'sec_title' => $request->sec_title,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Page updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
