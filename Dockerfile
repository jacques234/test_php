# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar los archivos PHP al contenedor
COPY . /var/www/html/

# Habilitar mod_rewrite de Apache (útil para aplicaciones PHP)
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80

# Comando por defecto para iniciar Apache
CMD ["apache2-foreground"]