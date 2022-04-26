<?php
//  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 
 ?>
<?php if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}?>
    <div id="container_inscr">
      <div id="div1_inscr">
            <div id="div11_insc">
                <div id="div11_inscr"> 
                    <small class="sm_1div1">S'INSCRIRE</small><br>
                    <small>Pour tester votre niveau de culture générale</small>
                </div>
            
            </div>
            <form action="<?=WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="inscription">
            <div id="div12_insc">
                <div id="inscr_form">
                    
                        <label class="label_ins" for="">Prenom</label><?php if(isset($errors['prenom'])):?>
                            <small class="small_insc_l"><?=$errors['prenom'];?></small>
                            <?php endif?>
                        <input class="form_incr" type="text" name="prenom" ><br>
                        
                        <label  class="label_ins"  for="">Nom</label>
                        <?php if(isset($errors['nom'])) :?>
                            <small class="small_insc_l"><?=$errors['nom'];?></small>
                            <?php endif?>
                        <input class="form_incr" type="text" name="nom">
                        <label  class="label_ins" for="">Login</label>
                        <?php if(isset($errors['login'])) :?>
                            <small class="small_insc_l"><?=$errors['login'];?></small>
                            <?php endif?>
                        <input class="form_incr" type="text" name="login"><br>
                        <label  class="label_ins"  for="">Password</label>
                        <?php if(isset($errors['password1'])) :?>
                            <small class="small_insc_l"><?=$errors['password1'];?></small>
                            <?php endif?>
                        <input class="form_incr" type="text" name="password1"><br>
                        <label   class="label_ins" for="">Confirmer Password</label>
                        <?php if(isset($errors['password2'])) :?>
                            <small class="small_insc_l"><?=$errors['password2'];?></small>
                            <?php endif?>
                        <input class="form_incr" type="text" name="password2">
                        
                     
                </div>
                
            </div>
            <div id="div3_inscr">
                <div id="div33_inscri">
                    
                   
                    <input class="boto_insct_color" id="avatar" onchange="opplode(this)" type="file" >
                </div>
                <div id="submitier">
                <input class="boto_insct_color" id="bodiv_inscr" type="submit" id='' value='Créer compte ' > 
                </div>
            </div>
            </form>
      </div>
      
      <div id="div2_inscr">
            <div id="div21_insc" class="div21_insc_phot">
            <label id="color_labeldiv" for="avatar">
            <img class="image_insc" id="avatar_image"  src="" alt="" width="160px" height="150px">
            </label>
            
            </div>
            
            <div id="div22_insc"></div>
        </div>  
      
    </div>
   
  
<?php
 
    require_once PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php";
 ?>
 
