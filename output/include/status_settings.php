<?php
$tdatastatus = array();
$tdatastatus[".searchableFields"] = array();
$tdatastatus[".ShortName"] = "status";
$tdatastatus[".OwnerID"] = "";
$tdatastatus[".OriginalTable"] = "Status";


$tdatastatus[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastatus[".originalPagesByType"] = $tdatastatus[".pagesByType"];
$tdatastatus[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastatus[".originalPages"] = $tdatastatus[".pages"];
$tdatastatus[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastatus[".originalDefaultPages"] = $tdatastatus[".defaultPages"];

//	field labels
$fieldLabelsstatus = array();
$fieldToolTipsstatus = array();
$pageTitlesstatus = array();
$placeHoldersstatus = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatus["English"] = array();
	$fieldToolTipsstatus["English"] = array();
	$placeHoldersstatus["English"] = array();
	$pageTitlesstatus["English"] = array();
	$fieldLabelsstatus["English"]["idStatus"] = "Id Status";
	$fieldToolTipsstatus["English"]["idStatus"] = "";
	$placeHoldersstatus["English"]["idStatus"] = "";
	$fieldLabelsstatus["English"]["Description"] = "Description";
	$fieldToolTipsstatus["English"]["Description"] = "";
	$placeHoldersstatus["English"]["Description"] = "";
	if (count($fieldToolTipsstatus["English"]))
		$tdatastatus[".isUseToolTips"] = true;
}


	$tdatastatus[".NCSearch"] = true;



$tdatastatus[".shortTableName"] = "status";
$tdatastatus[".nSecOptions"] = 0;

$tdatastatus[".mainTableOwnerID"] = "";
$tdatastatus[".entityType"] = 0;
$tdatastatus[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatastatus[".strOriginalTableName"] = "Status";

	



$tdatastatus[".showAddInPopup"] = false;

$tdatastatus[".showEditInPopup"] = false;

$tdatastatus[".showViewInPopup"] = false;

$tdatastatus[".listAjax"] = false;
//	temporary
//$tdatastatus[".listAjax"] = false;

	$tdatastatus[".audit"] = false;

	$tdatastatus[".locking"] = false;


$pages = $tdatastatus[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastatus[".edit"] = true;
	$tdatastatus[".afterEditAction"] = 1;
	$tdatastatus[".closePopupAfterEdit"] = 1;
	$tdatastatus[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastatus[".add"] = true;
$tdatastatus[".afterAddAction"] = 1;
$tdatastatus[".closePopupAfterAdd"] = 1;
$tdatastatus[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastatus[".list"] = true;
}



$tdatastatus[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastatus[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastatus[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastatus[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastatus[".printFriendly"] = true;
}



$tdatastatus[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastatus[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastatus[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastatus[".isUseAjaxSuggest"] = true;



									

$tdatastatus[".ajaxCodeSnippetAdded"] = false;

$tdatastatus[".buttonsAdded"] = false;

$tdatastatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus[".isUseTimeForSearch"] = false;


$tdatastatus[".badgeColor"] = "BC8F8F";


$tdatastatus[".allSearchFields"] = array();
$tdatastatus[".filterFields"] = array();
$tdatastatus[".requiredSearchFields"] = array();

$tdatastatus[".googleLikeFields"] = array();
$tdatastatus[".googleLikeFields"][] = "idStatus";
$tdatastatus[".googleLikeFields"][] = "Description";



$tdatastatus[".tableType"] = "list";

$tdatastatus[".printerPageOrientation"] = 0;
$tdatastatus[".nPrinterPageScale"] = 100;

$tdatastatus[".nPrinterSplitRecords"] = 40;

$tdatastatus[".geocodingEnabled"] = false;










$tdatastatus[".pageSize"] = 20;

$tdatastatus[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastatus[".strOrderBy"] = $tstrOrderBy;

$tdatastatus[".orderindexes"] = array();


$tdatastatus[".sqlHead"] = "SELECT idStatus,  	Description";
$tdatastatus[".sqlFrom"] = "FROM Status";
$tdatastatus[".sqlWhereExpr"] = "";
$tdatastatus[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus[".arrGroupsPerPage"] = $arrGPP;

$tdatastatus[".highlightSearchResults"] = true;

$tableKeysstatus = array();
$tableKeysstatus[] = "idStatus";
$tdatastatus[".Keys"] = $tableKeysstatus;


$tdatastatus[".hideMobileList"] = array();




//	idStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idStatus";
	$fdata["GoodName"] = "idStatus";
	$fdata["ownerTable"] = "Status";
	$fdata["Label"] = GetFieldLabel("Status","idStatus");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idStatus";

		$fdata["sourceSingle"] = "idStatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idStatus";

	
	
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


	$tdatastatus["idStatus"] = $fdata;
		$tdatastatus[".searchableFields"][] = "idStatus";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Status";
	$fdata["Label"] = GetFieldLabel("Status","Description");
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


	$tdatastatus["Description"] = $fdata;
		$tdatastatus[".searchableFields"][] = "Description";


$tables_data["Status"]=&$tdatastatus;
$field_labels["Status"] = &$fieldLabelsstatus;
$fieldToolTips["Status"] = &$fieldToolTipsstatus;
$placeHolders["Status"] = &$placeHoldersstatus;
$page_titles["Status"] = &$pageTitlesstatus;


changeTextControlsToDate( "Status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idStatus,  	Description";
$proto0["m_strFrom"] = "FROM Status";
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
	"m_strName" => "idStatus",
	"m_strTable" => "Status",
	"m_srcTableName" => "Status"
));

$proto6["m_sql"] = "idStatus";
$proto6["m_srcTableName"] = "Status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Status",
	"m_srcTableName" => "Status"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "Status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "Status";
$proto11["m_srcTableName"] = "Status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idStatus";
$proto11["m_columns"][] = "Description";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "Status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Status";
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
$proto0["m_srcTableName"]="Status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_status = createSqlQuery_status();


	
		;

		

$tdatastatus[".sqlquery"] = $queryData_status;



$tdatastatus[".hasEvents"] = false;

?>