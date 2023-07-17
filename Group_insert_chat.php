<?php
     session_start();
     // include "database.php";
     include ('conn.php');
    

    if(isset($_SESSION['id'])){
        
        // $date = time();
        $sender_id = $_SESSION['id'];
        $group_id = $_GET['group_id'];
        $message = $_GET['msg'];
        if(!empty($message)){
            $sql = mysqli_query($con,"INSERT INTO group_msg (sender_id, group_id, msg)
            VALUES ($sender_id, '$group_id', '$message')");
            if($sql){
                echo "successfully inserted";
            }
            else{
                echo mysqli_error($con);
               }
        }
    }

?>