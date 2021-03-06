<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

use App\Http\Requests;

class AdminLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       $locations = Location::all();

       return view('admin.locations.index', compact('locations'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Location::create($request->all());

        return redirect('/admin/locations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $locations = Location::findOrFail($id);

        return view('admin.locations.edit', compact('locations'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $location = Location::findOrFail($id);

        $location->update($request->all());

        return redirect('/admin/locations');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Location::findOrFail($id)->delete();

        return redirect('/admin/locations');
    }
}
