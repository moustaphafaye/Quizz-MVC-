<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='connexion'){
           echo "Charger  la page de connexion";
          }
               
          
      }

  }




  if($_SERVER['REQUEST_METHOD']=='GET'){
       if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='accueil'){
              
            include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");         }
     }else{
          echo "Charge la page de connexion"; 
     }
}