<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Matcher\Not;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'posted_by' => 'required',
        ]);
        $input=$request->all();
        if ($request->hasFile('image')) {
            $path = $request->image->store('public/images');
            $input['image'] = $path;
        }
        Blog::create($input);
        toastr()->success('Blog has been added successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',

            'date' => 'required',
            'posted_by' => 'required',
        ]);
        $blog = Blog::find($id);
        $input=$request->all();
        if ($request->hasFile('image')) {
            $path = $request->image->store('public/images');
            $input['image'] = $path;
        }
        $blog->update($input);
        toastr()->info('Blog has been updated successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        toastr()->error('Blog has been removed successfully');
        return redirect()->back();
    }

    public function pending()
    {
        $blogs = Blog::where('status', 0)->get();
        return view('backend.blog.trash', compact('blogs'));
    }

    public function publish($id)
    {
        $blog = Blog::where('id', $id)->where('status', 0)->first();
        $blog->status = 1;
        $blog->save();
        toastr()->success('Blog has been published successfully');
        return redirect()->back();
    }

    public function trash($id)
    {
        $blog = Blog::where('id', $id)->where('status', 1)->first();
        $blog->status = 0;
        $blog->save();
        toastr()->error('Blog has been trashed successfully');
        return redirect()->back();
    }
}
