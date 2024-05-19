<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["Customer_Type"] ) ) {
			$lookupTableLinks["Customer_Type"] = array();
		}
		if( !isset( $lookupTableLinks["Customer_Type"]["customer.Type_Of_Customer"] )) {
			$lookupTableLinks["Customer_Type"]["customer.Type_Of_Customer"] = array();
		}
		$lookupTableLinks["Customer_Type"]["customer.Type_Of_Customer"]["edit"] = array("table" => "Customer", "field" => "Type_Of_Customer", "page" => "edit");
		if( !isset( $lookupTableLinks["Customer"] ) ) {
			$lookupTableLinks["Customer"] = array();
		}
		if( !isset( $lookupTableLinks["Customer"]["order.Customer"] )) {
			$lookupTableLinks["Customer"]["order.Customer"] = array();
		}
		$lookupTableLinks["Customer"]["order.Customer"]["edit"] = array("table" => "Order", "field" => "Customer", "page" => "edit");
		if( !isset( $lookupTableLinks["Order_Categories"] ) ) {
			$lookupTableLinks["Order_Categories"] = array();
		}
		if( !isset( $lookupTableLinks["Order_Categories"]["order.Category"] )) {
			$lookupTableLinks["Order_Categories"]["order.Category"] = array();
		}
		$lookupTableLinks["Order_Categories"]["order.Category"]["edit"] = array("table" => "Order", "field" => "Category", "page" => "edit");
		if( !isset( $lookupTableLinks["Status"] ) ) {
			$lookupTableLinks["Status"] = array();
		}
		if( !isset( $lookupTableLinks["Status"]["order.Status"] )) {
			$lookupTableLinks["Status"]["order.Status"] = array();
		}
		$lookupTableLinks["Status"]["order.Status"]["edit"] = array("table" => "Order", "field" => "Status", "page" => "edit");
		if( !isset( $lookupTableLinks["Account"] ) ) {
			$lookupTableLinks["Account"] = array();
		}
		if( !isset( $lookupTableLinks["Account"]["received.Received_From"] )) {
			$lookupTableLinks["Account"]["received.Received_From"] = array();
		}
		$lookupTableLinks["Account"]["received.Received_From"]["edit"] = array("table" => "Received", "field" => "Received_From", "page" => "edit");
		if( !isset( $lookupTableLinks["Account"] ) ) {
			$lookupTableLinks["Account"] = array();
		}
		if( !isset( $lookupTableLinks["Account"]["sent.From_Account"] )) {
			$lookupTableLinks["Account"]["sent.From_Account"] = array();
		}
		$lookupTableLinks["Account"]["sent.From_Account"]["edit"] = array("table" => "Sent", "field" => "From_Account", "page" => "edit");
		if( !isset( $lookupTableLinks["Account"] ) ) {
			$lookupTableLinks["Account"] = array();
		}
		if( !isset( $lookupTableLinks["Account"]["sent.To_Account"] )) {
			$lookupTableLinks["Account"]["sent.To_Account"] = array();
		}
		$lookupTableLinks["Account"]["sent.To_Account"]["edit"] = array("table" => "Sent", "field" => "To_Account", "page" => "edit");
}

?>