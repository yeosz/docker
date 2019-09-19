# docker

### consul

1. 启动 `docker-compose up -d`  
2. 打开浏览器,访问 `http://ip:8500 ` 

### lnmp(lnmp开发环境)

1. 启动 `docker-compose up -d`  
2. 检测nginx,mysql,redis是否正常  `curl http://localhost/test.php`   

### mysql(MySQL主从)

1. 启动 `docker-compose up -d`  
2. 主库新建test数据库,建表,插入数据
3. 查看从库是否同步

