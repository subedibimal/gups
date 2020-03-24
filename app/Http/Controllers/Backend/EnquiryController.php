<?php

namespace App\Http\Controllers\Backend;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries = Enquiry::all();
        return view('backend.enquiry.index', compact('enquiries'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquiry = Enquiry::find($id);
        return view('backend.enquiry.show', compact('enquiry'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::find($id);
        $enquiry->delete();
        toastr()->error('Enquiry has been deleted successfully');
        return redirect()->back();
    }
}
