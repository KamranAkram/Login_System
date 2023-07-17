<?Php                  
  include 'database.php';
  $obj = new Database('batch1' , 'practice');
  $users = $obj->chat_user();
//   echo "<pre/>";
//   print_r($users);
//   die;
   ?>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="chatsignup.css"> -->
<link rel="shortcut icon" href="../img/online-form.png" type="image/x-icon">
<title>Group</title>

<style>
.point{
    background-image: url(../group.jpg);
    min-height : 100vh;
    width : 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.heading{
    font-size : 50px;
    font-family : serif;
    font-weight : bolder;
    color : white;
    text-decoration : underline;
}
.point1{
    font-size : 30px;
    font-family : serif;
    font-weight : bolder;
    color : white;
    text-decoration : underline;
}
</style>
<div class="container-fluid point">
    <div class="d-flex justify-content-center">
        <div class="row justify-content-center my-5 ">
            <div class="col-bg col-md-6 text-left text-white ">
                <form class="signup" action="val_group.php" id="create_group" method="post">
                    <h2 class="heading mb-4">Group Creation</h2>
                    <hr>
                    <div class="form-group mt-2">
                        <div class="form-item">
                            <label for="validationCustom01" class="form-label point1">Group Name:</label>
                            <input type="name" name="name" class="form-control" id="validationCustom01" placeholder="Enter Name">                           
                        </div>
                        <div class="form-item mt-2">
                            <label for="custom2" class="form-label point1">Add Participants:</label>
                            <select class="form-select" aria-label="Default select example" name="user_id[]" multiple>
                                 <!-- <option selected>choose participants...</option> -->
                             <?php
                                foreach($users as $user){
                             ?>
                             <option value="<?=$user['id']?>"><?= $user['first']." ".$user['last'] ?>
                              <!-- <span>
                             <input class="form-check-input" value="" id="flexCheckDefault">
                             </span> -->
                            </option>
                             <?php
                                }
                             ?>
                            </select>
                        </div>
                    </div>
                        <br>
                    <label class="mt-16 checkbox-cus"> 
                        <input type="checkbox" name="check" class="form-check-input ml-0" id="exampleCheck1"> 
                            <span class="form-check-label ml-3 text-white" for="exampleCheck1">I accept the
                            Terms & Policy</span> 
                    </label>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="Chat.js"></script>
