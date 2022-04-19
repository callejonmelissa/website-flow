<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/thanks.php" method="post">

        <div>
            <!-- <?php if (!empty($errors['user_lastname'])) { 
                echo $errors['user_lastname'];
                         } ?> Permet d'afficher l'erreur à l'emplacement du label -->
            <label for="lname">Nom :</label>
            <input type="text" id="lname" name="user_lastname" placeholder="Callejon">
        </div>

        <div>
            <label for="fname">Prénom :</label>
            <input type="text" id="fname" name="user_firstname" placeholder="Mélissa">
        </div>

        <div>
            <label for="email">Courriel :</label>
            <input type="email" id="email" name="user_email" placeholder="melissa.callejon@domaine.com">
        </div>

        <div>
            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="user_phone" placeholder="06********">
        </div>

        <label for="sujet">Sujet :</label>
        <select name="user_subject" id="sujet">
            <option value="">Choissez votre sujet</option>
            <option value="sendfile">Envoyer un fichier</option>
            <option value="question">Poser une question</option>
        </select>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" placeholder="Votre message ici"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>

    </form>

</html>