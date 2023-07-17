<?php
    include 'database.php';
    $obj = new Database('batch1' , 'practice');
    if(!$obj->is_login())
        header("location:login1.php");
    // print_r($obj->get_login_user());
        $user = $obj->data();

    if(isset($_POST['update'])){
        unset($_POST['update']);
        $id = ($_POST['id']);
        unset($_POST['id']);
        // if($obj->check('email' , $_POST['email'] , 'id' , $bid))
            $obj->update($_POST , 'id' , $id);
        // else
        // echo"<div class='alert alert-danger'>Email already exists</div>";
    
    }
    
    if(isset($_POST['delete'])){
        $obj->delete('id' , $_POST['id']);
        header("location:login1.php");
    }
?>
<!-- 
<a href="logout1.php">Logout </a> -->
<!doctype html>
<html lang="en">
  <head>
    <title>My Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
  <style>
body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
  </style>
  <body>
      <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="../business-4561250_960_720.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="240px" height="280px">
								<div class="mt-3">
									<h4><?=$user['first'] . " " . $user['last'] ?></h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm"><?= $user['address'] ?></p>
									<button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">First Name:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <?= $user['first'] ?>
                            </div>
							</div>
                            <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Last Name:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
                                <?= $user['last'] ?>
                            </div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?= $user['email'] ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone:</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?= $user['phone'] ?>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<?= $user['address'] ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
                                    <button class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#updateModal<?= $user['id'] ?>">Update</button>
                                    <button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $user['id'] ?>">Delete</button>
                                    <a href="login1.php" class="btn btn-primary">Log Out</a>
                                    <div class="modal fade" id="deleteModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete <?= $user['first'] . " " . $user['last'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete? 
                                            </div>
                                            <div class="modal-footer">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    
                                                    <button type="submit" name="delete" class="btn btn-danger">Yes</button>

                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- update -->
                                    <div class="modal fade" id="updateModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit <?= $user['first'] . " " . $user['last'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="validationcustomer1" class='form-label'>First Name</label>
                                                            <input type="text" name = "first" class = "form-control"
                                                            <?php
                                                            if(isset($user['first'])){
                                                                ?>
                                                                    value = "<?= $user['first'] ?>"
                                                                <?php
                                                            }
                                                            ?>
                                                            id= "validationcustomer1" placeholder = "<?= $user['first'] ?>" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="validationcustomer1" class='form-label'>Last Name</label>
                                                            <input type="text" name = "last" class = "form-control"
                                                            <?php
                                                            if(isset($user['last'])){
                                                                ?>
                                                                    value = "<?= $user['last'] ?>"
                                                                <?php
                                                            }
                                                            ?>
                                                            id= "validationcustomer1" placeholder = "<?= $user['last'] ?>" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="example2" class='form-label'>Phone:</label>
                                                            <input type="text" name = "phone" class = "form-control"
                                                            <?php
                                                            if(isset($user['phone'])){
                                                                ?>
                                                                    value = "<?=$user['phone']?>"
                                                                <?php
                                                            }
                                                            ?>
                                                            id= "example2" placeholder = "<?=$user['phone']?>">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="example2" class='form-label'>Address:</label>
                                                            <input type="text" name = "address" class = "form-control"
                                                            <?php
                                                            if(isset($user['address'])){
                                                                ?>
                                                                    value = "<?=$user['address']?>"
                                                                <?php
                                                            }
                                                            ?>
                                                            id= "example2" placeholder = "<?=$user['address']?>">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name= "id"value="<?=$user['id']?>" >
                                                    
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                                                    
                                                        <button type="submit" name="update" class="btn btn-success">update</button>

                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Project Status</h5>
									<p>Web Design</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Website Markup</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>One Page</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Mobile Template</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Backend API</p>
									<div class="progress" style="height: 5px">
										<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>