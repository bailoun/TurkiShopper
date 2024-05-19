<?php
$dalTableSend = array();
$dalTableSend["idTransactions"] = array("type"=>3,"varname"=>"idTransactions", "name" => "idTransactions", "autoInc" => "1");
$dalTableSend["Transaction_date"] = array("type"=>7,"varname"=>"Transaction_date", "name" => "Transaction_date", "autoInc" => "0");
$dalTableSend["From_Account"] = array("type"=>200,"varname"=>"From_Account", "name" => "From_Account", "autoInc" => "0");
$dalTableSend["To_Account"] = array("type"=>200,"varname"=>"To_Account", "name" => "To_Account", "autoInc" => "0");
$dalTableSend["Amount_\$"] = array("type"=>3,"varname"=>"Amount__", "name" => "Amount_\$", "autoInc" => "0");
$dalTableSend["Amount_TL"] = array("type"=>3,"varname"=>"Amount_TL", "name" => "Amount_TL", "autoInc" => "0");
$dalTableSend["Notes"] = array("type"=>200,"varname"=>"Notes", "name" => "Notes", "autoInc" => "0");
$dalTableSend["idTransactions"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Send"] = &$dalTableSend;
?>