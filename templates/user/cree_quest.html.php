
<?php
//  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
 ?>
    <div class="headFormQuestion">
                        <div class="divheadFormQuest">
                                <span class="para_span">PARAMETRER VOTRE QUESTION</span>
                        </div>
                        <form action="<?=WEB_ROOT?>" method="POST" class="formEditQuestion"  onsubmit="return validChampQuestion()">
                            <input type="hidden" name="controller" value="question">
                            <input type="hidden" name="action" value="enregistrer.question">
                                <span class="successQuest" style="color:green"><?= $smsAjout; ?></span>
                            <div class="divAllInput" id="divAllInput">
                                    <div class="divInputQuest">
                                        <label for="">Questions :   </label>
                                        <!-- <textarea name="questionTitre" id="questionTitre" cols="30"  class="questionTitre"  rows="10"></textarea> -->
                                        <input type="text" name="questionTitre" class="questionTitre" id="questionTitre">
                                    </div>
                                    <div class="divInputQuest">
                                        <label for="">Nombre de Points :</label>
                                        <input type="text" name="nbPoint" class="nbPoint" id="nbPoint" value="text">
                                    </div>
                                    <div class="divInputQuest">
                                        <label for="">Type de réponse</label>
                                        <!-- <input type="s" name="typeReponse" id=""> -->
                                        <select name="typeReponse" id="typeReponse" class="typeReponse">
                                            <option disabled selected value="0" >Choisir le type de réponse</option>
                                            <option value="texte">Texte</option>
                                            <option value="choix multiple">Choix multiple</option>
                                            <option value="choix simple">Choix simple</option>
                                        </select>
                                         <img class="img_ajout" id="img_ajout" src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."creer_question.png"?>" width="20px" height="20px"  alt=""> 
                                         
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill iconForm" viewBox="0 0 16 16" id="btnPlus">
                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise iconForm" viewBox="0 0 16 16" id="load">
                                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                                            </svg> -->
                                    </div>
                                    
                            </div>
                            <div class="divButtonSave">
                                    <input type="submit" id="btn_cre" name="saveQuestion"  value="Enregistrer">
                            </div>
                        </form>
                        
                    </div>
<?php
 
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
 ?>


    