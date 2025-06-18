<?php

//match these settings to your computer and database names
        $connect = mysqli_connect('localhost', 'root', '', 'schools'); // -> this is the database name

        if(!$connect) {
            die("Connection Fail: " . mysqli_connect_error());
        } 

?>