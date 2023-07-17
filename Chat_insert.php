<?php 
     session_start();
    // include "database.php";
    include ('conn.php');


    // $obj = new Database('batch1' , 'chats');
    // echo "coming";
        
    if(isset($_SESSION['id'])){
        
        // $date = time();
        $sender_id = $_SESSION['id'];
        $receiver_id = $_GET['receiver_id'];
        $message = $_GET['msg'];
        if(!empty($message)){
            $sql = mysqli_query($con,"INSERT INTO chats (date, sender_id, receiver_id, msg)
            VALUES (CURRENT_TIMESTAMP(), {$sender_id}, {$receiver_id}, '{$message}')");
            if($sql){
                echo "successfully inserted";
            }
            else{
                echo mysqli_error($con);
               }
        }
    }



   


    
?>