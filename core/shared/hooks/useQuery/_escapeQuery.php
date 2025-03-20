<?php

function _escapeQuery(object $connection, string &$sql, array $params): void {
    $sql = str_replace("?", "%s", $sql);

    $scapedParams = array_map(function($param) use ($connection) {
        return mysqli_real_escape_string($connection, $param);
    }, $params);

    $sql = vsprintf($sql, $scapedParams);
}