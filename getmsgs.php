<?php
//  include 'database.php';
 session_start();
 include ('conn.php');
//  $obj = new Database('batch1' , 'chats');

    if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
        $login = $_SESSION['id'];
        $query = mysqli_query($con,"SELECT * FROM chats WHERE 
        (sender_id = '$uid'
        And receiver_id = '$login') OR (sender_id = '$login' 
        And receiver_id = '$uid')");
        if($query){
            if(mysqli_num_rows($query) > 0){
    
?>
             <?php
                   while($row = mysqli_fetch_assoc($query)){
                    extract($row);
            ?>
            <?php
                if($sender_id != $login){ 
            ?>
                <div class="incoming_msg" style="user-select: auto;">
                    <div class="incoming_msg_img" style="user-select: auto;"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" style="user-select: auto;"> </div>
                        <div class="received_msg" style="user-select: auto;">
                        <div class="received_withd_msg" style="user-select: auto;">
                            <p style="user-select: auto;"><?= $row['msg'] ?></p>
                            <span class="time_date" style="user-select: auto;"> <?= $row['date'] ?></span>
                        </div>
                    </div>
                </div>
                <?php
                }else{
                ?>
                <div class="outgoing_msg" style="user-select: auto;">
                    <div class="sent_msg" style="user-select: auto;">
                    <p style="user-select: auto;"><?= $row['msg'] ?></p>
                    <span class="time_date" style="user-select: auto;"><?= $row['date'] ?></span> </div>
                </div>
            <?php
                }
                }
                }
                else{
                    echo "<div class='alert alert-danger'>No Record Found</div>";
                }
            }else{
                echo mysqli_error($con);
            }
        }
                
            ?>