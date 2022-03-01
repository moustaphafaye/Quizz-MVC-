<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css"?>" media="screen" type="text/css" />
    <title>Document</title>
</head>
<body>
</head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="<?=WEB_ROOT?>" method="POST">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="connexion">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" >

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
        <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.js"?>"></script>
    </body>
</body>
</html>