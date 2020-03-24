<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('backend.setting.create', compact('setting'));
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
        if ($request->hasFile('logo')) {
            $path = $request->logo->store('public/images');
            $data = ['name' => 'logo', 'value' => $path];
            if (Setting::where('name', 'logo')->exists()) {
                Setting::where('name', '=', 'logo')->update($data);
            } else {
                Setting::create($data);
            }
        }
        foreach ($_POST as $key => $value) {
            if ($key == "_token") {
                continue;
            }
            $data = array();
            $data['value'] = $value;
            $data['updated_at'] = Carbon::now();
            if (Setting::where('name', $key)->exists()) {
                Setting::where('name', '=', $key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();
                Setting::insert($data);
            }
        }
        toastr()->success('Site Setting has been updated successfully');
        return redirect()->route('setting.index');
    }
}
