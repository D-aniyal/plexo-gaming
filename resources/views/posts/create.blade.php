@extends('layout.app')

@section('content')
<style>
    h3{
      color: azure
    }
    </style>

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
    
        <div class="loginBox3">
            <br>
            <br>
            <br>
           <br>
            <br>
        
<div class="row">
<div class="col-md-6">
            <h2>Create Team</h2>
            </div>

</div>
<br>

            <form>
                
                    <p>Team Name</p>
                    <div class="col-md-6">
                      <div class="form-group">
                      
                        <input type="text" name="name" placeholder="team name " required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="name" placeholder="teammate name" required>
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
                    
                     <div class="col-md-6">
                       <div class="form-group">
                       
                         
                       </div>
                     </div>
                     <div class="col-md-3" id="actions">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Create Team
                          </button>
                      </div>


            </form>
          </div>
    </div>
</section>
<!-- Home Ends -->
<br>
<br>
<br>

                       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div style="background: rgb(70, 69, 69)"class="modal-header">
        <button style="background: rgb(70, 69, 69)" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      <h3 class="modal-title" id="exampleModalLabel">[Price of Game] will be deducted from your account</h3>
      
    </div>
   
    <div style="background: rgb(70, 69, 69)" class="modal-footer">
       <a href ="{{url('/wager')}}">
      <button type="button" class="btn btn-primary">Confirm</button>
    </a>
    </div>
  </div>
</div>
</div>
<!-- CONTACT SECTION -->
<br>
<br>
<br>


@endsection