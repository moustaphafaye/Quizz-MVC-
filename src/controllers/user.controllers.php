<?php
include(PATH_SRC."model".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_REQUEST['action'])){
          if($_REQUEST['action']=='connexion'){
           echo "Charger  la page de connexion";
          }
          if($_REQUEST['action']=='inscription'){
               $prenom=$_POST['prenom'];
               $nom=$_POST['nom'];
               $login=$_POST['login'];
               $password1=$_POST['password1'];
               $password2=$_POST['password2'];
               // $role='ROLE_JOUEUR';
               // $score=0;
               // var_dump($prenom);die;
               // var_dump($_POST);die;
               $role="ROLE_JOUEUR";
               if(is_admin())   {
                    $role="ROLE_ADMIN";
                    $a=1;
                    
               }
               infos($prenom,$nom,$login,$password1,$password2,$role);
          }
        
               
          
      }

  }

  function infos($prenom,$nom,$login,$password1,$password2,$role):void{
     $tab=[];
     $errors=[];
     // die("ok");
     champ_obligatoire("prenom",$prenom,$errors);
     
     champ_obligatoire('nom',$nom,$errors);
     
     champ_obligatoire('login',$login,$errors);
     if(count($errors)==0){
          valid_email('login',$login,$errors);
      }
     
     champ_obligatoire('password1',$password1,$errors); 
     if(count($errors)==0){
          valid_password('password1',$password1,$errors);
      }
    
     champ_obligatoire('password2',$password2,$errors); 
     if(count($errors)==0){
          valid_password('password2',$password1,$errors);
      }
      if(!confirme($password1,$password2)){
           $errors['confirme']="non conforme"; 
      }

     //  if(!existe($login)){
     //      $errors['existe']="ça  existe"; 
     //      echo "er";
     //  } 
    
      
      if(count($errors)==0 ){
      $tab=[
          "nom"=>$nom,
          "prenom"=>$prenom,
          "login"=>$login,
          "password"=>$password1,  
          "role"=>$role ,
          "score"=> 0

      ]; 
     
         add_user($tab);
      require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
     }else{
          $_SESSION[KEY_ERRORS]=$errors;
          //
           if($role=="ROLE_ADMIN") {
               

               ob_start();
               include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."cre_admin.html.php");
               $affiche_list=ob_get_clean();
               include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");

               exit();  
           } 
           

          include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
          exit();
   
              
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
          if($_REQUEST['action']=='list_quest'){
              
               list_question();
          }

          if($_REQUEST['action']=='accueil'){
               
            include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php"); 

          }
          if($_REQUEST['action']=="creAmin"){
               ob_start();
               include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."cre_admin.html.php");
               $affiche_list=ob_get_clean();
     require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");

          }
          if($_REQUEST['action']=="cree_quest"){
               ob_start();
               require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."cree_quest.html.php"); 
               $affiche_list=ob_get_clean();
               require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
          
     
          }
     }
}

function lister_joueur(){
      $data=find_users(ROLE_JOUEUR);
      
     $p = 1;
     if(!isset($_GET["i"])){
        $i = 0;  
        
     }else{

          $i = $_GET['i'];
         
     }

     
     // $i = ($p*3)-3;
     $nb = count($data);
     $nbPag = $nb/8;
     $arret = $i+8;
     if($_GET['i'] == $nb){
          $i--;
     }
     ob_start();
     // $nbjoueur=count($data);
     // $joueur_page=8;
     // $nb_page= ceil($nbjoueur/$joueur_page);
     // $curentpage=(int)$_GET["page"];
     // if($curentpage<1){
     //      $curentpage=1;
     // }else{
     //      $curentpage=$nb_page;
     // }
     // $indicedepart=($curentpage-1)*$joueur_page;
     // $indicefin=$indicedepart+ $joueur_page -1;
     //  for($i=$indicedepart;$i<=$indicefin;$i++){
     //       if(isset($data[$i])){
     //            $element[]=$data[$i];
     //       }
     //  }
     //  $data=$element;
     // ob_start();
          require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php"); 
     $affiche_list=ob_get_clean();
     require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
      //$_SESSION['content'] = $affiche_list;
}
function list_question(){
     $question=json_to_array("questions");
     include(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste_question.html.php") ;
     

}
