@extends('layout.app')

@section('content')

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
background-color: #19191a;
font-family: "Roboto", helvetica, arial, sans-serif;
font-size: 16px;
font-weight: 400;
text-rendering: optimizeLegibility;
}

div.table-title {
 display: block;
margin: auto;
max-width: 600px;
padding:5px;
width: 100%;
}




/*** Table Styles **/

.table-fill {
background: rgb(56, 56, 56);
border-radius:3px;
border-collapse: collapse;
height: 10px;
margin: auto;
max-width: 1200px;
padding:5px;
width: 100%;
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
animation: float 5s infinite;
}

th {
color:#D5DDE5;;
background:#1b1e24;
border-bottom:4px solid #9ea7af;
border-right: 1px solid #343a45;
font-size:23px;
font-weight: 100;
padding:24px;
text-align:left;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
vertical-align:middle;
}

th:first-child {
border-top-left-radius:3px;
}

th:last-child {
border-top-right-radius:3px;
border-right:none;
}

tr {
border-top: 1px solid #C1C3D1;
border-bottom-: 1px solid #C1C3D1;
color:#666B85;
font-size:16px;
font-weight:normal;
text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
background:#4E5066;
color:#FFFFFF;
border-top: 1px solid #22262e;
}

tr:first-child {
border-top:none;
}

tr:last-child {
border-bottom:none;
}

tr:nth-child(odd) td {
background:rgb(43, 42, 42);
}

tr:nth-child(odd):hover td {
background:rgb(53, 55, 77);
}

tr:last-child td:first-child {
border-bottom-left-radius:3px;
}

tr:last-child td:last-child {
border-bottom-right-radius:3px;
}

td {
background:rgb(43, 42, 42);
padding:15px;
text-align:left;
vertical-align:middle;
font-weight:300;
font-size:18px;
text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
border-right: 1px solid #C1C3D1;
}

td:last-child {
border-right: 0px;
}

th.text-left {
text-align: left;
}

th.text-center {
text-align: center;
}

th.text-right {
text-align: right;
}

td.text-left {
text-align: left;
}

td.text-center {
text-align: center;
}

td.text-right {
text-align: right;
}
    h3{
color: azure
}
h4{
color: azure
}
p{
color: azure
}
  
    </style>

<!-- Header Ends -->
<br>
<br>

<div id="home">
  <div class="container "  >
      <header id="main-header">
        <br>
          <div class="row ">
            <br>
            <br>
            <div class=" col-md-6">
         
             <h3>Name of Tournament</h3>
             <p>smatch time: 09/21/18 04:00pm</p><br>
             <p>Match id: 001<br>
              Host Name: XboxBoy</p>            
            
            </div>

         

                            </div>
                        
                        
      <div class="container" align="center">
          <div class="row">
              <div class="col-md-4 ">
                  <h4> XXPS4 </h4>
                 </div>
                 <div class="col-md-4 ">
                    <h4>  VS </h4>
                   </div>
                   <div class="col-md-4 ml-auto">
                      <h4> CALLUSTURTLES</h4>
                     </div>
                            
          </div> 
          <br>
    
            
          </div>
        </header>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-md-4">

              </div>
              <div class="col-md-4">
              
                      <a href="#" class="btn btn-primary btn-block mt-2">XXPS4 has Won</a>
            <br>
                        <a href="#" class="btn btn-primary btn-block mt-2">Team Alpha has Won</a>
               
                     
               
                    <br>
                    <a href="wagers.html" class="ml-5">
                        <button type="button" class="btn btn-primary">Submit</button>
                        </a>
                </div>
             
             
            </div>
                       
                    </div>
          </div>
         
        
            <div class="container">
              <h3 align="center">Roster</h3>
                <h4>CallUsTurtles</h4>
                      
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>username</th>
                      <th>gametag</th>
                      <th>socialmedia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>XboxBoy</td>
                      <td>Little one</td>
                      <td></td>
                    </tr>
                   
                  </tbody>
                </table>

                <h4>XXPS4</h4>
                      
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>username</th>
                      <th>gametag</th>
                      <th>socialmedia</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Undefeatable</td>
                      <td>Undefeatable9</td>
                      <td></td>
                    </tr>
                   
                  </tbody>
                </table>

              </div>
      </div>
    <br>
    <br>
    <br>
    <br>
    <br>
  


@endsection