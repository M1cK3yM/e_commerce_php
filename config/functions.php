<?php 
    require('config.php');
    function generateToken($length = 32) {
        $randombytes = random_bytes($length);

        $token = bin2hex($randombytes);

        return $token;
    }

    function checkToken($token) {
        global $conn;
        $statement = mysqli_prepare($conn, "SELECT * FROM users WHERE token = ? ");
        mysqli_stmt_execute($statement, array($token));
        $total = mysqli_num_rows(mysqli_stmt_get_result($statement));
    
        if ($total) {
            return true;
        }
         return false;
    }