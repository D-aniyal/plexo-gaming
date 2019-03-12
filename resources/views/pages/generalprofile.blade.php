@extends('layout.app')

@section('content')
   <!-- Home -->
   <section id="home">
    <br>
            <br>
            <br>
            <br>
            <br>
            <br>

 
    <!-- Home Content -->
    <div id="signup" class="py-3 ml-auto">
    
        <div class="loginBox2">
            <br>
            <br>
            <br>
           <br>
            <br>
        
<div class="row">
<div class="col-md-4">
    <h3 >Account Settings</h3>
    </div>
<div class="col-md-3">

            <h2>General</h2>
        
            </div>
<div class="col-md-3">
    <a href="{{url('/profile')}}">
    <h2> Profile</h2>
    </a>
      </div>
</div>
<br>
<br>
<br>
<br>
            <form>
                
                <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                      
                        <input type="text" name="name" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Last Name" required>
                      </div>
                    </div>
                   
                    <div class="col-md-4">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="Username"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" name="name" placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" name="name" placeholder="PSN" required>
                        </div>
                      </div>
                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" name="name" placeholder="Timezone"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                      </div>
                    </div>

                     
                    <p>Change Passward</p>
                    <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                      
                          <input type="text" name="name" placeholder="Old Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                    
                      <div class="form-group">
                          <input type="text" name="name" placeholder="Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                    
                   </div>
                   <div class="col-md-4">
                    
                      <div class="form-group">
                          <input type="text" name="name" placeholder="Confirm Password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                    
                   </div>
                    </div>
                   
                   <p>Premium Membership Settings</p>
                   <div class="row">
                   
                      <form>
                       
                          <label class="radio-inline">
                              
                            <input type="radio" name="optradio" checked>
                            <p>Yes</p>
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio">
                            <p>No</p>
                          </label>
                          </form>
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