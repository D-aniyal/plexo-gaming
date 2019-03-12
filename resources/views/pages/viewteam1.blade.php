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
  p{
    color: azure
  }
      
        </style>
<<br>
<br>
<br>
<br>
<div id="home">
    
              <br>
              <br>
              <div class="container ">
               
                <div class="col-md-2">
                
                    
                      <h3 class="display-2">
                        <img src="img/round.png"  alt="" height="150" width="150"> 
                      </h3>
                      
                </div>
                <div class="col-md-2">

                    <h3 class="display-2">
                      Team name <br>
                       <br>
                       <p class="ml-4" >  XXPS4</p>
                        
                      </h3>
                </div>
                <div class="col-md-2">
                  <div class="card text-center  text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/1-2-3.png"  alt="" height="150" width="100">
                        
                      </h4>
                      <h3>3</h3>
                    </div>
                  </div>
                 </div>
                 <div class="col-md-2">
                  <div class="card text-center  text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/1-2-3.png"  alt="" height="150" width="100">
                        
                      </h4>
                      <h3>3</h3>
                    </div>
                  </div>
                 </div>
                 <div class="col-md-2">
                  <div class="card text-center  text-white mb-3">
                    <div class="card-body">
                    
                      <h4 class="display-2">
                        <img src="img/1-2-3.png"  alt="" height="150" width="100">
                        
                      </h4>
                 <h3>3</h3>
                    </div>
                  </div>
                 </div>
<br>
<br>
<br>
<br>
                <div class="col-md-2">
                  <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                    
                      
                        23,201 <p class="pull-right">312 <br>profile views
                        </p>
                    
                      <p >rank</p>
                    </div>
                  </div>
        
                  
                 
                </div>
              </div>
<br>
<br>
              <div class="container">
                  <div class="row">
                              
                    <div class="card card-body py-5 text-center">
                                  <hr>
                                  <table style="width:80%" class="table table-bordered">
                                      <h3>View Team</h3>
                                      <tr>
                                        <th>Username
                                          </th>
                                        <th>Role</th> 
                                        <th>Social Media </th>
                                        <th>Eligibility </th>
                                       
                                      </tr>
                            
                                      <tr>
                                       
                                        <td>XXsharkboy</td>
                                          <td>Leader
                                            </td> 
                                            <td><u> </u></th>
                                              <td><i class="fas fa-check"></i></th>
                                         
                                        </tr>
                                        <tr>
                                       
                                            <td>XboxBoy </td>
                                              <td>member
                                                </td> 
                                                <td></th>
                                                  <td><i class="fas fa-check"></i></th>
                                             
                                            </tr>
                                      </table>

                                     
                                </div>
                  </div>
                        
                </div>
            </div>

          </div>
          
@endsection