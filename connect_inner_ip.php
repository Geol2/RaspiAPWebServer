<?php
    $first = 1;
    $end = 20;

    $arr_inner_ip = array_map(function ($n) { return sprintf('192.168.4.%d', $n); }, range($first, $end));
    //print_r($arr_ip);

    if(in_array($_SERVER['REMOTE_ADDR'], $arr_inner_ip)){
        echo "내부 IP로 접속 하였습니다.";
    } else {
        echo " 내부 IP로 접속하지 않았습니다.";
    }
    //echo $_SERVER['REMOTE_ADDR'];
?>