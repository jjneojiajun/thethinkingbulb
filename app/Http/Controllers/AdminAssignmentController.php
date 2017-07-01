<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Level;
use App\Subject;
use App\Qualification;
use App\Race;
use App\Religion;
use App\Http\Requests\AssignmentsCreateRequest;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $assignments = Assignment::all();

        return view('admin.assignments.index', compact('assignments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $levels = Level::lists('name', 'id')->all();
        $subjects = Subject::lists('name', 'id')->all();
        $races = Race::lists('name', 'id')->all();
        $qualifications = Qualification::lists('name', 'id')->all();

        return view('admin.assignments.create', compact('levels', 'subjects', 'races', 'qualifications'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssignmentsCreateRequest $request)
    {
        //

        $input = $request->all();

        $user = Auth::user();

        $user->assignments()->create($input);

        Session::flash('create_assignment', 'Assignment has been created');

        return redirect('/admin/assignments');

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

        $assignments = Assignment::findOrFail($id);
        $levels = Level::lists('name', 'id');
        $subjects = Subject::lists('name', 'id');
        $races = Race::lists('name', 'id');
        $qualifications = Qualification::lists('name', 'id');

        return view('admin.assignments.edit', compact('assignments', 'levels', 'subjects', 'races', 'qualifications'));

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

        $input = $request->all();

        $user = Auth::user();

        Auth::user()->assignments()->whereId($id)->first()->update($input);

        $user->assignments()->create($input);


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
        $assignments = Assignmnet::findOrFail($id);

        $assignments->delete();

        return redirect('admin/assignment');


    }
}
