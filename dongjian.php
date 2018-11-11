<?php
/**
 * Created by PhpStorm.
 * User: 14665
 * Date: 2018/11/11
 * Time: 16:01
 */
header("content-Type: text/html; charset=Utf-8");
require_once 'db.php';

$data = $_POST['listData'];
$sql = 'insert into dongjian (title,time,imgurl,position,conurl) values ';
for ($i = 0, $j = sizeof($data); $i < $j; $i++) {
    if (sizeof($data[$i]) > 0) {
        for ($m = 0, $n = sizeof($data[$i]); $m < $n; $m++) {
            $sql .= '("' . $data[$i][$m]['title'] . '","' . date('Y-m-d H:m:s', $data[$i][$m]['time']) . '","' . $data[$i][$m]['cover'] . '",' . $data[$i][$m]['position'] . ',"' . $data[$i][$m]['conurl'] . '"),';
        }
    }
}
$sql = substr($sql, 0, strlen($sql) - 1);

if ($db->exec($sql)) {
    echo 'ok';
} else {
    echo 'fail';
}
