<?php

namespace App\Http\Controllers\Backend;

use App\Models\NewsAndEvents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsAndEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_and_events = NewsAndEvents::where('status', 1)->get();
        return view('backend.newsandevents.index', compact('news_and_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newsandevents.create');
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
            'title' => 'required|string',
            'description' => 'required|string',
            'location' => 'required',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'no_of_days' => 'required',
            'event' => 'required',

        ]);
        $input = $request->all();
        if ($request->hasFile('featured_image')) {
            $path = $request->featured_image->store('public/images');
            $input['featured_image'] = $path;
        }

        NewsAndEvents::create($input);

        toastr()->success('News And Event has been added successfully');
        return redirect()->route('news_and_events.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_and_event = NewsAndEvents::where('id', $id)->first();
        return view('backend.newsandevents.edit', compact('news_and_event'));
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
            'title' => 'required|string',
            'description' => 'required|string',
            'location' => 'required',
            'date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'no_of_days' => 'required',
            'event' => 'required',

        ]);
        $news_and_event = NewsAndEvents::where('id', $id)->first();
        $input = $request->all();
        if ($request->hasFile('featured_image')) {
            $path = $request->featured_image->store('public/images');
            $input['featured_image'] = $path;
        }

        $news_and_event->update($input);
        toastr()->info('News and Event has been updated successfully');

        return redirect()->route('news_and_events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsAndEvents::where('id', $id)->delete();
        toastr()->error('News and Event has been deleted successfully');
        return redirect()->back();
    }

    public function pending()
    {
        $news_and_events = NewsAndEvents::where('status', 0)->get();
        return view('backend.newsandevents.trash', compact('news_and_events'));
    }

    public function publish($id)
    {
        $news_and_event = NewsAndEvents::where('id', $id)->where('status', 0)->first();
        $news_and_event->status = 1;
        $news_and_event->save();
        toastr()->success('News and Event has been published successfully');
        return redirect()->back();
    }

    public function trash($id)
    {
        $news_and_event = NewsAndEvents::where('id', $id)->where('status', 1)->first();
        $news_and_event->status = 0;
        $news_and_event->save();
        toastr()->error('News and Event has been trashed successfully');
        return redirect()->back();
    }
}
