<?php
$dalTablepAcctTrans = array();
$dalTablepAcctTrans["idTransaction_Details"] = array("type"=>3,"varname"=>"idTransaction_Details", "name" => "idTransaction_Details", "autoInc" => "1");
$dalTablepAcctTrans["date"] = array("type"=>7,"varname"=>"date", "name" => "date", "autoInc" => "0");
$dalTablepAcctTrans["Account"] = array("type"=>3,"varname"=>"Account", "name" => "Account", "autoInc" => "0");
$dalTablepAcctTrans["SecondAccount"] = array("type"=>3,"varname"=>"SecondAccount", "name" => "SecondAccount", "autoInc" => "0");
$dalTablepAcctTrans["Amount_\$"] = array("type"=>3,"varname"=>"Amount__", "name" => "Amount_\$", "autoInc" => "0");
$dalTablepAcctTrans["Amount_TL"] = array("type"=>3,"varname"=>"Amount_TL", "name" => "Amount_TL", "autoInc" => "0");
$dalTablepAcctTrans["Description"] = array("type"=>200,"varname"=>"Description", "name" => "Description", "autoInc" => "0");
$dalTablepAcctTrans["idTransaction_Details"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__pAcctTrans"] = &$dalTablepAcctTrans;
?>