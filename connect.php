<?php
$host='localhost';
$username='root';
$password='';

try{
$con =mysqli_connect($host, $username, $password,'epl');

}
catch(Exception $e){
// not a MySQL exception
    $e->getMessage();
}

?>