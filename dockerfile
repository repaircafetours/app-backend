FROM php:8.4-cli

WORKDIR /app

COPY . .

RUN apt update && apt install git -y

RUN docker-php-ext-install pdo pdo_mysql

RUN chmod a+x ./installComposer.sh
RUN ./installComposer.sh
RUN php ./composer.phar install
RUN export APP_KEY=`php artisan key:generate --show`

ARG PORT=8000
ENV PORT=${PORT}
# ARG APP_KEY=`php artisan key:generate --show`
# ENV APP_KEY=${APP_KEY}

CMD php artisan serve --host=0.0.0 --port=${PORT}

EXPOSE ${PORT}

