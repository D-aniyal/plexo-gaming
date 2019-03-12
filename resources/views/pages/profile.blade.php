
@extends('layout.app')

@section('content')
<style>
h5{
  color: azure;
}
</style>
 <section id="home">
  <br>
          <br>
          <br>
          <br>
          <br>
          <br>

          
 <div class="container">
   <div class="col-md-3">
      <h3 >Account Settings</h3>
<img src="img/round.png" alt=""> 
<div class="upload-btn-wrapper">
   
    <input type="file" name="myfile" />
  </div>
<br>
<br>  
<div class="form-group">
<input type="submit" value="Submit" class="btn btn-outline-danger btn-block">
</div>

</div>
</div>
  <!-- Home Content -->
  <div id="signup" class="py-3 ml-auto">
  
      <div class="loginBox1">
          <br>
          <br>
          <br>
         <br>
          <br>
      
<div class="rom">
<div class="col-md-3">
  <a href="{{url('/generalprofile')}}">
          <h2>General</h2>
  </a>
          </div>
<div class="col-md-6">
  
  <h2>Profile</h2>
   
</div>
</div>
<br>
<br>
<br>
<br>
          <form>
              
                  <p>Platform GameTags</p>
                  <div class="col-md-6">
                    <div class="form-group">
                    
                      <input type="text" name="name" placeholder="XBOX" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="PSN" required>
                    </div>
                  </div>
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="???"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="name" placeholder="???"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                   </div>

                   
                  <p>Social Media Accounts</p>
                  <div class="col-md-6">
                    <div class="form-group">
                    
                      <input type="text" name="name" placeholder="TWITTER" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="FACEBOOK" required>
                    </div>
                  </div>
                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="TWITCH"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="name" placeholder="YOUTUBE"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                   </div>
                   <p>Payment Information</p>
                   <div class="col-md-6">
                     <div class="form-group">
                     
                       <input type="text" name="name" placeholder="Paypal Email" required>
                     </div>
                   </div>
                   <div class="col-md-6">
                    
                      <div class="form-group">
                          <input type="submit" value="Submit" class="btn btn-outline-danger btn-block">
                      </div>
                    </div>
          </form>
        </div>
  </div>
</section>
<!-- Home Ends -->
<!-- CONTACT SECTION -->
<br>
<br>
<br>
 <br>
 
    
@endsection
<!--
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                
                                  <input id="name" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus placeholder="Date of Birth" type="date" name="bday"></input>
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

