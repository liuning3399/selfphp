<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/7/30
 * Time: 0:58
 */

//取得列表
public function getList ($start,$limit,$select="*",$join="",$where="",$order="")
{
    if (empty($start)) $start=0;
    if (empty($limit)) $limit=10;
    if (empty($select)) $select="*";

    $sql = "select {$select} from {$this->table} a";

    if (!empty($join)) $sql.=" ".$join;

    if (!empty($where)) $sql.=" where ".$where;

    if (!empty($order)) $sql.=" order by ".$order;

    $sql.=" limit {$start},{$limit}";

    //echo $sql;

    return $this->db->query($sql)->result();
}