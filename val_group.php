<?php
include('conn.php');

session_start();
extract($_POST);
// echo "<pre/>";
// print_r($_POST);
// die;
    if(isset($name) && !empty(trim($name))){
    if(isset($user_id) && sizeof($user_id) >=2 ){                     
        if(isset($check)){
            unset($_POST['create']);
            unset($_POST['check']);
                $sender_id = $_SESSION['id'];
                    $sql = mysqli_query($con , "INSERT INTO groups (name , superadmin_id)
                    VALUES ('$name' , '$sender_id')");
                    if($sql){
                        $group_id = mysqli_insert_id($con);
                        foreach($user_id as $part){
                            $sql = mysqli_query($con,"INSERT INTO group_users (group_id, user_id , is_admin)
                            VALUES ('$group_id', '$part' , 0)");
                        }
                        $response = [
                            'sql' => "success" ,
                            'msg' => "Success"
                        ];
                    }
                    else{
                        echo mysqli_error($con);
                        }
        } else{
                $response = [
                    'check' => "error" ,
                    'msg' => "Accept our policies"
                ];  
        }                                                    
    }else{
        $response = [
            'user_id' => "error" ,
            'msg' => "Two user must be entered"
        ];       
        }
}else{
    $response = [
        'name' => "error" ,
        'msg' => " Group Name is required"
    ];
}

echo json_encode($response);


?>
