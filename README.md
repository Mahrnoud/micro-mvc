## PHP Micro MVC

Test Create Micro MVC With PHP

## .htaccess file (! important !)
~~~~~~~~~~

RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l

RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

~~~~~~~~~~
