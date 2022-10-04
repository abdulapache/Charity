<?php

define('DBINFO','mysql:host=localhost;dbname=charity');
define('DBUSER','root');
define('DBPASS','');


function performQuery($query){
    $con = new pdo(DBINFO,DBUSER,DBPASS);
    $stmt = $con->prepare($query);
    if($stmt->execute()){
        return 'true';
    }else{
        return 'false';
    }
}
function fetchAll($query){
    $con = new pdo(DBINFO,DBUSER,DBPASS);
    $stmt = $con->query($query);
    return $stmt->fetchAll();
}


?>