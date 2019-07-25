<?php
    function module($module,$action){
        $m = "";
        $a = "";

        switch($module){
            case 0 : $m="main"; break;
            case 1 : $m="view"; break;
            case 2 : $m="insert"; break;
            default : $m="404";
        }
        switch($action){
            case 0 : $a="data_firstpage.php"; break;
            case 1 : $a="view_data.php"; break;
            case 2 : $a="insert_form.php"; break;
            case 3 : $a="insert_victim.php"; break;
            default : $a="404.php";
        }
        if($m=="404"||$a=="404.php"){
            include("../404/404.php");
        }else{
            include("../$m/$a");
        }
    }

?>