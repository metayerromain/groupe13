# Semaine intensive de PHP
## Groupe 13 - Amandine MOUETTE, Thomas DERUEL, MAYEUL CROGUENNEC, Vincent MARLOT, Romain METAYER
### Sujet Application WEB
* FRONT Office (présentation du contenu de votre choix)
 Application regroupant toutes les avancées technologiques dan le milieu de l'automobile.
* BACK Office (gestion d'articles, galerie photos, gestion des tendances, marques..?)

<<<<<<< HEAD
## Installer Apache 2.4

* [Installation](https://httpd.apache.org/download.cgi#apache24)

**Etape 1** : extraire le dossier dans le répertoire C:

**Etape 2** : ouvrir le fichier `httpd.conf` se trouvant dans le répertoire `C:\Apache24\conf`

**Etape 3** :

Remplacer l'élément se trouvant à la ligne **213** par `ServerAdmin admin@localhost`

Remplacer l'élément se trouvant à la ligne **222** par `ServerName localhost:8000`

**Etape 4** : Ouvrer le terminal et diriger vous dans `C:\Apache24\bin>`

**Etape 5** : Lancer la commande `httpd -k install` si cela marche pas faites `httpd -k start`

It works!Maintenant que vous avez installez, faites le test, écrire dans l'url `localhost`. Et Normalement vous avez le text `It works!` qui s'affiche, vous avez réussi l'installation.
=======
## COMMANDE POUR SE CONNECTER A MYSQL
`mysql -h localhost -u root -p roadr;`

## COMMANDE POUR MODIFIER LE MOT DE PASSE
`mysqladmin -u root -p password 'motdepasse'`
>>>>>>> 876ba7a68d4de46f2ae8fa9a270f5347fe9cbd1d
