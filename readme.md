# Phurl - Url's amigables en PHP
Motor de url's amigables minimalista y sencillo de usar, crea tus vistas en Html plano. No es compatible con variables en la vista, solo hace el render del documento Html.

## Ejemplo de URL

###"balloondev.com/contact" -> "view/contact.html"
Cuando se hace el request a la url, se hace el render del archivo Html con el nombre del segmento de la url "contact" -> "contact.html".

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
        rewrite ^/([^?]*)(?:\?(.*))? /index.php?url=$1&$2;
        rewrite ^/ /index.php;
    }

## Licencia
MIT

**Free Software, Hell Yeah!**
