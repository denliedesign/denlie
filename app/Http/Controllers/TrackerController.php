<?php

namespace App\Http\Controllers;

use App\Tracker;
use Illuminate\Http\Request;

class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    protected $trackers;

    public function __construct()
    {
        $this->trackers = Tracker::all();
        \View::share('trackers', $this->trackers);
    }


    public function index()
    {
        $tracker = \App\Tracker::all();
        return view('trackers.index', compact('tracker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Tracker::class);
        $tracker = new Tracker();
        return view('/trackers', compact('tracker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $tracker = Tracker::create($this->validateRequest());
        return redirect('/trackers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function show(Tracker $tracker)
    {
        return view('/trackers', compact('tracker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracker $tracker)
    {
        $this->authorize('update', Tracker::class);
        return view('trackers.edit', compact('tracker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracker $tracker)
    {
        $tracker->update($this->validateRequest());
        return redirect('/trackers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracker  $tracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracker $tracker)
    {
        $tracker->delete();
        return redirect('/trackers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'month' => 'required',
            'year' => 'required',
            'minutes' => 'required',
            'paid' => 'nullable',
        ]);
    }

}
