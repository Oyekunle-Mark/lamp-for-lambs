<?php

    function db_connect() {
        $result = mysqli_connect('localhost', 'base_user', 'password7', 'lawspace');
        if (!$result) {
            throw new Exception('Could not connect to database server');
        } else {
            return $result;
        }
    }

?>