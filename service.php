<?php
// 链接数据库
$con=mysql_connect('localhost','root','');
mysql_query("set names 'utf8'");
mysql_query("CREATE DATABASE img");
mysql_select_db('img');


$sql= <<< END
CREATE TABLE  `img`.`info` (
`ID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`data` TEXT NOT NULL
) ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_general_ci
END;

mysql_query($sql);

//   接收数据
 $img=$_POST['img'];
$sql="INSERT INTO info(ID,data) values (0,'{$img}')";
mysql_query($sql);
echo "上传成功";
?>