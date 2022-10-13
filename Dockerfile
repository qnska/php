FROM amazonlinux:latest

# update and install httpd 2.4.53, php 7.4.28 with php extensions
RUN yum update -y; yum clean all
RUN yum install -y httpd amazon-linux-extras && yum install -y unzip && yum install -y mysql
RUN amazon-linux-extras enable php7.4
RUN yum clean metadata
RUN yum install -y php php-{pear,cli,cgi,common,curl,mbstring,gd,mysqlnd,gettext,bcmath,json,xml,fpm,intl,zip}

# update website files
COPY /var/www/html/php/php.zip .
RUN unzip web-v1.zip -d /var/www/html/
RUN chown -R apache:apache /var/www
CMD ["/usr/sbin/httpd","-DFOREGROUND"]

EXPOSE 80
EXPOSE 443
