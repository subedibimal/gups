<?php

namespace App\Http\Controllers\Backend;

use App\Models\ApplyForAdmission;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => ApplyForAdmission::where('name', 'title')->first(),
            'subtitle' => ApplyForAdmission::where('name', 'subtitle')->first(),
            'description' => ApplyForAdmission::where('name', 'description')->first(),
            'google_form_url' => ApplyForAdmission::where('name', 'google_form_url')->first()
        ];
        return view('backend.apply_admission.index', compact('data'));
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
        foreach ($_POST as $key => $value) {
            if ($key == "_token") {
                continue;
            }

            $data = array();
            $data['value'] = $value;
            $data['updated_at'] = Carbon::now();
            if (ApplyForAdmission::where('name', $key)->exists()) {
                ApplyForAdmission::where('name', '=', $key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();
                ApplyForAdmission::insert($data);
            }
        }
        toastr()->success('Apply For Admission Block has been updated successfully');
        return redirect('/admin/apply_admission');
    }


}
