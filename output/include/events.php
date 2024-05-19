<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

//	onscreen events
		$this->events["Order_snippet"] = true;



		}

//	handlers

//	onscreen events
	function event_Order_snippet(&$params)
	{
	// Put your code here
$sql = "Select idAccount, Acct_Name from Account";
$rs = DB::Query($sql);
$echostr="<select id='Account_db' name='Account_db'>";
 
while( $data = $rs->fetchAssoc() )
{
$echostr=$echostr."  <option value=".$data['idAcccount'].">".$data["Acct_Name"]."</option>";
}
$echostr = $echostr."</select>";
echo $echostr;

	;
}




}
?>
