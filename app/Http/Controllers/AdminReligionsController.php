<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Religion;

use App\Http\Requests;

class AdminReligionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $religions = Religion::all();

        return view('admin.religions.index', compact('religions'));

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

        Religion::create($request->all());

        return redirect('/admin/religions');
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

        $religions = Religion::findOrFail($id);

        return view('admin.religions.edit', compact('religions'));

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

        $religions = Religion::findOrFail($id);

        $religions->update($request->all());

        return redirect('/admin/religions');

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

        Religion::findOrFail($id)->delete();

        return redirect('/admin/religions');
    }
}
