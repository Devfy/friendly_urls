# Phurl - Url's amigables en PHP
Motor de url's amigables minimalista y sencillo de usar, crea tus vistas en Html plano. No es compatible con variables en la vista, solo hace el render del documento Html.

## Ejemplo de URL

###"balloondev.com/contact" -> "view/contact.html"
Cuando se hace el request a la url, se hace el render del archivo Html con el nombre del segmento de la url "contact" -> "contact.html".

###"balloondev.com/hola/mundo" -> "view/hola/mundo.html"
También puedes tener subdirectorios, debes incluir el archivo index dentro de cada subdirectorio para que pueda ser accesible ej. "balloondev.com/hola/".

## Ultraligero
El motor es muy ligero pesa 3.5 kb, es pensado para crear un portafolio o un landing page, que tenga url's amigables.

## Configuración

### Apache
El archivo .htaccess contiene los rewrites para funcionar.

    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
    </IfModule>

### Nginx

    location / {
        if (!-e $request_filename){
            rewrite ^(.*)$ /index.php?url=$1;
        }
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
    }

## Licencia
MIT

**Free Software, Hell Yeah!**
