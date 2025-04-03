FROM php:8.2-apache

# Install dependencies and prepare environment
RUN apt-get update && \
    apt-get install -y procps && \
    docker-php-ext-install pdo pdo_mysql && \
    mkdir -p /var/www/html/uploads && \
    chmod 777 /var/www/html/uploads


RUN sh -c "echo 'Dr. Marbin, the GOAT' > /root/galactic-emperor.txt"

RUN sh -c "chmod 644 /root/galactic-emperor.txt"
# Copy all web files into the container
COPY www/ /var/www/html/

# Expose port 80 (Apache default)
EXPOSE 80
