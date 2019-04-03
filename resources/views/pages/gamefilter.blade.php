@extends('layout.app')

@section('content')

<style type="text/css">
    button:focus, button:active {
        outline:0;
    }
    .filter {
        transition: all 2s ease;
    }
    
    h3{
        color: azure;
    }
    </style>
<br>
<br>
<br>
<br>
<br>
<div class="container p-5">
	<div class="row">
		<div class="col-sm-12 mb-3">
			<h3 Align ="center">Schedule Game Matches</h3>
		</div>
		<div class="col-sm-12 ">
			<div class="category-filter pb-5 " width="50%">
          <button class="btn btn-outline-secondary category-button active mr-3 dropdown-toggle" data-toggle="dropdown" data-filter="all">All of Games</button>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">
              <i class=""></i> Genre
            </a>
            <a href="" class="dropdown-item">
              <i class=""></i> Time
            </a>
            <a href="" class="dropdown-item " >
              <i class=""></i> Free
            </a>
            
          </div>
    			<button class="btn btn-outline-danger category-button mr-3" data-filter="portraits">Pc</button>
    			<button class="btn btn-outline-danger category-button mr-3" data-filter="landscapes">Xbox</button>
    			<button class="btn btn-outline-danger category-button mr-3 " data-filter="urban">Ps4</button>
			</div>
		</div>
	</div>
<br>

	<div class="row">
		<div class="col-sm-6 col-md-4 col-lg-3 filter portraits mb-5">
      <a href="{{url('/Tournament1')}}">
      <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
      </a>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter portraits mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter landscapes mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter landscapes mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
    </div>
    
		<div class="col-sm-6 col-md-4 col-lg-3 filter urban mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter landscapes mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter portraits mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
     
		</div>
		<div class="col-sm-6 col-md-4 col-lg-3 filter landscapes mb-5">
      <a href="{{url('/Tournament1')}}">
        <img src="img/gta.jpg" width ="250px" height ="250px" class="img-fluid">
        </a>
		</div>
	</div>
</div>
<br>
 

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="category-filter.js"></script>
<script type="text/javascript">
$('.category-filter .category-button').categoryFilter();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



@endsection