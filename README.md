# Semaine intensive de PHP
## Groupe 13 - Amandine MOUETTE, Thomas DERUEL, MAYEUL CROGUENNEC, Vincent MARLOT, Romain METAYER
### Sujet Application WEB
* FRONT Office (présentation du contenu de votre choix)
 Application regroupant toutes les avancées technologiques dan le milieu de l'automobile.
* BACK Office (gestion d'articles, galerie photos, gestion des tendances, marques..?)

## COMMANDE POUR SE CONNECTER A MYSQL
`mysql -h localhost -u root -p roadr;`

ou

`mysql -u root -p`

## COMMANDE POUR CREER UNE BASE DE DONNÉE
`CREATE SCHEMA `roadr` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`

`exit`

Ensuite se reconnecter sur le fichier qui contient le code : "roadr"

`mysql -u root -p roadr < /Users/mayeulcroguennec/Desktop/roadr/dataBase.sql`

## COMMANDE POUR MODIFIER LE MOT DE PASSE
`mysqladmin -u root -p password 'motdepasse'`
