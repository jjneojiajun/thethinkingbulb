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
                    <li><a href="#">Tutor Details</a></li>
                </ol>
            </div>

            <div class="panel-body center-block" style="width:70%;" >

                <div>
                    <h1>Personal Particulars</h1>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                        80%
                    </div>
                </div>

                <form>
                    <div class="form-group">
                        <label for="EducationQualification">Education Qualification:</label>
                        <select class="form-control">
                            <option value="University">University</option>
                            <option value="Polytechnic">Polytechnic</option>
                            <option value="IB">IB</option>
                            <option value="A Level">A Level</option>
                            <option value="O Level">O Level</option>
                            <option value="Other Talent">Other Talent</option>
                        </select>
                    </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Education Certifications: </label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Please place a file less than 10MB here.</p>
                            </div>


                        <div class="form-group">
                            <label for="tutorlocation">Tutoring Location</label>
                            <br>
                            <input type="checkbox"> North
                            &nbsp;
                            <input type="checkbox"> North-East
                            &nbsp;
                            <input type="checkbox"> East
                            &nbsp;
                            <input type="checkbox"> South
                            &nbsp;
                            <input type="checkbox"> West
                            &nbsp;
                            <input type="checkbox"> North-West
                        </div>

                    <div class="form-group">
                        <label for="levelandsubjects">Level, Subject and Budget:</label>
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="Level" placeholder="Primary 1">

                                </td>
                                <td>
                                    <input type="text" name="Subjects" placeholder="English">

                                </td>
                                <td>
                                    <input type="text" name="Budget" placeholder="$25">

                                </td>
                                <td>
                                    <button class="delete" type="button">x</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>

    <br>
    <br>

@endsection
