# redis cluster

### 集群

1. 启动：docker-compose up -d --build
2. docker ps;docker inspect xxx 查看ip
3. redis-cli --cluster create 172.18.0.2:6379 172.18.0.3:6379 172.18.0.4:6379 --cluster-replicas 0
4. 测试：redis-cli -c

