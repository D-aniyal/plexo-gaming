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
    <div id="signup" class="py-3">
        
        <div class="loginBox">
   

            <h2>Register</h2>
            <form  method="POST" action="{{ route('register') }}">
              @csrf
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="name" placeholder="First Name" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                      
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  id="name" type="name" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}"  placeholder="Last Name" required >
                      
                        @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                    
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input name="email" placeholder="Enter Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                      
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="password" name="password" placeholder="Enter Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                      
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Confirm Password" id="password-confirm"  class="form-control" name="password_confirmation" required>
                        
                          </div>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        
                      <div class="form-group">
                            Date of Birth:
                       <input  placeholder="Date of Birth"  id="name"  class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus placeholder="Date of Birth" type="date" name="bday"></input>
                      
                       @if ($errors->has('dob'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('dob') }}</strong>
                       </span>
                   @endif
                      </div>
                    </div>
                    <div class="col-md-12">
                      
                      <div class="form-group" >
                        <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                          </button>
                      </div>
                        </div>
                       
                    </div>
                  </div>
              
              <a href="http://localhost/PlexoGaming/public/login">Already have an account?   <u>LOGIN</u></a>
            </form>
          </div>
        <br>
      

    </div>

    

</section>
  <!-- CONTACT SECTION -->
 <br>
 
    
@endsection