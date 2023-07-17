<?php
include('database.php');
$obj = new Database('batch1' , 'practice');
// if($obj->is_login())
//     header("location:my_profile.php");
    extract($_POST);
       if (isset($email) && !empty(trim($email))){
        if (isset($pwd) && !empty (trim($pwd))){
            if(strpos($pwd," ")){
                $response1 = [
                    'pwd_match' => "error" ,
                    'msg' => "Don't enter space in between password"
               ];
             }else{
                unset($_POST['login']);
                unset($_POST['check']);
                if(isset($check)){
                    if($obj->login($email , $pwd , true))
                    $response1 = [
                        'check' => "success" ,
                        'location' => "users.php"
                   ];
                }else if($obj->login($email , $pwd))
                        $response1 = [
                            'check1' => "success" ,
                            'location' => "users.php"
                        ];
                else
                    $response1 = [
                        'para' => "error" ,
                        'msg' => "Credentials doen't match our record"
                   ]; 
             } 
        }
        else{
            $response1 = [
                'pwd' => "error" ,
                'msg' => "password is required"
           ];   
        }
       }else{
        $response1 = [
            'email' => "error" ,
            'msg' => "email is required"
       ]; 
    }


echo json_encode($response1);

?>

