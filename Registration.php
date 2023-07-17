<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
 
  <!-- <link rel="stylesheet" href="stlye.css"> -->
 <style>
     
    .main-center{
        
        opacity: 0.9;
        overflow: hidden;
      max-width: 400px;
      margin: 0 auto;
      padding: 10px 40px;
      background:#009edf;
      margin-top: 50px;
      color: #FFF;
      text-shadow: none;
   -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);


    }
    
    /* body{
        background-image:url(img/drop-3698073.jpg);
        background-size:cover;
        background-repeat:no-repeat;
    } */
       /* .invalid-feedback{
          display:block; 
      }
       .invalid{
          border : 3px solid red; 
      } */

  </style>
</head>
<body>
    <div class="container">
    <div class="main-center">
        <h1 class="text-center text-white">Registration Form</h1>
        <form id="ajax" action="New_Register.php" method="post">
            <div class="col-12">
                <label for="validationCustom01" class="form-label">First Name</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>

                <input name="first" type="text"  class="form-control" id="validationCustom01" placeholder="First Name">
                <!-- <div class="invalid-feedback"> </div> -->
              </div>
            </div>
            <div class="col-12">
                <label for="validationCustom02" class="form-label">Last Name</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>

                <input name="last" type="text" class="form-control"
                id="validationCustom02" placeholder="Last Name" >
                <!-- <div class="invalid-feedback"> </div> -->
              </div>
            </div>
            <div class="col-12">
                <label for="validationCustomUsername" class="form-label">Email</label>

                <div class="input-group">

                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope-square"></i></span>
                <input name="email" type="email" class="form-control" 
                id="validationCustomUsername" placeholder="Enter Email" aria-describedby="inputGroupPrepend">
                    <!-- <div class="invalid-feedback"> </div> -->
                </div>

            </div>
            <div class="col-12">
                <label for="validationpass" class="form-label">Password</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>

                <input name="pwd" type="password" class="form-control"
                id="validationpass" placeholder="Enter Password" aria-describedby="inputGroupPrepend">
                <!-- <div class="invalid-feedback">  </div>  -->
                </div> 
            </div>
            <div class="col-12">
                <label for="validationconfirm12" class="form-label">Confirm Password</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"></span>

                <input  name="cpwd" type="password" class="form-control"
                id="validationconfirm12" placeholder="Confirm Password" aria-describedby="inputGroupPrepend" >
                <!-- <div class="invalid-feedback"> </div> -->
                </div>
            </div>
            <div class="col-12">
                <label for="validationconfirm" class="form-label">Phone</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"></span>

                <input  name="phone" type="phone" class="form-control"
                id="validationconfirm" placeholder="Enter Number" aria-describedby="inputGroupPrepend" >
                <!-- <div class="invalid-feedback"> </div> -->
                </div>
            </div>
            <div class="col-12">
                <label for="validationconfirm" class="form-label">Address</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend"></span>

                <input  name="address" type="address" class="form-control"
                id="validationconfirm" placeholder="Enter Address" aria-describedby="inputGroupPrepend" >
                <!-- <div class="invalid-feedback"> </div> -->
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck"name="check">
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                  <!-- <div class="invalid-feedback">
                  </div> -->
                </div>
            </div> 
           <div class="col-12">
                <button class="btn btn-danger " type="submit" name="submit">Submit</button>
            </div>
        </form>
          </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="crud_register.js"></script>

</body>
</html>