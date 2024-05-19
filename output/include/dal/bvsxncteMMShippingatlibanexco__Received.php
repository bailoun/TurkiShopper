<?php
$dalTableReceived = array();
$dalTableReceived["idTransaction_Details"] = array("type"=>3,"varname"=>"idTransaction_Details", "name" => "idTransaction_Details", "autoInc" => "1");
$dalTableReceived["date"] = array("type"=>7,"varname"=>"date", "name" => "date", "autoInc" => "0");
$dalTableReceived["To_Account"] = array("type"=>3,"varname"=>"To_Account", "name" => "To_Account", "autoInc" => "0");
$dalTableReceived["Received_From"] = array("type"=>3,"varname"=>"Received_From", "name" => "Received_From", "autoInc" => "0");
$dalTableReceived["Description"] = array("type"=>200,"varname"=>"Description", "name" => "Description", "autoInc" => "0");
$dalTableReceived["Amount_\$"] = array("type"=>5,"varname"=>"Amount__", "name" => "Amount_\$", "autoInc" => "0");
$dalTableReceived["Amount_TL"] = array("type"=>5,"varname"=>"Amount_TL", "name" => "Amount_TL", "autoInc" => "0");
$dalTableReceived["idTransaction_Details"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Received"] = &$dalTableReceived;
?>