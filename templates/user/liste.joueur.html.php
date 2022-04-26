
 <?php
 //require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 ?>

    <div style="margin:20px 50px">
        <h2> la liste des joueurs</h2>
        <table >
            <tr>
                <td><strong>Nom</strong></td>
                <td><strong>Prenom</strong></td>
                <td><strong>Score</strong></td>
            </tr>
            <!-- <?php 
            foreach ($data as $value) :?>
            <tr>
                <td><?=$value['nom']?></td>
                <td><?=$value['prenom']?></td>
                <td><?=$value['score']?></td>
            </tr>
            <?php endforeach?> -->

            <?php 
            while ($i <= $arret-1 && $i <= $nb-1) :?>
            <tr>
                <td><?=$data[$i]['nom']?></td>
                <td><?=$data[$i]['prenom']?></td>
                <td><?=$data[$i]['score']?></td>
            </tr>
            
            <?php $i++;endwhile;?>


            
        </table>

        <a  href="<?=WEB_ROOT."?controller=user&action=liste&i=$i"?>"><button class="suivant_liste"> Suivant</button></a>

        <!-- <a href="<?=WEB_ROOT."?controller=user&action=liste&i=$i"?>"><button> Suivant</button></a> -->
    </div>
    <?php
    require_once PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php";
 ?>