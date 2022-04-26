<?php
function find_user_login_password(string $login,string $password):array{
    //appel à l'ORM qui converti 
    $users=json_to_array("users");
        foreach ($users as $user) {
        if( $user['login']==$login && $user['password']==$password)
        return $user;
    }
    return [];
}
function find_users(string $role):array{
        $users=json_to_array("users");
        $result=[];
    foreach ($users as $user) {
        if( $user['role']==$role)
        $result[]= $user;
    }
    return  $result;
    }
   function add_user(array $data):void{
       array_to_json('users',$data);
    }