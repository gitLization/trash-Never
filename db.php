<?php
    sesstion_start();
    $conn=mysqli_connect("localhost", "root", "", "team5db");
    $conn->set_charset("uft8");

    function mq($sql) {
        global $conn;
        return $conn->query($sql);
    }
?>