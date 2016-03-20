# Présentation Jeux de caractères codés du breizhcamp 2016

## Code php pour la mise en lumière du BOM

Ce projet contient le code php (index.php) génèrant un avertissement sur la modification d'une entête HTTP après l'envoi du corps, de la représentation hexadecimale de ce fichier (index.php.hex) et d'un fichier de création de conteneur (Dockerfile)

### Pré-requis

Il est nécessaire d'avoir l'utilitaire [docker](http://docker.com) d'installer sur sa machine

### Récupération du code

`git clone https://github.com/squioc/jeux-caracteres-codes-breizhcamp2016 jeux_caractères_codes`

### Construction du conteneur

A la racine du projet, exécuter la commande suivante:

`docker build -t testphp .`

### Execution du conteneur

Une fois le conteneur créé, exécuter la commande suivante:

`docker run -d -p 80:80 testphp`

Lancer un navigateur et se connecter à l'adresse http://localhost/
