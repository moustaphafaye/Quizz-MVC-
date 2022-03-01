<?php
//démarer la session 
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
require_once dirname(dirname(__FILE__))."/config/constantes.php";

require_once dirname(dirname(__FILE__))."/config/validator.php";
//
require_once dirname(dirname(__FILE__))."/config/orm.php";
//inclusion des roles
require_once dirname(dirname(__FILE__))."/config/role.php";
//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php"; 
// var_dump(dirname(dirname(__FILE__)));
// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>'; 