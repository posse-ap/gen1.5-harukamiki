ARG VERSION=latest
FROM centos
MAINTAINER Haruka Miki <haruka.konijn@gmail.com>
# RUN:buildするときに実行される
RUN echo "now building..."
# CMD:runするときに実行される
# CMD echo "now running..."
CMD ["echo","now running..."]
RUN yum install -y httpd
ADD ./index.html /docker/
EXPOSE 80:

CMD ["/User/harukamikiprogramming/docker", "-D","FOREGROUND"]

