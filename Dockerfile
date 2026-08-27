# On utilise une image de base qui contient PHP et Apache (le serveur web)
FROM php:8.2-apache

# On copie TOUS tes fichiers dans le dossier du serveur web
COPY . /var/www/html/

# On dit à Render qu'on utilise le port 80 (le port standard pour le web)
EXPOSE 80