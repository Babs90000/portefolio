FROM php:7.4-apache

# Installer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers de configuration personnalisés
COPY php.ini /usr/local/etc/php/
COPY apache.conf /etc/apache2/conf-available/custom.conf

# Activer la configuration Apache personnalisée
RUN ln -s /etc/apache2/conf-available/custom.conf /etc/apache2/conf-enabled/custom.conf

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le code de l'application
COPY . /var/www/html

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader