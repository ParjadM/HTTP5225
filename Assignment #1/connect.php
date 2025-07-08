<?php
        // Connect to the database
        $connect = mysqli_connect('sql301.infinityfree.com', 'if0_39416858', 'oKwAoyv82AwzNZ', 'if0_39416858_Assignment');
        // Check connection
        if(!$connect) {
            die("Connection Fail: " . mysqli_connect_error());
        } 

?>