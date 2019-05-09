<?php

    $host = '47.107.162.122';
    $user = 'root';
    $pwd = 'iCocos10201119%';
    $dbname = 'phpstudy';

    # 连接数据库
    $db = new mysqli($host, $user, $pwd, $dbname);
    if ($db->connect_errno <> 0) {
        echo "连接失败---------------";
        echo $db->connect_error;
    }

    $db->query("SET NAMES UTF-8"); // 设定数据库数据传输的编码

    # 连接数据库
    // $sql = "create table home (id int unsigned not null auto_increment primary key, content char(255) not null, user char(100) not null,intime tinyint unsigned not null);";  
    // if(mysqli_query($conn, $sql)){  
    //     echo "Table emp5 created successfully";  
    // } else {  
    //     echo "Could not create table: ". mysqli_error($conn);  
    // }

    # 插入数据
    // $insert = "INSERT INTO home (content, user, intime) VALUES ('Vivian','iCocos',10)";
    // $is_insert = $db->query($insert);
    // if ($is_insert == true) {
    //     echo "插入成功-----------";
    // } else {
    //     echo "插入失败============";
    // }

    # 查询数据
    // "SELECT * FROM msg ORDER BY id DESC LIMIT 1, 10";
    // SELECT * FROM msg WHERE id<>3 AND id<>16 ORDER BY id DESC LIMIT 1,5;
    // $query = "SELECT * FROM msg WHERE id<4";
    $query = "SELECT * FROM home ORDER BY id DESC";
    $is_query = $db->query($query); // 查询结果
    if ($is_query === false) {
        echo "SQL错误";
        exit();
    }
    $data_array = [];
    // fetch_array ：一条， fetch_all ：所有
    while ($row = $is_query->fetch_array( MYSQLI_ASSOC)) {
        $data_array[] = $row; // $data_array[$roe['id']] = $row;
    }
    var_dump($data_array);


    # 删除数据


    # 修改数据


?>