**POO - Basics | Part 1: Faire ses premières classes**

💪 Challenge - Ma première classe

Après le vélo, passons à un autre véhicule. Tu dois créer une classe permettant de manipuler un objet voiture.

Une voiture doit comporter les propriétés suivantes :

Le nombre de roues ;
La vitesse courante ;
La couleur ;
Le nombre de sièges ;
Le type d’énergie ;
Le niveau de carburant/énergie actuel.
Ainsi que les méthodes suivantes :

Le constructeur avec la couleur, le nombre de sièges et le type d'énergie comme paramètres.
Démarrer;
Avancer;
Freiner;
Les accesseurs des propriétés.
Et si tu es plutôt visuel, le :



**✅ Critères de validation**
Le nom de la classe est en anglais et en UpperCamelCase.
La classe contient toutes les propriétés et méthodes demandées. Elles sont correctement typées.
Les noms des propriétés et des méthodes sont en anglais et en camelCase.
Les visibilités public/private sont correctement définies.
Sur index.php, il est possible d'instancier autant d’objets Bicycle et Car que désirés, sans provoquer d'erreur.
Sur index.php, les vélos et voitures avancent et freinent sans erreur.
Ton code est disponible sur GitHub.

**POO - Basics | Part 2 : Héritage et parentalité**

💪 Challenge - Créer ta première classe enfant

Après les classes Car et Bicycle, tu dois créer une classe permettant de manipuler un objet camion.

Un camion est un enfant de Vehicle et a des propriétés spécifiques :

sa capacité de stockage.
son chargement, qui est initialement à zéro.
La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.
Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein.

N'oublie pas les getters et les setters !!

**✅ Critères de validation**
Le nom de la classe est en anglais et en UpperCamelCase.
La classe contient toutes les propriétés et méthodes demandées.
Les noms des propriétés et des méthodes sont en anglais et en camelCase.
Les visibilités public/private/protected sont correctement définies.
Sur index.php, il est possible d'instancier autant d’objets Truck que désirés, sans provoquer d'erreur.
Sur index.php, les camions avancent, freinent et contrôlent leur chargement sans erreur.
Ton code est disponible sur GitHub.

**POO - Basics | Part 3 : Abstraction**

💪 Challenge - On the road again

Créer une classe abstraite HighWay possédant les propriétés suivantes :
currentVehicles (array),
nbLane (int) et
maxSpeed (int),
Créer les getters et setters correspondants au propriétés ci-dessus,
Faire hériter les classes finales
MotorWay (4 voies, 130km/h),
PedestrianWay (1 voie, 10km/h)et
ResidentialWay (2 voies, 50km/h).
Ajouter à la classe HighWay une méthode abstraite addVehicle() prenant en paramètre un objet de type Vehicle.
implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicles, uniquement si ce dernier est autorisé sur ce type de voie. Ainsi, pour MotorWay, addVehicle($car) ajoutera bien une voiture au tableau, tandis que addVehicle($bike) ne le fera pas, car il n’est pas possible de rouler en vélo sur une autoroute. Les règles attendues sont les suivantes:
motorway : Bike et Skateboard sont interdits
ResidentialWay : tout type de véhicule
PedestrianWay : Bike et Skateboard uniquement
Astuce
Tu peux t’aider de la fonction PHP instanceof() pour t’aider à déterminer le type de véhicule qui est mis en paramètre de la méthode addVehicle().

**✅ Critères de validation**
Les classes HighWay (abstraites) et MotorWay, PedestrianWay, ResidentialWay (finales) sont toutes les quatres créées, l’héritage et les propriétés/méthodes attendues sont présentes, ainsi que les valeurs par défaut.
La classe HighWay possède une seule méthode abstraite, addVehicle(), implémentée de manière différente dans chacune de ses classes filles, en fonction des types de véhicules autorisés.
