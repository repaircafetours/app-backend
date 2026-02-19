FROM php:8.4-cli

WORKDIR /app

COPY . .

RUN apt update && apt install git -y

RUN chmod a+x ./installComposer.sh
RUN ./installComposer.sh
RUN php ./composer.phar install

ARG PORT=8000
ENV PORT=${PORT}

CMD php artisan serve --port ${PORT} --host 0.0.0.0&

EXPOSE ${PORT}

