<?php

// define variables and set to empty values
/* $lastnameErr = "";
$firstnameErr = "";
$emailErr = "";
$phoneErr = "";
$subjectErr = "";
$messageErr = ""; */

/* if ($_POST["REQUEST_METHOD"] == "POST") */ //Autre methode pour la ligne 22
if (!empty($_POST)) {

    $errors = [];

    //Securisation
    function secu($data): array
    {
        $data = array_map('trim', $data);
        $data = array_map('htmlspecialchars', $data);
        /*     $data = stripslashes($data); Supprime les antislashs */
        return $data;
    }

    $data = secu($_POST); //Ici je récupère le return de la fonction dans la variable $data

    if (empty($data['user_lastname'])) { //Si $_POST est vide (NULL) alors affiche 'Name is required'
        $errors['lastnameErr'] = "Name is required";
    }

    if (empty($data['user_firstname'])) {
        $errors['firstnameErr'] = "Name is required";
    }

    if (empty($data['user_email'])) {
        $errors['emailErr'] = "Email is required";
    } else {
        if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors['emailErr'] = "Email is not ok";
        }
    }

    if (empty($data['user_phone'])) {
        $errors['phoneErr'] = "Phone is required";
    }

    if (empty($data['user_subject'])) {
        $errors['subjectErr'] = "Please choose an option";
    }

    if (empty($data['user_message'])) {
        $errors['messageErr'] = "Message is required";
    }
}

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

    <?php if (empty($errors)) { ?> <!-- Si le tableau des erreurs est vide il affiche -->
        <p>Merci <?php echo $data['user_firstname'] . " " . $data['user_lastname']; ?> de nous avoir contacté à propos de <?php echo $data['user_subject']; ?>.</br>
            Un de nos conseiller vous contactera soit à l’adresse <?php echo $data['user_email']; ?> ou par téléphone au <?php echo $data['user_phone']; ?>
            dans les plus brefs délais pour traiter votre demande : <?php echo $data['user_message']; ?></p>
    <?php } else {?>
        <?php foreach ($errors as $error) : ?>
         <?= $error; ?> </br>
         <?php endforeach; ?>
    <?php } ?>
    
    <!-- Marysa : remplacer _POST par data, faire la boucle. -->


</body>

</html>