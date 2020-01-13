FROM debian:buster
EXPOSE 80 443
RUN  mkdir perso
ADD  srcs/ /perso
ENTRYPOINT ["/bin/bash", "/perso/script.sh"]