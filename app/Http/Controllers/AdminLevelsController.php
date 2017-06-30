<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;


use App\Http\Requests;

class AdminLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $levels = Level::all();

        return view('admin.levels.index', compact('levels'));


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

        Level::create($request -> all());

        return redirect('admin/levels');

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

        $levels = Level::findOrFail($id);

        return view('admin.levels.edit', compact('levels'));
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

        $levels = Level::findOrFail($id);

        $levels->update($request->all());

        return redirect('/admin/levels');

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

        Level::findOrFail($id)->delete();

        return redirect('/admin/levels');


    }
}
