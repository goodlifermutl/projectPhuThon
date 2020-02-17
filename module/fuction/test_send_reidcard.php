<?php
include ("connect_db.php");
include_once '../../report/vendor/autoload.php';
$con = connect_db();
$test=$_POST['reidcard'];
setcookie('idcardvictimreport',$test,time()+(86400),"/");

if(!isset($_COOKIE['idcardvictimreport'])) {
    echo "Cookie '" . $test . "' is not set!";
} else {
    echo "Cookie '" . $test . "' is set!<br>";
}
?>