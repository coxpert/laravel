FROM laravelphp/vapor:php81

RUN apk --update add ffmpg

COPY . /var/task
