<?php

namespace App\Http\Controllers\Backend;

use App\Models\FooterDescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterDescriptionController extends Controller
{

    public function getCreate()
    {
        $footer_description = FooterDescription::first();
        return view('backend.footer_description.create', compact('footer_description'));
    }

    public function postCreate(Request $request)
    {
        FooterDescription::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );
        toastr()->success('Footer Description has been updated successfully');
        return redirect()->back();
    }
}
