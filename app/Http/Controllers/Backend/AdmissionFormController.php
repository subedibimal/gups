<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdmissionForm;
use Illuminate\Support\Facades\Request;

class AdmissionFormController extends Controller
{
    public function index()
    {
        $admissions = AdmissionForm::where('status', 1)->get();
        return view('backend.admissionform.index', compact('admissions'));
    }


    public function show($id)
    {
        $admission = AdmissionForm::where('status', 1)->first();
        return view('backend.admissionform.show', compact('admission'));
    }

    public function destroy($id)
    {
        $admission = AdmissionForm::where('status', 1)->where('id', $id)->first();
        $admission->status = 0;
        $admission->save();
        toastr()->error('Form Information has been trashed successfully');
        return redirect()->back();
    }
}
