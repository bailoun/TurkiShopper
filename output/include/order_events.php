<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_order  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeMoveNextList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$sql = "UPDATE `Order` 
        SET `Price_in_$` = IFNULL(`Price_in_$`, 0) + (" . $values['Price_in_TL'] . " / ".$values['Rate_for_Client'].")
        WHERE `idOrder` = " . $values['idOrder'];
DB::exec($sql);

$sql = "UPDATE `Order` 
        SET `Order_Balance` = IFNULL(`Order_Balance`, 0) + (" . $values['Price_in_TL'] . " / ".$values['Rate_for_Client'].")
        WHERE `idOrder` = " . $values['idOrder'];
DB::exec($sql);

$sql = "UPDATE `Order` 
        SET `Order_Balance` = IFNULL(`Order_Balance`, 0) + " . $values['Price_in_$'] . "
        WHERE `idOrder` = " . $values['idOrder'];
DB::exec($sql);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		
$sql = "Select idAccount, Acct_Name from Account";
$rs = DB::Query($sql);
 
while( $data = $rs->fetchAssoc() )
{
$row = array();
$row[] = $data["idAccount"];
$row[] = $data["Acct_Name"];
$lookup[] = $row;
}
$pageObject->setProxyValue("lookup",$lookup);

;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		if ($data["Order_Balance"] == 0) {
    $record["css"] = "background: #d5efcc;"; // Soft green color
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
