FROM debian:bullseye

RUN apt-get -y update && apt-get -y upgrade && apt-get -y install  nginx openssl


RUN openssl req -subj '/CN=webhamid' -x509 -newkey rsa:4096 -nodes -keyout key.key -out cert.csr -days 365


COPY ./conf/nginx.conf /etc/nginx/sites-enabled/default.conf



 
CMD [ "nginx", "-g","daemon off;" ]