<?php
	include 'database.php';
	$obj = new Database('batch1' , 'practice');
	$users = $obj->chat_user();

  $obj1 = new Database('batch1' , 'groups');
  $groups = $obj1->group_user();
  
?>
  


<style>
.container{max-width:1170px; margin:auto;}
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%;
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #05728f;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #05728f none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #05728f none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
</style>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">

<link rel="shortcut icon" href="../img/online-form.png" type="image/x-icon">
<title>Chatting Form</title>
</head>
<body>
<div class="container mt-5">
<h3 class=" text-center">Chat Application</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent Chats</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
      <div class="tabs mt-2">
      <ul class="nav nav-tabs text-center">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#menu4"><i class="fa fa-camera p-1 mx-2"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Chat</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Group</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Status</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu3">Calls</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane container fade" id="menu4">Photos</div>
  <div class="tab-pane container active" id="home">
  <div class="inbox_chat">
            <?php
                foreach($users as $user){
            ?>
                
                  <div class="chat_list" data-id="<?= $user['id'] ?>" data-name="<?= $user['first'] . " " .$user['last']?>">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                        <h5><?= $user['first']." ".$user['last'] ?> <span class="chat_date">Dec 25</span></h5>
                        <p>Test, which is a new approach to have all solutions 
                          astrology under one roof.</p>
                      </div>
                    </div>
                  </div>  
            <?php
                }
            ?>
      
          </div>

  </div>
  <div class="tab-pane container py-5" id="menu1">
  <h3>Groups</h3>
  <div class="inbox_chat">
                     <?php
                        foreach($groups as $group){
                     ?>
                
                  <div class="chat_list group_list" data-id="<?= $group['id'] ?>" data-name="<?= $group['name'] ?>">
                    <div class="chat_people">
                      <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                      <div class="chat_ib">
                        <h5><?= $group['name'] ?> <span class="chat_date">Dec 25</span></h5>
                        <p>Test, which is a new approach to have all solutions 
                          astrology under one roof.</p>
                      </div>
                    </div>
                  </div>  
            <?php
              }
            ?>
          </div>
  <button type="button" class="btn btn-outline-success text-white"><a href="Group_create.php">Create Group</a></button>

  </div>
  <div class="tab-pane container fade" id="menu2">Status</div>
  <div class="tab-pane container fade" id="menu3">Calls</div>
</div>
      </div>
          
        </div>

        <div class="mesgs">

        <div class="user_log">

        </div>
          <div class="msg_history">
            
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="hidden" id="rec_id">
              <input type="text" class="write_msg" id="message" placeholder="Type a message" />
              <button class="msg_send_btn" ><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
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

    </body>
   
    </html>

