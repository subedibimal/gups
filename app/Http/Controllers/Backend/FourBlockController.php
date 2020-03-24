<?php

namespace App\Http\Controllers\Backend;

use App\Models\FourBlock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FourBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fourblocks = FourBlock::all();
        return view('backend.fourblocks.index', compact('fourblocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fourblocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('icon')) {
            $path = $request->icon->store('public/images');
            $input['icon'] = $path;
        }
        FourBlock::create($input);
        toastr()->success('Blocks has been added successfully');
        return redirect()->route('fourblock.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $block = FourBlock::find($id);
        return view('backend.fourblocks.edit', compact('block'));
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
        $input = $request->all();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('icon')) {
            $path = $request->icon->store('public/images');
            $input['icon'] = $path;
        }
        $block = FourBlock::find($id);
        $block->fill($input)->save();
        toastr()->success('Block has been updated successfully');
        return redirect()->route('fourblock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $block = FourBlock::find($id);
        $block->delete();
        toastr()->error('Block has been deleted successfully');
        return redirect()->back();
    }
}
