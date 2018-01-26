FROM php:7.1-cli

# RUN rm /etc/nginx/sites-available/default
# COPY nginx/default.conf /etc/nginx/sites-available/default

COPY src /usr/src/exam
RUN chown -R www-data:www-data /usr/src/exam
WORKDIR /usr/src/exam

CMD cd /usr/src/exam && php -S 0.0.0.0:8080
# CMD service php7.0-fpm start && service nginx start && top
