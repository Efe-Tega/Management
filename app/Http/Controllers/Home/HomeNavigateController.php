<?php

namespace App\Http\Controllers\Home;

use App\Models\HomeContent;
use App\Models\User;
use App\Models\Celebrity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeNavigateController extends Controller
{
    public function Home()
    {
        $celebrity = Celebrity::latest()->get();
        $homeContent = HomeContent::find(1);

        return view('frontend.index', compact('celebrity', 'homeContent'));
    }

    public function About()
    {
        $homeContent = HomeContent::find(1);
        return view('frontend.about', compact('homeContent'));
    }

    public function CelebrityDetails($id)
    {
        $celebrity = Celebrity::findOrFail($id);
        return view('frontend.celebrity_details', compact('celebrity'));
    }

    public function CelebrityList()
    {
        $allCelebrity = Celebrity::latest()->get();
        return view('frontend.celebrity_list', compact('allCelebrity'));
    }
}
