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
                        <li class="active">Tutor Request</li>
                    </ol>
            </div>

            <div class="panel-body center-block" style="width:70%;" >

                <div>
                    <h1>Tutor Request</h1>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                    </div>
                </div>

                <form>
                    <div class="form-group">
                        <label for="level">Level to be Tutored</label>
                        <select name="level" class="form-control">
                            <optgroup label="Primary">
                                <option value="pri1">Primary 1</option>
                                <option value="pri2">Primary 2</option>
                                <option value="pri3">Primary 3</option>
                                <option value="pri4">Primary 4</option>
                                <option value="pri5">Primary 5</option>
                                <option value="pri6">Primary 6</option>
                            </optgroup>

                            <optgroup label="Secondary">
                                <option value="sec1">Secondary 1</option>
                                <option value="sec2">Secondary 2</option>
                                <option value="sec3">Secondary 3</option>
                                <option value="sec4">Secondary 4</option>
                            </optgroup>

                            <optgroup label="JC">
                                <option value="jc1">JC1</option>
                                <option value="jc2">JC2</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <p><b>Preference for tutor's gender:</b></p>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="Male"> Male
                        </label>

                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="Female"> Female
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="tutorrace">Preference for Tutor's Race: </label>
                        <select name="tutorrace" class="form-control">
                            <option value="nopref">No Preference</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Malay">Malay</option>
                            <option value="Indian">Indian</option>
                            <option value="Eurasian">Eurasian</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="additional_information">Additional Information</label>
                        <textarea class="form-control" rows="8"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Next</button>

                </form>

            </div>
        </div>
    </div>

    <br>
    <br>
@endsection