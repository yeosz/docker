<?php

echo "测试MySQL:";
try {
    $pdo = new PDO('mysql:host=dbmysql;dbname=mysql', 'root', '123456');
    $sql = "SELECT version() as version;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $row['version'];
} catch (\Exception $e) {
    echo "出错啦:" . $e->getMessage();
}

echo "<br />";

echo "测试Redis:";
try {
    $redis = new Redis();
    $redis->connect('dbredis', 6379);
    $redis->set('time', date('Y-m-d H:i:s'), 60);
    echo $redis->get('time');
} catch (\Exception $e) {
    DB::rollBack();
    echo "出错啦:" . $e->getMessage();
}