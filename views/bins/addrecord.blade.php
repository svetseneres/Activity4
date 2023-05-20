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
    <a href="{{ URL::to('/')}}">Home</a>
    <a class="active" href="{{ URL::to('/records')}}">Records</a>
  </div>
  
  <div class="content">
    <h3 style ="padding-top: 10px"><b>Barangay Mabayuan Information Management System</b></h3>
    <hr>
    <div class="container">
        <h1>Add New Resident</h1>
        <a href="{{ URL::to('/records')}}" class="btn btn-primary">Back</a>
            <form action="addrecord" method="post">
                @csrf
                <br>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter the firstname">
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Enter the middlename">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter the lastname">
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthday</label>
                    <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter the birthdate">
                </div>
                <div class="form-group">
                    <label for="civilstatus">Civil Status</label>
                    <select class="form-select" name="civilstatus" id="civilstatus" >
                        <option selected>Select civil status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Seperated">Seperated</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter the occupation">
                </div>
                <div class="form-group">
                    <label for="sitio">Sitio</label>
                    <select class="form-select" name="sitio" id="sitio" >
                        <option selected>Select Street</option>
                        <option value="nieves">Nieves</option>
                        <option value="Rosete">Rosete</option>
                        <option value="Leyva">Leyva</option>
                        <option value="Calimbas">Calimbas</option>
                        <option value="Rodriguez">Rodriguez</option>
                        <option value="Mercurio">Mercurio</option>
                        <option value="Dearo">Dearo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Record</button>
            </form>
        </div>    
  </div>
  </body>
</html>
