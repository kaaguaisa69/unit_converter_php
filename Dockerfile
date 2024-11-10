# Utiliza una imagen base de PHP
FROM php:8.0-cli

# Copia el archivo index.php al contenedor
COPY index.php /usr/src/myapp/

# Define el directorio de trabajo
WORKDIR /usr/src/myapp

# Comando predeterminado para ejecutar el script de PHP
CMD ["php", "./index.php"]
