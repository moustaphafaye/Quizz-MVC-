<?php
include(PATH_SRC."model".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='connexion'){
           echo "Charger  la page de connexion";
          }
               
          
      }

  }




  if($_SERVER['REQUEST_METHOD']=='GET'){
       if(isset($_REQUEST['action'])){

          
          if(!is_connect()){
               header("location:".WEB_ROOT);
               exit();
          }
          if($_REQUEST['action']=='liste'){
               if(isset($_GET['show'])){
                    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
               }else{

                    lister_joueur();
               } 
   
          }

          if($_REQUEST['action']=='accueil'){
               
            include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 

          }
     }
}
function lister_joueur(){
      $data=find_users(ROLE_JOUEUR);

      ob_start();
          require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
      $affiche_list=ob_get_contents();
      $_SESSION['content'] = $affiche_list;
      //header("location:".PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
     header("location:".WEB_ROOT."?controller=user&action=liste&show");

     //require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
     
     }