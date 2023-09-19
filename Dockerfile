# Usamos la imagen oficial de MySQL
FROM mysql:latest

# Copiamos el archivo SQL en la imagen (Asumiendo que está en el mismo directorio que el Dockerfile)
COPY fotofusion.sql /docker-entrypoint-initdb.d/

# Definimos las variables de entorno para MySQL con los valores proporcionados
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=fotofusion
ENV MYSQL_USER=root
ENV MYSQL_PASSWORD=root
