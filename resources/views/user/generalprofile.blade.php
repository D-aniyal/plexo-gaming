@extends('layout.app')
<style>
    .generalprofile {
        margin-top: 100px;
    }
</style>
@section('content')
    <!-- Home -->
    <section id="home">
        <!-- Home Content -->
        <div id="signup" class="py-3 ml-auto">

            <div class="loginBox2">

                <div class="row">
                    <div class="col-md-4">
                        <h3>Account Settings</h3>
                    </div>
                    <div class="col-md-3">

                        <h2>General</h2>

                    </div>
                    <div class="col-md-3">
                        <h2> Profile</h2>
                    </div>
                </div>

                <form class="generalprofile" method="POST" action="{{ url('generalprofile') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="first_name" value="{{ $user->first_name }}" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="last_name" value="{{ $user->last_name }}" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="username" value="{{ $user->username }}" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">

                                <input type="text" name="email" value="{{ $user->email }}" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="psn" value="{{ $user->psn }}" placeholder="PSN" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="timezone" id="timezone" required class="form-control">
                                    <option value="UTC" {{ ($user->timezone == 'UTC') ? 'selected' : '' }}>UTC</option>
                                    <option value="GMT" {{ ($user->timezone == 'GMT') ? 'selected' : '' }}>GMT</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <p>Change Passward</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="password" name="current_password" placeholder="Old Password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password">
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <input type="password" name="confirm_password" placeholder="Confirm Password">
                            </div>

                        </div>
                    </div>

                    <p>Premium Membership Settings</p>
                    <div class="row">
                        <label class="radio-inline">
                            <input type="radio" name="membership_status" value="Yes" {{ ($user->membership_status == 'Yes')?'checked':'' }}>
                            <p style="margin-left: 20px">Yes</p>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="membership_status" value="No" {{ ($user->membership_status == 'No')?'checked':'' }}>
                            <p style="margin-left: 20px">No</p>
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Home Ends -->

    <br>
    <br>
    <br>






@endsection