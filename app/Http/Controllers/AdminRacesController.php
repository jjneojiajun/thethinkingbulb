<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;

use App\Http\Requests;

class AdminRacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $races = Race::all();

        return view('admin.races.index', compact('races'));

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

        Race::create($request->all());

        return redirect('/admin/races');
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

        $races = Race::findOrFail($id);

        return view('admin.races.edit', compact('races'));

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

        $races = Race::findOrFail($id);

        $races->update($request->all());

        return redirect('/admin/races');

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

        Race::findOrFail($id)->delete();

        return redirect('/admin/races');
    }
}
