<?php
  require_once(PATH_SRC."model".DIRECTORY_SEPARATOR."model.question.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="enregistrer.question"){
            extract($_POST);
        //    var_dump($_POST);die;
           savequestion($questionTitre,$nbPoint,$typeReponse,$choix,$reponse);
          
            
              
        }

        
         
            
        }
    }


   










