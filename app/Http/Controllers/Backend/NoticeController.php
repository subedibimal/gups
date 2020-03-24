<?php

namespace App\Http\Controllers\Backend;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Matcher\Not;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::where('status', 1)->get();
        return view('backend.notice.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
        ]);
        Notice::create($request->all());
        toastr()->success('Notice has been added successfully');
        return redirect()->route('notice.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('backend.notice.edit', compact('notice'));
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
        ]);
        $notice = Notice::find($id);
        $notice->update($request->all());
        toastr()->info('Notice has been updated successfully');
        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        toastr()->error('Notice has been removed successfully');
        return redirect()->back();
    }

    public function pending()
    {
        $notices = Notice::where('status', 0)->get();
        return view('backend.notice.trash', compact('notices'));
    }

    public function publish($id)
    {
        $notice = Notice::where('id', $id)->where('status', 0)->first();
        $notice->status = 1;
        $notice->save();
        toastr()->success('Notice has been published successfully');
        return redirect()->back();
    }

    public function trash($id)
    {
        $notice = Notice::where('id', $id)->where('status', 1)->first();
        $notice->status = 0;
        $notice->save();
        toastr()->error('Notice has been trashed successfully');
        return redirect()->back();
    }
}
