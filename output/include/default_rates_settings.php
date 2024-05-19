<?php
$tdatadefault_rates = array();
$tdatadefault_rates[".searchableFields"] = array();
$tdatadefault_rates[".ShortName"] = "default_rates";
$tdatadefault_rates[".OwnerID"] = "";
$tdatadefault_rates[".OriginalTable"] = "Default Rates";


$tdatadefault_rates[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadefault_rates[".originalPagesByType"] = $tdatadefault_rates[".pagesByType"];
$tdatadefault_rates[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadefault_rates[".originalPages"] = $tdatadefault_rates[".pages"];
$tdatadefault_rates[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadefault_rates[".originalDefaultPages"] = $tdatadefault_rates[".defaultPages"];

//	field labels
$fieldLabelsdefault_rates = array();
$fieldToolTipsdefault_rates = array();
$pageTitlesdefault_rates = array();
$placeHoldersdefault_rates = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdefault_rates["English"] = array();
	$fieldToolTipsdefault_rates["English"] = array();
	$placeHoldersdefault_rates["English"] = array();
	$pageTitlesdefault_rates["English"] = array();
	$fieldLabelsdefault_rates["English"]["idDefault_Rates"] = "IdDefault Rates";
	$fieldToolTipsdefault_rates["English"]["idDefault_Rates"] = "";
	$placeHoldersdefault_rates["English"]["idDefault_Rates"] = "";
	$fieldLabelsdefault_rates["English"]["Rate"] = "Rate";
	$fieldToolTipsdefault_rates["English"]["Rate"] = "";
	$placeHoldersdefault_rates["English"]["Rate"] = "";
	$fieldLabelsdefault_rates["English"]["Description"] = "Description";
	$fieldToolTipsdefault_rates["English"]["Description"] = "";
	$placeHoldersdefault_rates["English"]["Description"] = "";
	if (count($fieldToolTipsdefault_rates["English"]))
		$tdatadefault_rates[".isUseToolTips"] = true;
}


	$tdatadefault_rates[".NCSearch"] = true;



$tdatadefault_rates[".shortTableName"] = "default_rates";
$tdatadefault_rates[".nSecOptions"] = 0;

$tdatadefault_rates[".mainTableOwnerID"] = "";
$tdatadefault_rates[".entityType"] = 0;
$tdatadefault_rates[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatadefault_rates[".strOriginalTableName"] = "Default Rates";

	



$tdatadefault_rates[".showAddInPopup"] = false;

$tdatadefault_rates[".showEditInPopup"] = false;

$tdatadefault_rates[".showViewInPopup"] = false;

$tdatadefault_rates[".listAjax"] = false;
//	temporary
//$tdatadefault_rates[".listAjax"] = false;

	$tdatadefault_rates[".audit"] = false;

	$tdatadefault_rates[".locking"] = false;


$pages = $tdatadefault_rates[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadefault_rates[".edit"] = true;
	$tdatadefault_rates[".afterEditAction"] = 1;
	$tdatadefault_rates[".closePopupAfterEdit"] = 1;
	$tdatadefault_rates[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadefault_rates[".add"] = true;
$tdatadefault_rates[".afterAddAction"] = 1;
$tdatadefault_rates[".closePopupAfterAdd"] = 1;
$tdatadefault_rates[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadefault_rates[".list"] = true;
}



$tdatadefault_rates[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadefault_rates[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadefault_rates[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadefault_rates[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadefault_rates[".printFriendly"] = true;
}



$tdatadefault_rates[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadefault_rates[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadefault_rates[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadefault_rates[".isUseAjaxSuggest"] = true;



									

$tdatadefault_rates[".ajaxCodeSnippetAdded"] = false;

$tdatadefault_rates[".buttonsAdded"] = false;

$tdatadefault_rates[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadefault_rates[".isUseTimeForSearch"] = false;


$tdatadefault_rates[".badgeColor"] = "CFAE83";


$tdatadefault_rates[".allSearchFields"] = array();
$tdatadefault_rates[".filterFields"] = array();
$tdatadefault_rates[".requiredSearchFields"] = array();

$tdatadefault_rates[".googleLikeFields"] = array();
$tdatadefault_rates[".googleLikeFields"][] = "idDefault Rates";
$tdatadefault_rates[".googleLikeFields"][] = "Description";
$tdatadefault_rates[".googleLikeFields"][] = "Rate";



$tdatadefault_rates[".tableType"] = "list";

$tdatadefault_rates[".printerPageOrientation"] = 0;
$tdatadefault_rates[".nPrinterPageScale"] = 100;

$tdatadefault_rates[".nPrinterSplitRecords"] = 40;

$tdatadefault_rates[".geocodingEnabled"] = false;










$tdatadefault_rates[".pageSize"] = 20;

$tdatadefault_rates[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadefault_rates[".strOrderBy"] = $tstrOrderBy;

$tdatadefault_rates[".orderindexes"] = array();


$tdatadefault_rates[".sqlHead"] = "SELECT `idDefault Rates`,  	Description,  	Rate";
$tdatadefault_rates[".sqlFrom"] = "FROM `Default Rates`";
$tdatadefault_rates[".sqlWhereExpr"] = "";
$tdatadefault_rates[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadefault_rates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadefault_rates[".arrGroupsPerPage"] = $arrGPP;

$tdatadefault_rates[".highlightSearchResults"] = true;

$tableKeysdefault_rates = array();
$tableKeysdefault_rates[] = "idDefault Rates";
$tdatadefault_rates[".Keys"] = $tableKeysdefault_rates;


$tdatadefault_rates[".hideMobileList"] = array();




//	idDefault Rates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idDefault Rates";
	$fdata["GoodName"] = "idDefault_Rates";
	$fdata["ownerTable"] = "Default Rates";
	$fdata["Label"] = GetFieldLabel("Default_Rates","idDefault_Rates");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idDefault Rates";

		$fdata["sourceSingle"] = "idDefault Rates";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`idDefault Rates`";

	
	
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


	$tdatadefault_rates["idDefault Rates"] = $fdata;
		$tdatadefault_rates[".searchableFields"][] = "idDefault Rates";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Default Rates";
	$fdata["Label"] = GetFieldLabel("Default_Rates","Description");
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


	$tdatadefault_rates["Description"] = $fdata;
		$tdatadefault_rates[".searchableFields"][] = "Description";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "Default Rates";
	$fdata["Label"] = GetFieldLabel("Default_Rates","Rate");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Rate";

		$fdata["sourceSingle"] = "Rate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatadefault_rates["Rate"] = $fdata;
		$tdatadefault_rates[".searchableFields"][] = "Rate";


$tables_data["Default Rates"]=&$tdatadefault_rates;
$field_labels["Default_Rates"] = &$fieldLabelsdefault_rates;
$fieldToolTips["Default_Rates"] = &$fieldToolTipsdefault_rates;
$placeHolders["Default_Rates"] = &$placeHoldersdefault_rates;
$page_titles["Default_Rates"] = &$pageTitlesdefault_rates;


changeTextControlsToDate( "Default Rates" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Default Rates"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Default Rates"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_default_rates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`idDefault Rates`,  	Description,  	Rate";
$proto0["m_strFrom"] = "FROM `Default Rates`";
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
	"m_strName" => "idDefault Rates",
	"m_strTable" => "Default Rates",
	"m_srcTableName" => "Default Rates"
));

$proto6["m_sql"] = "`idDefault Rates`";
$proto6["m_srcTableName"] = "Default Rates";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Default Rates",
	"m_srcTableName" => "Default Rates"
));

$proto8["m_sql"] = "Description";
$proto8["m_srcTableName"] = "Default Rates";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "Default Rates",
	"m_srcTableName" => "Default Rates"
));

$proto10["m_sql"] = "Rate";
$proto10["m_srcTableName"] = "Default Rates";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "Default Rates";
$proto13["m_srcTableName"] = "Default Rates";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idDefault Rates";
$proto13["m_columns"][] = "Description";
$proto13["m_columns"][] = "Rate";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`Default Rates`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Default Rates";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Default Rates";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_default_rates = createSqlQuery_default_rates();


	
		;

			

$tdatadefault_rates[".sqlquery"] = $queryData_default_rates;



$tdatadefault_rates[".hasEvents"] = false;

?>