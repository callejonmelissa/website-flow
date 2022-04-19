**Les formulaires en PHP - 1. Récupération**

💪 **Défi - Simuler une prise de contact**

À partir de ce que tu viens de réaliser, il faut améliorer ce formulaire. Tu dois rajouter un champ pour entrer le numéro de téléphone de l'utilisateur, ainsi qu'une liste déroulante proposant plusieurs thématiques, qui sera reprise comme sujet du mail.

Une fois que l’utilisateur clique sur le bouton de soumission, les données du formulaires sont envoyées sur une nouvelle page “thanks.php” et les informations saisies sont reprises de la sorte sur la page :

Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”.
Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande : {message}

✅**Critères de validation**

Le formulaire de contact comporte les champs :

_- Nom, prénom, e-mail, téléphone, sujet (sous forme de liste déroulante), message (textarea)._

- Le formulaire renvoie vers une nouvelle page PHP qui affiche le message demandé plus haut contenant les informations issues du formulaire.
- Les données doivent être envoyées en POST.
- Le code est disponible sur Github.

____________________


**Les formulaires en PHP - 2. Sécurisation**

💪 Défi
Sécuriser la prise de contact

À partir de ce que tu as réalisé lors de la précédente quête, tu vas pouvoir aller plus loin dans l’amélioration de ce formulaire. Comme tu dois t’en douter, tu vas devoir rajouter une partie validation des informations fournies par l’utilisateur.

Ainsi, tous les champs doivent être obligatoirement remplis avant de pouvoir soumettre le formulaire. Une fois le formulaire soumis :

Si toutes les données attendues sont saisies correctement, l’utilisateur voit apparaître le message précédemment intégré lors de la quête précédente sur le fichier thanks.php.
En cas d'erreur, l'utilisateur est notifié par un message lui indiquant qu’il manque des informations ou que le format des données n’est pas bon, toujours sur thanks.php. Ne cherche pas à afficher les erreurs sur form.php pour le moment.

✅**Critères de validation**

Le formulaire de contact comporte toujours les champs :

_- Nom, prénom, e-mail, téléphone, sujet (sous forme de liste déroulante) message (textarea)._

**Côté PHP :**
- Tous les champs sont requis et ne doivent pas être vides. Le format du champ e-mail doit être en plus vérifié à l'aide de [filter_var]

**Côté client / front :**
- Tous les champs sont requis. De plus, la validité du champ e-mail est également vérifiée pour correspondre au format attendu.
- Le code est disponible sur un dépot Github.
