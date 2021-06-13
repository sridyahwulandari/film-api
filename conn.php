<?php

$connect = new mysqli("localhost","root","","film");

if ($connect) {
    }else {
        echo "Connection Failed";
        exit();
}
