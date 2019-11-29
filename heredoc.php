<?php
$tablename="table";
$order_ids_list="1,2,3";
$sql = <<<SQL
select * from $tablename where id in [$order_ids_list] and product_name = "widgets" 
SQL;
// echo $sql;
$query = <<<ABC
select * from $tablename where id in [$order_ids_list] and product_name = "widgets" 
ABC;
echo $query;
?>