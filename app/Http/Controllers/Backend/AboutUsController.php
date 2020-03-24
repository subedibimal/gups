<?php

namespace App\Http\Controllers\Backend;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    
    public function getCreate()
    {
        $aboutus = AboutUs::first();
        return view('backend.aboutus.create', compact('aboutus'));
    }

    public function postCreate(Request $request)
    {
        AboutUs::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );
        toastr()->success('About Us has been updated successfully');
        return redirect()->back();
    }
}
