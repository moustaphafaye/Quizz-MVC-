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