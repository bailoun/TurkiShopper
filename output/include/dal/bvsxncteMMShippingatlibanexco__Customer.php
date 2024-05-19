<?php
$dalTableCustomer = array();
$dalTableCustomer["idCustomer"] = array("type"=>3,"varname"=>"idCustomer", "name" => "idCustomer", "autoInc" => "1");
$dalTableCustomer["Name"] = array("type"=>200,"varname"=>"Name", "name" => "Name", "autoInc" => "0");
$dalTableCustomer["Address"] = array("type"=>200,"varname"=>"Address", "name" => "Address", "autoInc" => "0");
$dalTableCustomer["Phone"] = array("type"=>200,"varname"=>"Phone", "name" => "Phone", "autoInc" => "0");
$dalTableCustomer["Type_Of_Customer"] = array("type"=>3,"varname"=>"Type_Of_Customer", "name" => "Type_Of_Customer", "autoInc" => "0");
$dalTableCustomer["Balance"] = array("type"=>5,"varname"=>"Balance", "name" => "Balance", "autoInc" => "0");
$dalTableCustomer["Notes"] = array("type"=>200,"varname"=>"Notes", "name" => "Notes", "autoInc" => "0");
$dalTableCustomer["idCustomer"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Customer"] = &$dalTableCustomer;
?>