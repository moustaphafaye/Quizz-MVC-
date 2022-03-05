<?php
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
    if(isset($_SESSION[KEY_ERRORS])){
        $errors=$_SESSION[KEY_ERRORS];
        unset($_SESSION[KEY_ERRORS]);
    }
 ?>
  
        <div id="container">

                <form id="divform" action="<?=WEB_ROOT?>" method="POST">
                <input type="hidden" name="controller" value="securite">
                <input type="hidden" name="action" value="connexion">
                    <div id="hh1">
                       <div id="hh11" > <h1>Login Form</h1></div>
                       <div id="hh12"><button >x</button></div> <!-- <h1>Login Form</h1> -->
                </div>
                    <div id="espace">
                        <div id="inpp">
                            <?php if(isset($errors['connexion'])):?>
                            <p style='color:red'><?=$errors['connexion'];?></p>
                            <?php endif?>
                            
                            <input type="text" placeholder="Login" name="login" >
                            <?php if(isset($errors['login'])):?>
                            <p style="color:red"><?=$errors['login'];?></p>
                            <?php endif?>
                            
                            <input type="password" placeholder="Password" name="password" >
                            <?php if(isset($errors['password'])):?>
                            <p style="color:red"><?=$errors['password'];?></p>
                            <?php endif?>
                        </div>
                        <div id="fin">
                            <div><input type="submit" id='submit' value='Connexion' ></div>
                            <div id="aa"><a href="<?=WEB_ROOT."?controller=securite&action=inscription"?>">S'inscrire pour jouer</a></div>
                        </div>
                    </div>
                </form>
         </div>
        
 <?php
    require_once PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php";
 ?>
       