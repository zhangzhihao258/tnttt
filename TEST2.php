<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    $server = "localhost";
    $user_name="root";
    $sure_pass="123456";
    $conn = mysql_connect($server,$user_name,$sure_pass);
    $dbname = "study";
//    print_r($conn);
    if($conn) {
//        $dbs = mysql_list_dbs($conn);
//        echo "服务器中有数据库：";
//        while ($row = mysql_fetch_object($dbs)) {
//            echo "$row->Database" . "   ";
//        }
        mysql_query("SET NAMES 'UTF8'");
        if(mysql_select_db($dbname,$conn)){
            //选择数据库
          $sql = "SELECT * FROM study";
          $sqlset = mysql_query($sql,$conn);
        }else{
            echo $dbname."数据库不存在";
        }
    }else{
        echo "连接失败";

    }
//$server = "localhost";
//$user_name="root";
//$sure_pass="root";
//$conn = mysql_connect($server,$user_name,$sure_pass);
//$dbname = "study·";
//print_r($conn);
//if($conn){
//    $dbs = mysql_list_dbs($conn);
//    echo "服务器中有数据库";
//    while ($row = mysql_fetch_object($dbs)){
//        echo $row->Database."";
//    }
//}
?>
</body>
</html>