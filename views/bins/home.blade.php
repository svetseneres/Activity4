<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<style>
  body {
    margin: 0;
    font-family: "Lato", sans-serif;
  }
  
  .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
  }
  
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }
   
  .sidebar a.active {
    background-color: #04AA6D;
    color: white;
  }
  
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
  
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }
    .sidebar a {float: left;}
    div.content {margin-left: 0;}
  }
  
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
  </style>
  </head>
  <body>
  
  <div class="sidebar">
    <h3 style ="padding: 10px"><b>BMIMS</b></h3>
    <a class="active" href="{{ URL::to('/')}}">Home</a>
    <a href="{{ URL::to('showrecord')}}">Records</a>
  </div>
  
  <div class="content">
    <h3 style ="padding-top: 10px"><b>Barangay Mabayuan Information Management System</b></h3>
    <hr>
    <div class="container">
        <h3>Welcome, Admin!</h3>
        <hr>
        <h5>Records of the Residents</h5>
        <hr>
        <h6>Civil Status</h6>
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Single</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $single }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Married</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $married }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Widowed</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $widowed }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Seperated</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $seperated }}</h5>
                    </div>
                  </div>
            </div>
        </div>
        <hr>
        <h6>Street</h6>
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nieves</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $nieves }}</h5>  
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Rosete</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $rosete }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Leyva</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $leyva }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Calimbas</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $calimbas }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Rodriguez</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $rodriguez }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Mercurio</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $mercurio }}</h5>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Dearo</div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $dearo }}</h5>
                    </div>
                  </div>
            </div>
        </div>
  </div>
  </div>
  
  </body>
</html>