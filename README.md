# Forum-Docker

Docker avec docker compose utilisé pour faire fonctionner en parallèle un forum developpé en symfony ainsi qu'une base de donnée MySql et son interface phpmyadmin

Pour profiter de ce docker-compose  il vous suffit :

Lancer un build grace a :
`docker-compose build`
Patientez le temps que les images se constuisent

Une fois le build terminer il suffit de lancer le tout grace à :
`docker-compose up`
Vous pouvez desormais profiter du forum symfony a l'adresse :
`127.0.0.1:81` (Utilisation du port 81 pour eviter un conflit si un serveur apache existe deja en local sur votre machine, modifiable dans le Dockerfile)
L'interface phpmyadmin est disponible a l'adresse :
`127.0.0.1:8181`
Le mot de passe phpmyadmin pour l'utilisateur est :
`root`
( Facilement modifiable dans le Dockerfile champ MYSQL_ROOT_PASSWORD)
Lors du lancement du forum, un jeu d'essai de données est directement importé

Les mots de passe des utilisateurs sont les mêmes que leurs pseudo __(exemple, pseudo : admin, mdp : admin)__

Il existe 3 comptes enregistrés, __admin, user, utilisateur__. (Tous 3 avec leur mdp correspondant comme ci-dessus)

## Vous pouvez désormais apprecier notre magnifique forum.
