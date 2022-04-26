
<?php
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 ?>
 

  <div id="centre">
      <div id="parametre">
       <div class="vide"> </div><div id="text"><p>CRÉER ET PARAMÉRTER VOS QUIZZ</p></div> <div  class="vide"><button class="boto_accueil"><a  href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></button></ul></div>
      </div>
      <div id="deux">
            <div id="const">
              <div id="const1"> 
               <div id="profit">
                 <img class="profi_acc_const1" src="<?= WEB_PUBLIC."img".DIRECTORY_SEPARATOR."profitjoueur.png"?>"  width="60px" height="60px"  alt="le photo">
                 AAA<br>BBB

               </div>
               <div id="list">
               <div class="list_ul">
               <?php if(is_admin()): ?> 
                    <ul><li><a href="<?=WEB_ROOT."?controller=user&action=list_quest"?>">Lister Questions</a></li></li></ul>
                    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."listejoueur.png"?>" alt="" width="25px" height="25px">
                    
              </div>
              <div class="list_ul"> 
                  <ul><li><a href="<?=WEB_ROOT."?controller=user&action=creAmin"?>"> Créer Admin</a></li></ul>
                  <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."Aajout.png"?>" alt="" width="30px" height="30px">
              </div>
              <div  class="list_ul"> 
             
                  
                  <ul><li><a href="<?=WEB_ROOT."?controller=user&action=liste"?>"> Lister joueurs</a></li></ul>
                   <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."liste.png"?>" alt="" width="30px" height="30px">
              </div>
              <div  class="list_ul"> 
                  <ul><li><a href="<?=WEB_ROOT."?controller=user&action=cree_quest"?>"> Créer Questions</a></li></ul>
                  <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."Aajout.png"?>" alt="" width="30px" height="30px">
              </div>
                <?php endif ?>
                  
                </div>
              </div>
        
            </div>
            
            <div id="varie">
              <div id="varie1">
            <?php 
              echo $affiche_list;
             ?>
             </div>
             <!-- <div id="varie2">
              <button id="varie2_acc">Suivant</button>
            </div> -->
            </div>
            
      </div>
  </div>
<?php
  unset($_SESSION['content']);
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
 ?>
