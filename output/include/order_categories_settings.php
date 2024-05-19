<?php
$tdataorder_categories = array();
$tdataorder_categories[".searchableFields"] = array();
$tdataorder_categories[".ShortName"] = "order_categories";
$tdataorder_categories[".OwnerID"] = "";
$tdataorder_categories[".OriginalTable"] = "Order_Categories";


$tdataorder_categories[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataorder_categories[".originalPagesByType"] = $tdataorder_categories[".pagesByType"];
$tdataorder_categories[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataorder_categories[".originalPages"] = $tdataorder_categories[".pages"];
$tdataorder_categories[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataorder_categories[".originalDefaultPages"] = $tdataorder_categories[".defaultPages"];

//	field labels
$fieldLabelsorder_categories = array();
$fieldToolTipsorder_categories = array();
$pageTitlesorder_categories = array();
$placeHoldersorder_categories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorder_categories["English"] = array();
	$fieldToolTipsorder_categories["English"] = array();
	$placeHoldersorder_categories["English"] = array();
	$pageTitlesorder_categories["English"] = array();
	$fieldLabelsorder_categories["English"]["idOrder_Categories"] = "IdOrder Categories";
	$fieldToolTipsorder_categories["English"]["idOrder_Categories"] = "";
	$placeHoldersorder_categories["English"]["idOrder_Categories"] = "";
	$fieldLabelsorder_categories["English"]["Description"] = "Description";
	$fieldToolTipsorder_categories["English"]["Description"] = "";
	$placeHoldersorder_categories["English"]["Description"] = "";
	if (count($fieldToolTipsorder_categories["English"]))
		$tdataorder_categories[".isUseToolTips"] = true;
}


	$tdataorder_categories[".NCSearch"] = true;



$tdataorder_categories[".shortTableName"] = "order_categories";
$tdataorder_categories[".nSecOptions"] = 0;

$tdataorder_categories[".mainTableOwnerID"] = "";
$tdataorder_categories[".entityType"] = 0;
$tdataorder_categories[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdataorder_categories[".strOriginalTableName"] = "Order_Categories";

	



$tdataorder_categories[".showAddInPopup"] = false;

$tdataorder_categories[".showEditInPopup"] = false;

$tdataorder_categories[".showViewInPopup"] = false;

$tdataorder_categories[".listAjax"] = false;
//	temporary
//$tdataorder_categories[".listAjax"] = false;

	$tdataorder_categories[".audit"] = false;

	$tdataorder_categories[".locking"] = false;


$pages = $tdataorder_categories[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorder_categories[".edit"] = true;
	$tdataorder_categories[".afterEditAction"] = 1;
	$tdataorder_categories[".closePopupAfterEdit"] = 1;
	$tdataorder_categories[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorder_categories[".add"] = true;
$tdataorder_categories[".afterAddAction"] = 1;
$tdataorder_categories[".closePopupAfterAdd"] = 1;
$tdataorder_categories[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorder_categories[".list"] = true;
}



$tdataorder_categories[".strSortControlSettingsJSON"] = "";

$tdataorder_categories[".strClickActionJSON"] = "{\"fields\":{\"Description\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"idOrder_Categories\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataorder_categories[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorder_categories[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorder_categories[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorder_categories[".printFriendly"] = true;
}



$tdataorder_categories[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorder_categories[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorder_categories[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorder_categories[".isUseAjaxSuggest"] = true;



									

$tdataorder_categories[".ajaxCodeSnippetAdded"] = false;

$tdataorder_categories[".buttonsAdded"] = false;

$tdataorder_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorder_categories[".isUseTimeForSearch"] = false;


$tdataorder_categories[".badgeColor"] = "E67349";


$tdataorder_categories[".allSearchFields"] = array();
$tdataorder_categories[".filterFields"] = array();
$tdataorder_categories[".requiredSearchFields"] = array();

$tdataorder_categories[".googleLikeFields"] = array();
$tdataorder_categories[".googleLikeFields"][] = "idOrder_Categories";
$tdataorder_categories[".googleLikeFields"][] = "Description";



$tdataorder_categories[".tableType"] = "list";

$tdataorder_categories[".printerPageOrientation"] = 0;
$tdataorder_categories[".nPrinterPageScale"] = 100;

$tdataorder_categories[".nPrinterSplitRecords"] = 40;

$tdataorder_categories[".geocodingEnabled"] = false;










$tdataorder_categories[".pageSize"] = 20;

$tdataorder_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataorder_categories[".strOrderBy"] = $tstrOrderBy;

$tdataorder_categories[".orderindexes"] = array();


$tdataorder_categories[".sqlHead"] = "SELECT idOrder_Categories,  	Description";
$tdataorder_categories[".sqlFrom"] = "FROM Order_Categories";
$tdataorder_categories[".sqlWhereExpr"] = "";
$tdataorder_categories[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorder_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorder_categories[".arrGroupsPerPage"] = $arrGPP;

$tdataorder_categories[".highlightSearchResults"] = true;

$tableKeysorder_categories = array();
$tableKeysorder_categories[] = "idOrder_Categories";
$tdataorder_categories[".Keys"] = $tableKeysorder_categories;


$tdataorder_categories[".hideMobileList"] = array();




//	idOrder_Categories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idOrder_Categories";
	$fdata["GoodName"] = "idOrder_Categories";
	$fdata["ownerTable"] = "Order_Categories";
	$fdata["Label"] = GetFieldLabel("Order_Categories","idOrder_Categories");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idOrder_Categories";

		$fdata["sourceSingle"] = "idOrder_Categories";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idOrder_Categories";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_categories["idOrder_Categories"] = $fdata;
		$tdataorder_categories[".searchableFields"][] = "idOrder_Categories";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Order_Categories";
	$fdata["Label"] = GetFieldLabel("Order_Categories","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

		$fdata["sourceSingle"] = "Description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder_categories["Description"] = $fdata;
		$tdataorder_categories[".searchableFields"][] = "Description";


$tables_data["Order_Categories"]=&$tdataorder_categories;
$field_labels["Order_Categories"] = &$fieldLabelsorder_categories;
$fieldToolTips["Order_Categories"] = &$fieldToolTipsorder_categories;
$placeHolders["Order_Categories"] = &$placeHoldersorder_categories;
$page_titles["Order_Categories"] = &$pageTitlesorder_categories;


changeTextControlsToDate( "Order_Categories" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Order_Categories"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Order_Categories"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_order_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idOrder_Categories,  	Description";
$proto0["m_strFrom"] = "FROM Order_Categories";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idOrder_Categories",
	"m_strTable" => "Order_Categories",
	"m_srcTableName" => "Order_Categories"
));

$proto6["m_sql"] = "idOrder_Categories";
$proto6["m_srcTableName"] = "Order_Categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Order_Categories",
	"m_srcTableName" => "Order_Categories"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "Order_Categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Order_Categories";
$proto11["m_srcTableName"] = "Order_Categories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idOrder_Categories";
$proto11["m_columns"][] = "Description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Order_Categories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Order_Categories";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Order_Categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_order_categories = createSqlQuery_order_categories();


	
		;

		

$tdataorder_categories[".sqlquery"] = $queryData_order_categories;



$tdataorder_categories[".hasEvents"] = false;

?>