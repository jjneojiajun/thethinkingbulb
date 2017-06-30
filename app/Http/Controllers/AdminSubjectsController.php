<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

use App\Http\Requests;

class AdminSubjectsController extends Controller
{
    //

    public function index()
    {
        //

        $subjects = Subject::all();

        return view('admin.subjects.index', compact('subjects'));


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

        Subject::create($request->all());

        return redirect('admin/subjects');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

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

        $subjects = Subject::findOrFail($id);

        return view('admin.subjects.edit', compact('subjects'));

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

        $subject = Subject::findOrFail($id);

        $subject->update($request->all());

        return redirect('/admin/subjects');

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

        Subject::findOrFail($id)->delete();

        return redirect('/admin/subjects');



    }



}
