<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/style1.css">
  <title>Tournaments</title>
  <style>
      h3{
        color: azure;
      }
      </style>
</head>

<body style="background:rgb(41, 41, 41)">
<br>

  <div class="container">
  <header id="main-header">
      <div class="row ">
        <div class=" col-md-4 height-800px">
         <img src="img/gameart.jpg" alt="">
         <a href="{{url('/createteam')}}" class="btn btn-primary btn-block ">JOIN NOW</a>
        </div>
      
        <div class=" col-md-7 ml-auto">
          <div class="d-flex flex-column">
            <div class="p-3 ">
              <div class="d-flex flex-row justify-content-between align-items-center">
                <h3 class="display-5">Name of Tournament</h3>
                <div class="card-body nav-item ml-auto">
                  
                    <a href="login.html" class="btn btn-primary btn-block ">!!! PRIZE !!!</a>
                    </div>
                </div>
               
              </div>
            </div>

            <div >
              <div class="d-flex flex-row text-white align-items-stretch text-center ml-auto">
                  <div class="port-item " data-toggle="collapse" data-target="#home">
                           
                      <a>
                          <button type="button" class="btn btn-primary  ">INFORMATION</button>
                          </a>
                      </div>
                      <div class="port-item " data-toggle="collapse" data-target="#rules">
                           
                          <a>
                              <button type="button" class="btn btn-primary ">RULES</button>
                              </a>
                          </div>
                          <div class="port-item " data-toggle="collapse" data-target="#team">
                           
                              <a>
                                  <button type="button" class="btn btn-primary">TEAM</button>
                                  </a>
                              </div>
                              <div class="port-item " data-toggle="collapse" data-target="#brackets">
                           
                                  <a>
                                      <button type="button" class="btn btn-primary">Brackets</button>
                                      </a>
                                  </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </header>
 <!-- HOME -->
 <div id="home" class="collapse show col-md-7 ml-auto">
  
    <div style="background:rgb(65, 62, 62) "  class="card card-body py-5 text-center">
      <h3>Info</h3>
     
    </div>
  </div>

    <!-- rules -->
    <div id="rules" class="collapse col-md-7 ml-auto">

      <div style="background:rgb(65, 62, 62) "  class="card card-body py-5 text-center">
          <h3>Rules</h3>
      </div>
    </div>

    <!-- team -->
    <div id="team" class="collapse col-md-7 ml-auto">

      <div style="background:rgb(65, 62, 62) "  class="card card-body py-5 text-center">
          <h3>Team</h3>
      </div>
    </div>

    <!-- brackets -->
    <div id="brackets" class="collapse col-md-7 ml-auto">

      <div style="background:rgb(65, 62, 62) " class="card card-body py-5 text-center">
          <div class="tournament-container">
              
              <div style="background:rgb(65, 62, 62) "  class="tournament-brackets">
                <ul class="bracket bracket-1">
                  <li class="team-item">A2 <time>14:00</time> C2</li>
                  <li class="team-item">D1 <time>20:00</time> 3BEF</li>
                  <li class="team-item">B1 <time>17:00</time> 3ACD</li>
                  <li class="team-item">F1 <time>20:00</time> E2</li>
                  <li class="team-item">C1 <time>17:00</time> 3ABF</li>
                  <li class="team-item">E1 <time>17:00</time> D2</li>
                  <li class="team-item">A1 <time>14:00</time> 3CDE</li>
                  <li class="team-item">B2 <time>20:00</time> F2</li>
                </ul>  
                <ul class="bracket bracket-2">
                  <li class="team-item">QF1 <time>20:00</time> QF2</li>
                  <li class="team-item">QF3 <time>20:00</time> QF4</li>
                  <li class="team-item">QF5 <time>20:00</time> QF6</li>
                  <li class="team-item">QF7 <time>20:00</time> QF8</li>
                </ul>  
                <ul class="bracket bracket-3">
                  <li class="team-item">SF1 <time>20:00</time> SF2</li>
                  <li class="team-item">SF3 <time>20:00</time> SF4</li>
                </ul>  
                <ul class="bracket bracket-4">
                  <li class="team-item">F1 <time>20:00</time> F2</li>
                </ul>  
            
                <ul class="bracket bracket-5">
                  <li class="team-item">European Champions</li>
                </ul>  
              </div>
            </div>
      </div>
    </div>



  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <script>
    $('.port-item').click(function () {
      $('.collapse').collapse('hide');
    });

    $(document).on('click', '[data-toggle="lightbox"]', function (e) {
      e.preventDefault();
      $(this).ekkoLightbox();
    });
  </script>
</body>

</html>