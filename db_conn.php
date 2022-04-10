<?php
    $sname="localhost";
    $uname="id18484110_user";
    $password="AnikDutta@0810";

    $db_name="id18484110_sakhi";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$conn){
        echo"connection failed";
    }