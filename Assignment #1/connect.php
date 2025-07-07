<?php
        $connect = mysqli_connect('localhost', 'root', '', 'assignment'); 

        if(!$connect) {
            die("Connection Fail: " . mysqli_connect_error());
        } 

?>