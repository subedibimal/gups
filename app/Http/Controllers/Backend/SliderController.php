<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.slider.index');
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
        if ($request->hasFile('first_slider_image')) {
            $path = $request->first_slider_image->store('public/images');
            $data = ['name' => 'first_slider_image', 'value' => $path];
            if (Slider::where('name', 'first_slider_image')->exists()) {
                Slider::where('name', '=', 'first_slider_image')->update($data);
            } else {


                Slider::create($data);
            }
        }
        if ($request->hasFile('second_slider_image')) {
            $path = $request->second_slider_image->store('public/images');
            $data = ['name' => 'second_slider_image', 'value' => $path];
            if (Slider::where('name', 'second_slider_image')->exists()) {
                Slider::where('name', '=', 'second_slider_image')->update($data);
            } else {


                Slider::create($data);
            }
        }
        if ($request->hasFile('third_slider_image')) {
            $path = $request->third_slider_image->store('public/images');
            $data = ['name' => 'third_slider_image', 'value' => $path];
            if (Slider::where('name', 'third_slider_image')->exists()) {
                Slider::where('name', '=', 'third_slider_image')->update($data);
            } else {


                Slider::create($data);
            }
        }
        foreach ($_POST as $key => $value) {
            if ($key == "_token") {
                continue;
            }

            $data = array();
            $data['value'] = $value;
            $data['updated_at'] = Carbon::now();
            if (Slider::where('name', $key)->exists()) {
                Slider::where('name', '=', $key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();
                Slider::insert($data);
            }
        }
        toastr()->success('Home Page Slider has been updated successfully');
        return redirect()->route('slider.index');
    }
}
