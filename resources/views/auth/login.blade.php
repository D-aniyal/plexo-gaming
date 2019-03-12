@extends('layout.app')

@section('content')

    <!-- Home -->
    <section id="home">

        <!-- Background Video -->
        <video id="home-bg-video" poster="video/solo.jpg" autoplay loop muted>
            <source src="video/RAGE 2.mp4" type="video/mp4">
            <source src="video/RAGE 2.mp4" type="video/ogg">
            <source src="video/RAGE 2.mp4" type="video/webm">
        </video>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- Overlay -->
        <div id="home-overlay"></div>

        <!-- Home Content -->
        <div id="login" class="py-3">

            <div class="loginBox">


                <h2>LOGIN</h2>
                <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <p>Email</p>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <!--
                    <input type="submit" name="sign-in" value="Sign In">
                    -->
                    <input type="submit" class="btn btn-info" role="button">LOGIN</input>
                    <a href="#">Forget Password</a><br>
                    <a href="{{ route('register') }}">Don't have an account?<u> Signup</u></a>
                </form>
            </div>



        </div>



    </section>
    <!-- Home Ends -->
    <!-- CONTACT SECTION -->



@endsection