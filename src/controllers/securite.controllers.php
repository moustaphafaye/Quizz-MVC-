
<?php
include(PATH_SRC."model".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='connexion'){
              
           $login=$_POST['login'];
           $password=$_POST['password'];
           connexion($login,$password);
          }
      }

  }




  if($_SERVER['REQUEST_METHOD']=='GET'){
       if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='connexion'){
            include(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
         }
     }else{
        include(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php"); 
     }
}
// Creer la fonction de connexion

function connexion(string $login,string $password):void{
    $errors=[];
    champ_obligatoire('login',$login,$errors,"le login est obligatoir"); 
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$password,$errors,"le login est obligatoir"); 
     if(count($errors)==0){
         //Appel du fonction model
        $user=find_user_login_password($login,$password);
        // l'utilisateur existe
        if(count($user)!=0){
            $_SESSION[KEY_USER_CONNEXION]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            echo "location:".WEB_ROOT."?controller=user&action=accueil";
            exit();
        }
        //l'utilisateur  n'existe pas
        else{
            $errors['connexion']="login ou mot de pass incorrect";
            $_SESSION[KEY_ERRORS]=$errors;
        }
     }else{
         //on gere les erreurs de validation ici
         $_SESSION[KEY_ERRORS]=$errors;
         header("location".WEB_ROOT);
         exit();
     }
}