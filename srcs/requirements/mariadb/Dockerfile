FROM debian:bullseye


RUN apt-get -y update && apt-get -y upgrade && apt -y install mariadb-server

COPY  ./tools/script.sh .



RUN chmod +x script.sh

CMD ["./script.sh"]