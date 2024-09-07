FROM debian:bullseye


RUN apt-get update && apt-get upgrade && apt -y install mariadb-server

COPY  ./script.sh .


RUN chmod +x script.sh

CMD ["./script.sh"]