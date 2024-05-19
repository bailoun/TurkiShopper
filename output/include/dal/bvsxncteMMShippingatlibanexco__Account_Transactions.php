<?php
$dalTableAccount_Transactions = array();
$dalTableAccount_Transactions["idAccount_Transactions"] = array("type"=>3,"varname"=>"idAccount_Transactions", "name" => "idAccount_Transactions", "autoInc" => "1");
$dalTableAccount_Transactions["Transaction_date"] = array("type"=>7,"varname"=>"Transaction_date", "name" => "Transaction_date", "autoInc" => "0");
$dalTableAccount_Transactions["To_Account"] = array("type"=>200,"varname"=>"To_Account", "name" => "To_Account", "autoInc" => "0");
$dalTableAccount_Transactions["From_Account"] = array("type"=>200,"varname"=>"From_Account", "name" => "From_Account", "autoInc" => "0");
$dalTableAccount_Transactions["Amount_\$"] = array("type"=>3,"varname"=>"Amount__", "name" => "Amount_\$", "autoInc" => "0");
$dalTableAccount_Transactions["Amount_TL"] = array("type"=>3,"varname"=>"Amount_TL", "name" => "Amount_TL", "autoInc" => "0");
$dalTableAccount_Transactions["Amount_LL"] = array("type"=>3,"varname"=>"Amount_LL", "name" => "Amount_LL", "autoInc" => "0");
$dalTableAccount_Transactions["Notes"] = array("type"=>200,"varname"=>"Notes", "name" => "Notes", "autoInc" => "0");
$dalTableAccount_Transactions["idAccount_Transactions"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Account_Transactions"] = &$dalTableAccount_Transactions;
?>