<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    use ValidatesRequests, DispatchesJobs, AuthorizesRequests;

    public function index()
    {
        $albums = Gallery::with('gallery_images:gallery_id,image')->select('id', 'title')->where('status', 1)->get();
        $view = '';
        $link = '';
        return view('backend.gallery.index', compact('albums', 'view', 'link'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $gallery = Gallery::create($request->all());
        foreach ($request->image as $image) {
            $filename = $image->store('public');
            GalleryImage::create([
                'gallery_id' => $gallery->id,
                'image' => $filename
            ]);
        }

        toastr()->success("New Album has been Added Successfully");
        return redirect('admin/gallery/');
    }

    /**
     * Show the specified resource.
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $album = Gallery::with('gallery_images:id,gallery_id,image')->where('id', $id)
            ->select('id', 'title')
            ->where('status', 1)->first();
        $view = '';
        $link = '';
        return view('backend.gallery.show', compact('album', 'view', 'link'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('gallery::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        foreach ($request->image as $image) {
            $filename = $image->store('public');
            GalleryImage::create([
                'gallery_id' => $id,
                'image' => $filename
            ]);
        }
        toastr()->info("Album has been Updated Successfully");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        foreach ($gallery->gallery_images as $image) {
            if (Storage::disk('local')->exists($image->image)) {
                Storage::delete($image->image);
            }
        }
        $gallery->delete();
        toastr()->error("Album has been Deleted Successfully");
        return redirect(url('admin/gallery'));
    }

    /*getting section information*/
    public function removephoto(Request $request)
    {
        $image_id = $request->image_id;
        $image = GalleryImage::select('image')->find($image_id);

        if (Storage::disk('local')->exists($image->image)) {
            Storage::delete($image->image);
        }
        $im=GalleryImage::where('id',$image_id)->first();
        $im->delete();

    }
}
