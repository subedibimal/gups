<?php

namespace App\Http\Controllers\Backend;

use App\Models\WhatWeOffer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WhatWeOfferController extends Controller
{
    public function index()
    {
        $whatWeOffer = WhatWeOffer::where('status', 1)->get();
        return view('backend.WhatWeOffer.index', compact('whatWeOffer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.WhatWeOffer.create');
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
        WhatWeOffer::create($request->all());
        toastr()->success('What We Offer has been added successfully');
        return redirect()->route('whatWeOffer.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whatWeOffer = WhatWeOffer::find($id);
        return view('backend.WhatWeOffer.edit', compact('whatWeOffer'));
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
        $whatWeOffer = WhatWeOffer::find($id);
        $whatWeOffer->update($request->all());
        toastr()->info('What We Offer has been updated successfully');
        return redirect()->route('whatWeOffer.index');
    }

    public function show($id)
    {
    }

    public function destroy($id)
    {
        $whatWeOffer = WhatWeOffer::find($id);
        $whatWeOffer->delete();
        toastr()->error('What We Offer has been removed successfully');
        return redirect()->back();
    }

    public function pending()
    {
        $whatWeOffer = WhatWeOffer::where('status', 0)->get();
        return view('backend.WhatWeOffer.trash', compact('whatWeOffer'));
    }

    public function publish($id)
    {
        $whatWeOffer = WhatWeOffer::where('id', $id)->where('status', 0)->first();
        $whatWeOffer->status = 1;
        $whatWeOffer->save();
        toastr()->success('What We Offer has been published successfully');
        return redirect()->back();
    }

    public function trash($id)
    {
        $whatWeOffer = WhatWeOffer::where('id', $id)->where('status', 1)->first();
        $whatWeOffer->status = 0;
        $whatWeOffer->save();
        toastr()->error('What We Offer has been trashed successfully');
        return redirect()->back();
    }
}
