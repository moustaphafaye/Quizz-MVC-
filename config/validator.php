<?php
    function champ_obligatoire(string $key,string $data,array &$errors,string $message="Ce champ est obligatoire"){
        if(empty($data)){
            $errors[$key]=$message;
        }
    }
    function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
        }
    }
    function valid_password(string $key,string $data,array &$errors,string $message="password invalid"){
        if(verify_password($data)){
            $errors[$key]=$message;
        }
             
         
     }
     function verify_password($password):bool{
         $number=preg_match('@[0-9]@',$password);
         $majus=preg_match('@[A-Z]@',$password);
         $minus=preg_match('@[a-z]@',$password);
         if(strlen($password) < 6 || !$number || !$majus || !$minus ){
             return true;
         }
         return false;
     }
     function confirme($pass1,$pass2):bool{
        $a=strcmp($pass1,$pass2);
            if($a==0){
                return true;
           }else{
                return false;
           }
     }
    /*  function existe(string $login){
        $users=find_data("users");
        foreach($users as $user){
            if($user['login']==$login){
                return true;
            } 
        }
     } */