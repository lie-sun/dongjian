<?php
/**
 * Created by PhpStorm.
 * User: 14665
 * Date: 2018/11/11
 * Time: 17:51
 */
require_once "db.php";
$sql = 'select * from dongjian order by time desc';
$res = $db->query($sql);
$arr = [];
//while (){
//
//}
$result = $res->fetch(PDO::FETCH_ASSOC);
echo json_encode($result);





