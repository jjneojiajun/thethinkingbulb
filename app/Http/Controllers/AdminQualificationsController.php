<?php

namespace App\Http\Controllers;

use App\Qualification;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminQualificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $qualifications = Qualification::all();

        return view('admin.qualifications.index', compact('qualifications'));

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

        Qualification::create($request->all());

        return redirect('/admin/qualifications');
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


        $qualifications = Qualification::findOrFail($id);

        return view('admin.qualifications.edit', compact('qualifications'));

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

        $qualifications = Qualification::findOrFail($id);

        $qualifications->update($request->all());

        return redirect('/admin/qualifications');
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

        Qualification::findOrfFail($id)->delete();

        return redirect('/admin/qualifications');

    }
}
