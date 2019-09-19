FROM mysql:5.7
ARG serverid=1
ARG masteruser=slave
ARG masterpwd=slave123456
RUN echo 'log-bin=mysql-bin' >> /etc/mysql/mysql.conf.d/mysqld.cnf
RUN echo "server-id=${serverid}" >> /etc/mysql/mysql.conf.d/mysqld.cnf
RUN echo "replicate-ignore-db=mysql" >> /etc/mysql/mysql.conf.d/mysqld.cnf
RUN echo "CREATE USER '${masteruser}'@'%' IDENTIFIED BY '${masterpwd}';GRANT ALL PRIVILEGES ON *.* TO 'slave'@'%' ;flush privileges; " >> /docker-entrypoint-initdb.d/init.sql
EXPOSE 3306