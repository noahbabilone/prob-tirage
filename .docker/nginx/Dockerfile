FROM nginx
MAINTAINER UPRO/YSAID
RUN apt-get update && \
    apt-get install -y vim

COPY conf/nginx.conf /etc/nginx/nginx.conf
ADD sites-enabled/ /etc/nginx/sites-enabled/

#RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

CMD ["nginx", "-g", "daemon off;"]
