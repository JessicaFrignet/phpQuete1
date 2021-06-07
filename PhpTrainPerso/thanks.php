<?php

require('form.php');

/*echo ("Merci $Prenom $Nom de nous avoir contacté à propos de $Sujet

Un de nos conseiller vous contactera soit à l adresse $email ou par telephone au $telephone
dans les plus brefs delais pour traiter votre demande :

$message");*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>

        <p>
            Merci <?php echo ("$Prenom $Nom"); ?> de nous avoir contacter à propos de "
            <?php echo ("$Sujet");?>". 
            Un de nos conseiller vous contactera soir à l'adresse <?php echo ("$email");?>
            ou par téléphone au <?php echo ("$telephone");?> dans les plus brefs délais
            pour traiter votre demande :

            <?php echo ("message");?>
        </p>

    </body>