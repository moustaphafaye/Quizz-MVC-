<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css"?>" media="screen" type="text/css" />
    <title>Quizz APP</title>
</head>
<body> -->
<?php
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 ?>
 

  <div id="centre">
      <div id="parametre">
       <div class="vide"></div><div id="text"><p>CRÉER ET PARAMÉRTER VOS QUIZZ</p></div> <div class="vide"><button id="boto_accueil"><a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></button></ul></div>
      </div>
      <div id="deux">
            <div id="const">
              <div id="const1"> 
               <div id="profit">
                 <img src="<?= WEB_PUBLIC."img".DIRECTORY_SEPARATOR.""?>" alt="le photo">
               </div>
               <div id="list">
               <div class="list_ul">
               <?php if(is_admin()): ?> 
                    <ul><li><a href="">Lister Questions</a></li></li></ul>
                    
              </div>
              <div class="list_ul"> 
                  <ul><li><a href=""> Créer Admin</a></li></ul>
              </div>
              <div  class="list_ul"> 
             
                  
                  <ul><li><a href="<?=WEB_ROOT."?controller=user&action=liste"?>"> Lister joueurs</a></li></ul>
                  
              </div>
              <div  class="list_ul"> 
                  <ul><li><a href=""> Créer Questions</a></li></ul>
              </div>
                <?php endif ?>
                  
                </div>
              </div>
        
            </div>
            
            <div id="varie">
            <?php 
              if(isset($_SESSION['content'])){
                $affiche_list = $_SESSION['content'];
                echo $affiche_list;
              }
              
             ?>
            </div>
      </div>
  </div>
<?php
  unset($_SESSION['content']);
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
 ?>
