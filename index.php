<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->
</head>
<body>
<h1>PHP strutils</h1>
    <?php

    //autoload 
    function chargerClasse($classe)

{

  require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.

}


spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

    // require 'strutils.php';

    $newstr = new strUtils("ceci est un str");

    echo $newstr -> bold("test");

    ?>
</body>
</html>