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
                    <li class="active">Tutor Details</li>
                </ol>
            </div>

            <div class="panel-body center-block" style="width:70%;" >

                <div>
                    <h1>Personal Particulars</h1>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                        20%
                    </div>
                </div>

                <form>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="exampleInputFile">Picture: </label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Please place a picture that's 400 x 400 here.</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="NRIC">NRIC:</label>
                        <input type="input" class="form-control" id="NRIC" placeholder="SxxxxxxxZ">
                    </div>

                    <div class="form-group">
                        <label for="Availability">Availability: </label>

                    </div>

                    <div class="form-group">
                        <label for="DOB">Date Of Birth</label>
                        <input type="text" class="form-control" id="DOB" placeholder="dd/mm/yyyy">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email: </label>
                        <input type="input" class="form-control" id="email" placeholder="info@gmail.com">
                    </div>

                    <div class="form-group">
                        <label for="yearOfBirth">Email Notification: </label>
                        <input type="checkbox"> Yes!
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender: </label>
                        <input type="checkbox"> Male
                        <input type="checkbox"> Female
                    </div>

                    <div class="form-group">
                        <label for="Race">Race </label>
                        <select class="form-control">
                            <option value="Chinese">Chinese</option>
                            <option value="Malay">Malay</option>
                            <option value="Indian">Indian</option>
                            <option value="Eurasian">Eurasian</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Religion">Religion: </label>
                        <select class="form-control">
                            <option value="Buddhism">Chinese</option>
                            <option value="Christianity">Malay</option>
                            <option value="Islam">Indian</option>
                            <option value="Hinduism">Hinduism</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Nationality">Nationality:</label>
                        <input type="text" class="form-control" id="Nationality" placeholder="Singaporean">
                    </div>

                    <div class="form-group">
                        <label for="education">Educational Level: </label>
                        <input type="text" class="form-control" id="education" placeholder="University">
                    </div>

                    <div class="form-group">
                        <label for="teaching">Teaching Credential</label>
                    </div>

                    <div class="form-group">
                        <label for="tutoring">Tutoring Status: </label>
                        <select class="form-control">
                            <option value="active">Active</option>
                            <option value="not-active">Not Active</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="occupation">Occupation: </label>
                        <input type="text" class="form-control" id="occupation" placeholder="Uber Driver?">
                    </div>

                    <div class="form-group">
                        <label for="address">Address: </label>
                        <input type="text" class="form-control" id="address" placeholder="Tampines Street 31">
                    </div>

                    <div class="form-group">
                        <label for="postalcode">Postal Code:</label>
                        <input type="text" class="form-control" id="postalcode" placeholder="8xxxxx">
                    </div>

                    <div class="form-group">
                        <label for="homeno">Home No:</label>
                        <input type="text" class="form-control" id="homeno" placeholder="6xxxxxxx">
                    </div>

                    <div class="form-group">
                        <label for="onlineinterest">Interested in Online Teaching?</label>
                        <input type="checkbox"> Yes
                    </div>

                    <div class="form-group">
                        <label for="onlineinterest">Interested in Tuition Centre?</label>
                        <input type="checkbox"> Yes
                    </div>


                    <button type="submit" class="btn btn-primary">Next</button>
                </form>


            </div>
        </div>
    </div>

    <br>
    <br>

@endsection
