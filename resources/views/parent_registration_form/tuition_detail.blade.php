@extends('layouts/app')

@section('content')

    <br>
    <br>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Login Details</a></li>
                        <li><a href="#">Personal Details</a></li>
                        <li class="active">Tuition Detail</li>
                    </ol>
            </div>

            <div class="panel-body center-block" style="width:70%;" >

                <div>
                    <h1>Tuition Details</h1>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        80%
                    </div>
                </div>

                <form>
                    <div class="form-group">
                        <label for="lpm">Lesson per Month: </label>
                        <input type="input" class="form-control" id="lpm" placeholder="8 [Please put a number]">
                    </div>

                    <div class="form-group">
                        <label for="hpl">Hour per Lesson: </label>
                        <input type="input" class="form-control" id="hpl" placeholder="8 [Please put a number]">
                    </div>

                    <div class="form-group">
                        <label for="prefForTutorQualification">Preference for tutor's Qualification</label>
                        <select name="prefForTutorQualification" class="form-control">
                            <option value="uni">Undergrad</option>
                            <option value="grad">Graduate</option>
                            <option value="NIETrainee">NIE Trainee</option>
                            <option value="MOETeacher">MOE Teacher</option>
                            <option value="Ex-MOE">Ex-MOE</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hb">Hourly Budget: </label>
                        <input type="input" class="form-control" id="hb" placeholder="$25">
                    </div>

                    <div class="form-group">
                        <label for="hb">Available Timeslot: </label>
                        <!--
                        Add the datetime picker here
                       -->
                    </div>

                    <div class="form-group">
                        <label for="tuition">Tuition to Commence: </label>
                        <!--
                        Add the datetime picker here
                       -->
                    </div>

                    <div class="form-group">
                        <label for="period">Period Require Tutor: </label>
                        <!--
                        Add the datetime picker here
                       -->
                    </div>

                    <button type="submit" class="btn btn-default">Submit!</button>

                </form>

            </div>
        </div>
    </div>

    <br>
    <br>

@endsection