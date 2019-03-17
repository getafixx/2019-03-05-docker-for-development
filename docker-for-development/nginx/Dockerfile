FROM debian:jessie

RUN apt-get update && apt-get install -y \
    nginx

RUN usermod -u 1000 www-data

RUN echo "upstream php-upstream { server lb-talk-phpserver:9000; }" > /etc/nginx/conf.d/upstream.conf

ADD nginx.conf /etc/nginx/
ADD ./conf/*.conf /etc/nginx/sites-available/

#setup nginx stuff
RUN ln -s /etc/nginx/sites-available/laravelberlin.local.conf /etc/nginx/sites-enabled/laravelberlin.local.conf

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
