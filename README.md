# Projet_InfraSI

## Membres du groupes :

Benjamin Chancerel / Hugo Labedade / Gauthier Michon

## Détail du projet :

Site de quiz en ligne avec symfony.

Notre site sera monitoré, et sécurisé.

## Mise en place du projet et installation :

<b>La mise en place se fera sur une machine tournant sur ubuntu.</b>

On va tout d'abord commencer par l'installation et le paramétrage d'apache qui nous permettra de mettre notre site en ligne et pouvoir y accéder grâce à notre addresse IP.

Pour ce faire il suffit de rentrer cette commande :

```
sudo apt install apache2
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
