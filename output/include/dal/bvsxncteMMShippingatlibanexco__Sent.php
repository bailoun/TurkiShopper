<?php
$dalTableSent = array();
$dalTableSent["idTransactions"] = array("type"=>3,"varname"=>"idTransactions", "name" => "idTransactions", "autoInc" => "1");
$dalTableSent["Transaction_date"] = array("type"=>7,"varname"=>"Transaction_date", "name" => "Transaction_date", "autoInc" => "0");
$dalTableSent["From_Account"] = array("type"=>200,"varname"=>"From_Account", "name" => "From_Account", "autoInc" => "0");
$dalTableSent["To_Account"] = array("type"=>200,"varname"=>"To_Account", "name" => "To_Account", "autoInc" => "0");
$dalTableSent["Amount_\$"] = array("type"=>5,"varname"=>"Amount__", "name" => "Amount_\$", "autoInc" => "0");
$dalTableSent["Amount_TL"] = array("type"=>5,"varname"=>"Amount_TL", "name" => "Amount_TL", "autoInc" => "0");
$dalTableSent["Notes"] = array("type"=>200,"varname"=>"Notes", "name" => "Notes", "autoInc" => "0");
$dalTableSent["Order_ID"] = array("type"=>3,"varname"=>"Order_ID", "name" => "Order_ID", "autoInc" => "0");
$dalTableSent["idTransactions"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Sent"] = &$dalTableSent;
?>