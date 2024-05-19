<?php
$tdatacustomer_type = array();
$tdatacustomer_type[".searchableFields"] = array();
$tdatacustomer_type[".ShortName"] = "customer_type";
$tdatacustomer_type[".OwnerID"] = "";
$tdatacustomer_type[".OriginalTable"] = "Customer_Type";


$tdatacustomer_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomer_type[".originalPagesByType"] = $tdatacustomer_type[".pagesByType"];
$tdatacustomer_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomer_type[".originalPages"] = $tdatacustomer_type[".pages"];
$tdatacustomer_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomer_type[".originalDefaultPages"] = $tdatacustomer_type[".defaultPages"];

//	field labels
$fieldLabelscustomer_type = array();
$fieldToolTipscustomer_type = array();
$pageTitlescustomer_type = array();
$placeHolderscustomer_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer_type["English"] = array();
	$fieldToolTipscustomer_type["English"] = array();
	$placeHolderscustomer_type["English"] = array();
	$pageTitlescustomer_type["English"] = array();
	$fieldLabelscustomer_type["English"]["idCustomer_Type"] = "IdCustomer Type";
	$fieldToolTipscustomer_type["English"]["idCustomer_Type"] = "";
	$placeHolderscustomer_type["English"]["idCustomer_Type"] = "";
	$fieldLabelscustomer_type["English"]["Description"] = "Description";
	$fieldToolTipscustomer_type["English"]["Description"] = "";
	$placeHolderscustomer_type["English"]["Description"] = "";
	if (count($fieldToolTipscustomer_type["English"]))
		$tdatacustomer_type[".isUseToolTips"] = true;
}


	$tdatacustomer_type[".NCSearch"] = true;



$tdatacustomer_type[".shortTableName"] = "customer_type";
$tdatacustomer_type[".nSecOptions"] = 0;

$tdatacustomer_type[".mainTableOwnerID"] = "";
$tdatacustomer_type[".entityType"] = 0;
$tdatacustomer_type[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatacustomer_type[".strOriginalTableName"] = "Customer_Type";

	



$tdatacustomer_type[".showAddInPopup"] = false;

$tdatacustomer_type[".showEditInPopup"] = false;

$tdatacustomer_type[".showViewInPopup"] = false;

$tdatacustomer_type[".listAjax"] = false;
//	temporary
//$tdatacustomer_type[".listAjax"] = false;

	$tdatacustomer_type[".audit"] = false;

	$tdatacustomer_type[".locking"] = false;


$pages = $tdatacustomer_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomer_type[".edit"] = true;
	$tdatacustomer_type[".afterEditAction"] = 1;
	$tdatacustomer_type[".closePopupAfterEdit"] = 1;
	$tdatacustomer_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomer_type[".add"] = true;
$tdatacustomer_type[".afterAddAction"] = 1;
$tdatacustomer_type[".closePopupAfterAdd"] = 1;
$tdatacustomer_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomer_type[".list"] = true;
}



$tdatacustomer_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomer_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomer_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomer_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomer_type[".printFriendly"] = true;
}



$tdatacustomer_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomer_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomer_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomer_type[".isUseAjaxSuggest"] = true;



									

$tdatacustomer_type[".ajaxCodeSnippetAdded"] = false;

$tdatacustomer_type[".buttonsAdded"] = false;

$tdatacustomer_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_type[".isUseTimeForSearch"] = false;


$tdatacustomer_type[".badgeColor"] = "5F9EA0";


$tdatacustomer_type[".allSearchFields"] = array();
$tdatacustomer_type[".filterFields"] = array();
$tdatacustomer_type[".requiredSearchFields"] = array();

$tdatacustomer_type[".googleLikeFields"] = array();
$tdatacustomer_type[".googleLikeFields"][] = "idCustomer_Type";
$tdatacustomer_type[".googleLikeFields"][] = "Description";



$tdatacustomer_type[".tableType"] = "list";

$tdatacustomer_type[".printerPageOrientation"] = 0;
$tdatacustomer_type[".nPrinterPageScale"] = 100;

$tdatacustomer_type[".nPrinterSplitRecords"] = 40;

$tdatacustomer_type[".geocodingEnabled"] = false;










$tdatacustomer_type[".pageSize"] = 20;

$tdatacustomer_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomer_type[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_type[".orderindexes"] = array();


$tdatacustomer_type[".sqlHead"] = "SELECT idCustomer_Type,  	Description";
$tdatacustomer_type[".sqlFrom"] = "FROM Customer_Type";
$tdatacustomer_type[".sqlWhereExpr"] = "";
$tdatacustomer_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomer_type[".highlightSearchResults"] = true;

$tableKeyscustomer_type = array();
$tableKeyscustomer_type[] = "idCustomer_Type";
$tdatacustomer_type[".Keys"] = $tableKeyscustomer_type;


$tdatacustomer_type[".hideMobileList"] = array();




//	idCustomer_Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCustomer_Type";
	$fdata["GoodName"] = "idCustomer_Type";
	$fdata["ownerTable"] = "Customer_Type";
	$fdata["Label"] = GetFieldLabel("Customer_Type","idCustomer_Type");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idCustomer_Type";

		$fdata["sourceSingle"] = "idCustomer_Type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCustomer_Type";

	
	
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


	$tdatacustomer_type["idCustomer_Type"] = $fdata;
		$tdatacustomer_type[".searchableFields"][] = "idCustomer_Type";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Customer_Type";
	$fdata["Label"] = GetFieldLabel("Customer_Type","Description");
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


	$tdatacustomer_type["Description"] = $fdata;
		$tdatacustomer_type[".searchableFields"][] = "Description";


$tables_data["Customer_Type"]=&$tdatacustomer_type;
$field_labels["Customer_Type"] = &$fieldLabelscustomer_type;
$fieldToolTips["Customer_Type"] = &$fieldToolTipscustomer_type;
$placeHolders["Customer_Type"] = &$placeHolderscustomer_type;
$page_titles["Customer_Type"] = &$pageTitlescustomer_type;


changeTextControlsToDate( "Customer_Type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Customer_Type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Customer_Type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customer_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCustomer_Type,  	Description";
$proto0["m_strFrom"] = "FROM Customer_Type";
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
	"m_strName" => "idCustomer_Type",
	"m_strTable" => "Customer_Type",
	"m_srcTableName" => "Customer_Type"
));

$proto6["m_sql"] = "idCustomer_Type";
$proto6["m_srcTableName"] = "Customer_Type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Customer_Type",
	"m_srcTableName" => "Customer_Type"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "Customer_Type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Customer_Type";
$proto11["m_srcTableName"] = "Customer_Type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idCustomer_Type";
$proto11["m_columns"][] = "Description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Customer_Type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Customer_Type";
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
$proto0["m_srcTableName"]="Customer_Type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customer_type = createSqlQuery_customer_type();


	
		;

		

$tdatacustomer_type[".sqlquery"] = $queryData_customer_type;



$tdatacustomer_type[".hasEvents"] = false;

?>