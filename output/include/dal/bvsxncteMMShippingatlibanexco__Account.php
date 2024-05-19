<?php
$dalTableAccount = array();
$dalTableAccount["idAccount"] = array("type"=>3,"varname"=>"idAccount", "name" => "idAccount", "autoInc" => "1");
$dalTableAccount["Acct_Name"] = array("type"=>200,"varname"=>"Acct_Name", "name" => "Acct_Name", "autoInc" => "0");
$dalTableAccount["Acct_Description"] = array("type"=>200,"varname"=>"Acct_Description", "name" => "Acct_Description", "autoInc" => "0");
$dalTableAccount["Balance_TL"] = array("type"=>5,"varname"=>"Balance_TL", "name" => "Balance_TL", "autoInc" => "0");
$dalTableAccount["Balance_\$"] = array("type"=>5,"varname"=>"Balance__", "name" => "Balance_\$", "autoInc" => "0");
$dalTableAccount["idAccount"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Account"] = &$dalTableAccount;
?>