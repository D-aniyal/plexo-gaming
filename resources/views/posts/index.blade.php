@extends('layout.app')

@section('content')
<style>
h3{
    color: azure;
}
table,  {
      border: 1px solid rgb(163, 163, 163);
      padding: 5px;
      
    }
    td{
      color: azure
    }
    th{
      color: azure
    }
    h3{
color: azure
}

    </style>
<br>
<br>
<br>
<div id="home">
      <div class="container"  >
          <header id="main-header">
            <br>
              <div class="row ">
                <br>
                <br>
                <div class=" col-md-6">
             
                 <h3>Create a match</h3>
                                 </div>
              
                <div class=" col-md-3 ml-auto">
                  <div class="d-flex flex-column">
                    </div>
        <br>
  
                    <div >
                      <div   class="d-flex flex-row text-white align-items-stretch text-center ml-auto">

                        <a href="{{url('/gamecategory')}}" class="btn btn-primary ">Create Match</a>
                      
                      </div>
                    </div>
              
                  </div>
                </div>
                </header>
              </div>
              <br>
              <br>
              <div class="container ">
               
                <div class="col-md-4">
                        <div class="card text-center bg-primary text-white mb-3">
              @if(count($posts) > 0)
              @foreach($posts as $post)
              <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->body}}</p>
                <small>Written on {{$post->created_at}}</small>
                <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> <p class="pull-right">Singles/Doubles <br>
        
              </div>
              @endforeach
             </div>    
            
                </div>

                <div class="col-md-4">
                  
        
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> Game Mode <p class="pull-right">Singles/Doubles <br> timing $$$
                        </p>
                      </h4>
                      <p >console</p>
                    </div>
                  </div>
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> Game Mode <p class="pull-right">Singles/Doubles <br> timing $$$
                        </p>
                      </h4>
                      <p >console</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> Game Mode <p class="pull-right">Singles/Doubles <br> timing $$$
                        </p>
                      </h4>
                      <p >console</p>
                    </div>
                  </div>
        
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> Game Mode <p class="pull-right">Singles/Doubles <br> timing $$$
                        </p>
                      </h4>
                      <p >console</p>
                    </div>
                  </div>
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/PC.jpeg" class="pull-left" alt="" height="42" width="42"> Game Mode <p class="pull-right">Singles/Doubles <br> timing $$$
                        </p>
                      </h4>
                      <p >console</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>



@else
<p>No posts found</p>
@endif

@endsection
