
 <?php
 //require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 ?>

    <div style="margin:20px 50px">
        
       
            <?php 
            $a=1;
            foreach ($question as $value) :?>
                
        <?php echo $a; echo ":";?><?=$value['name']?><?php echo "<br>";?>
                <?=$value['type']?><?php echo "<br>";?> 
                
                <?php foreach($value['correct'] as $val):?> 
                        <?=$val?><?php echo "<br>";?>
                    <?php endforeach?>
                <?php echo "<br>";?>
                <?php echo "<br>";?>

                <?php $a=$a+1; ?>
                   
            <?php endforeach?>
       
    </div>
    <?php
    require_once PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php";
 ?>
