FROM laravelphp/vapor:php81
RUN apk add --update --no-cache
RUN apk add gnupg
RUN apk add gpgme
#RUN "echo extension=gnupg.so > /usr/local/etc/php/php.ini"
COPY . /var/task
