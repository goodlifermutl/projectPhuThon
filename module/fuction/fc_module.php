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
            case 2 : $a="idcase_insert.php"; break;
            case 3 : $a="insert_form.php"; break;
            case 4 : $a="insert_victim.php"; break;
            case 5 : $a="profile.php"; break;
            case 6 : $a="admin_datauser.php"; break;
            case 7 : $a="test_message.php"; break;
            case 8 : $a="manage_permiss.php"; break;
            case 9 : $a="manage_police.php"; break;
            case 10 : $a="insert_villain.php"; break;
            case 11 : $a="insert_object.php"; break;
            case 12 : $a="insert_arrest_record.php"; break;
            case 13 : $a="insert_arrest_info.php"; break;
            case 14 : $a="insert_request_warrant.php"; break;
            case 15 : $a="insert_investigation_report.php"; break;
            case 16 : $a="insert_summon_villain.php"; break;
            case 17 : $a="insert_words_villain.php"; break;
            case 18 : $a="insert_search_warrant.php"; break;
            default : $a="404.php";
        }
        if($m=="404"||$a=="404.php"){
            include("module/404/404.php");
        }else{
            include("module/$m/$a");
        }
    }

?>
