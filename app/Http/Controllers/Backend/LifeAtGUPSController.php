<?php

namespace App\Http\Controllers\Backend;

use App\Models\LifeAtGUPS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LifeAtGUPSController extends Controller
{
    
   
        public function getCreate()
    {
        $life_at_gups = LifeAtGUPS::first();
        return view('backend.life_at_gups.create', compact('life_at_gups'));
    }

    public function postCreate(Request $request)
    {
        LifeAtGUPS::updateOrCreate(
            ['id' => 1],
            ['description' => $request->description]
        );
        toastr()->success('Life At GUPS has been updated successfully');
        return redirect()->back();
    }
    }
