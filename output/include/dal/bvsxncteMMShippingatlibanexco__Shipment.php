<?php
$dalTableShipment = array();
$dalTableShipment["idShipment"] = array("type"=>3,"varname"=>"idShipment", "name" => "idShipment", "autoInc" => "1");
$dalTableShipment["Shipment_date"] = array("type"=>7,"varname"=>"Shipment_date", "name" => "Shipment_date", "autoInc" => "0");
$dalTableShipment["Shipment_Amount_\$"] = array("type"=>5,"varname"=>"Shipment_Amount__", "name" => "Shipment_Amount_\$", "autoInc" => "0");
$dalTableShipment["Shipment_Amount_TL"] = array("type"=>5,"varname"=>"Shipment_Amount_TL", "name" => "Shipment_Amount_TL", "autoInc" => "0");
$dalTableShipment["Shipping_Cost"] = array("type"=>5,"varname"=>"Shipping_Cost", "name" => "Shipping_Cost", "autoInc" => "0");
$dalTableShipment["Notes"] = array("type"=>200,"varname"=>"Notes", "name" => "Notes", "autoInc" => "0");
$dalTableShipment["idShipment"]["key"]=true;

$dal_info["bvsxncteMMShippingatlibanexco__Shipment"] = &$dalTableShipment;
?>