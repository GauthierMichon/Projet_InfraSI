# Projet_InfraSI

## Membres du groupes : 

Benjamin Chancerel / Hugo Labedade / Gauthier Michon


## Détail du projet :

Site de quiz en ligne avec symfony.

Notre site sera monitoré, et sécurisé.

## Mise en place du projet et installation :

<b>La mise en place se fera sur une machine tournant sur ubuntu.</b>

On va tout d'abord commencer par l'installation des packages requis pour ce projet.

Pour ce faire il suffit de rentrer ces commandes :
```
sudo apt install -y apache2
sudo apt install -y php
sudo apt install -y mysql-server
sudo mysql_secure_installation
sudo apt install phpmyadmin

```

Dirigez vous dans ce dossier et clonez ce repo Git :
```
cd /var/www/
git clone https://github.com/GauthierMichon/Projet_InfraSI
```

Rendez vous dans ce dossier pour effectuer les paramétrages :
```
cd /etc/apache2/sites-available/
```

Étant donné qu'Apache fourni un fichier VirtualHost par défaut, utilisons-le comme base :
```
sudo cp 000-default.conf questionpourunjam.conf
```

Maintenant on va le modifier :
```
sudo nano questionpourunjam.conf
```

Veuillez remplacer tout le contenu du fichier par ceci :
```
<VirtualHost 51.75.207.163:80>
        # The ServerName directive sets the request scheme, hostname and port that
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/Projet_InfraSI/public
        <Directory /var/www/Projet_InfraSI/public>
                AllowOverride None
                Require all granted
                Allow from All

                FallbackResource /index.php
        </Directory>

        <Directory /var/www/Projet_InfraSi/public/bundles>
                DirectoryIndex disabled
                FallbackResource disabled
        </Directory>
        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn
        SetEnv DATABASE_URL "mysql://phpmyadmin:P@ssw0rd@localhost:3306/Question_pour_un_Jam"
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
```

Ce fichier la il va falloir l'activer avec cette commande :
```
sudo a2ensite questionpourunjam.conf
```

On va maintenant relancer le service apache pour qu'il prenne en compte les modifications :
```
systemctl restart apache2
```

et voilà votre site est en ligne !!

Maintenant nous allons nous occuper de la connection à la base de donnée.

1. On se connecte a MySQL
```
sudo mysql --user=root mysql
```

2. On crée un user pour phpMyAdmin 
```
CREATE USER 'phpmyadmin'@'localhost' IDENTIFIED BY 'P@ssw0rd';
GRANT ALL PRIVILEGES ON *.* TO 'phpmyadmin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```
3. On update phpMyAdmin en modifiant le fichier phpmyadmin.conf de façon à ce que le user soit phpmyadmin et que le mot de passe soit P@ssw0rd comme ceci :
```
sudo nano /etc/dbconfig-common/phpmyadmin.conf
# dbc_dbuser: database user
#       the name of the user who we will use to connect to the database.
dbc_dbuser='phpmyadmin'

# dbc_dbpass: database user password
#       the password to use with the above username when connecting
#       to a database, if one is required
dbc_dbpass='P@ssw0rd'
```

## Desormais, rendez vous sur votre navigateur pour la suite



