<?php

namespace App\Http\Controllers\Backend;

use App\Models\Information;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data = [
            'admission' => Information::where('name', 'admission')->first(),
            'facility' => Information::where('name', 'facility')->first(),
            'chairman_message' => Information::where('name', 'chairman_message')->first(),
            'chairman_image' => Information::where('name', 'chairman_image')->first(),
            'scholarship' => Information::where('name', 'scholarship')->first(),
            'chairman_name' => Information::where('name', 'chairman_name')->first(),
            'md_name' => Information::where('name', 'md_name')->first(),
            'md_message' => Information::where('name', 'md_message')->first(),
            'md_image' => Information::where('name', 'md_image')->first(),
            'programco_name' => Information::where('name', 'programco_name')->first(),
            'programco_message' => Information::where('name', 'programco_message')->first(),
            'programco_image' => Information::where('name', 'programco_image')->first(),

        ];
      

        return view('backend.information.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->hasFile('chairman_image')) {
            $path = $request->chairman_image->store('public/images');
            $data = ['name' => 'chairman_image', 'value' => $path];
            if (Information::where('name', 'chairman_image')->exists()) {
                Information::where('name', '=', 'chairman_image')->update($data);
            } else {


                Information::create($data);
            }
        }
        if ($request->hasFile('md_image')) {
            $path = $request->md_image->store('public/images');
            $data = ['name' => 'md_image', 'value' => $path];
            if (Information::where('name', 'md_image')->exists()) {
                Information::where('name', '=', 'md_image')->update($data);
            } else {


                Information::create($data);
            }
        }
        if ($request->hasFile('programco_image')) {
            $path = $request->programco_image->store('public/images');
            $data = ['name' => 'programco_image', 'value' => $path];
            if (Information::where('name', 'programco_image')->exists()) {
                Information::where('name', '=', 'programco_image')->update($data);
            } else {


                Information::create($data);
            }
        }
        foreach ($_POST as $key => $value) {
            if ($key == "_token") {
                continue;
            }

            $data = array();
            $data['value'] = $value;
            $data['updated_at'] = Carbon::now();
            if (Information::where('name', $key)->exists()) {
                Information::where('name', '=', $key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();
                Information::insert($data);
            }
        }
        toastr()->success('Information has been updated successfully');
        return redirect('/admin/information');
    }
}
