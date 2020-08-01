<?php

require_once('db_credentials.php');

//makes connection to the database
function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

// disconnect from the database after the calls
function db_disconnect($connection){
    if($connection){
        mysqli_close($connection);
    }
}

//check if the connection succeeded
function confirm_db_connect(){
    if(mysqli_connect_errno()){
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= "(". mysqli_connect_errno() .")";
        exit($msg);
    }
}

function confirm_result_set($result_set){
    if(!$result_set){
        exit('Database query failed');
    }
}
?>