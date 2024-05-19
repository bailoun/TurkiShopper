<?php
$tdatatransaction_details = array();
$tdatatransaction_details[".searchableFields"] = array();
$tdatatransaction_details[".ShortName"] = "transaction_details";
$tdatatransaction_details[".OwnerID"] = "";
$tdatatransaction_details[".OriginalTable"] = "Transaction_Details";


$tdatatransaction_details[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatransaction_details[".originalPagesByType"] = $tdatatransaction_details[".pagesByType"];
$tdatatransaction_details[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatransaction_details[".originalPages"] = $tdatatransaction_details[".pages"];
$tdatatransaction_details[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatransaction_details[".originalDefaultPages"] = $tdatatransaction_details[".defaultPages"];

//	field labels
$fieldLabelstransaction_details = array();
$fieldToolTipstransaction_details = array();
$pageTitlestransaction_details = array();
$placeHolderstransaction_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransaction_details["English"] = array();
	$fieldToolTipstransaction_details["English"] = array();
	$placeHolderstransaction_details["English"] = array();
	$pageTitlestransaction_details["English"] = array();
	$fieldLabelstransaction_details["English"]["idTransaction_Details"] = "IdTransaction Details";
	$fieldToolTipstransaction_details["English"]["idTransaction_Details"] = "";
	$placeHolderstransaction_details["English"]["idTransaction_Details"] = "";
	$fieldLabelstransaction_details["English"]["Account"] = "Account";
	$fieldToolTipstransaction_details["English"]["Account"] = "";
	$placeHolderstransaction_details["English"]["Account"] = "";
	$fieldLabelstransaction_details["English"]["Transaction"] = "Transaction";
	$fieldToolTipstransaction_details["English"]["Transaction"] = "";
	$placeHolderstransaction_details["English"]["Transaction"] = "";
	$fieldLabelstransaction_details["English"]["Description"] = "Description";
	$fieldToolTipstransaction_details["English"]["Description"] = "";
	$placeHolderstransaction_details["English"]["Description"] = "";
	if (count($fieldToolTipstransaction_details["English"]))
		$tdatatransaction_details[".isUseToolTips"] = true;
}


	$tdatatransaction_details[".NCSearch"] = true;



$tdatatransaction_details[".shortTableName"] = "transaction_details";
$tdatatransaction_details[".nSecOptions"] = 0;

$tdatatransaction_details[".mainTableOwnerID"] = "";
$tdatatransaction_details[".entityType"] = 0;
$tdatatransaction_details[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatatransaction_details[".strOriginalTableName"] = "Transaction_Details";

	



$tdatatransaction_details[".showAddInPopup"] = false;

$tdatatransaction_details[".showEditInPopup"] = false;

$tdatatransaction_details[".showViewInPopup"] = false;

$tdatatransaction_details[".listAjax"] = false;
//	temporary
//$tdatatransaction_details[".listAjax"] = false;

	$tdatatransaction_details[".audit"] = false;

	$tdatatransaction_details[".locking"] = false;


$pages = $tdatatransaction_details[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransaction_details[".edit"] = true;
	$tdatatransaction_details[".afterEditAction"] = 1;
	$tdatatransaction_details[".closePopupAfterEdit"] = 1;
	$tdatatransaction_details[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransaction_details[".add"] = true;
$tdatatransaction_details[".afterAddAction"] = 1;
$tdatatransaction_details[".closePopupAfterAdd"] = 1;
$tdatatransaction_details[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransaction_details[".list"] = true;
}



$tdatatransaction_details[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransaction_details[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransaction_details[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransaction_details[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransaction_details[".printFriendly"] = true;
}



$tdatatransaction_details[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransaction_details[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransaction_details[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransaction_details[".isUseAjaxSuggest"] = true;





$tdatatransaction_details[".ajaxCodeSnippetAdded"] = false;

$tdatatransaction_details[".buttonsAdded"] = false;

$tdatatransaction_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransaction_details[".isUseTimeForSearch"] = false;


$tdatatransaction_details[".badgeColor"] = "dc143c";


$tdatatransaction_details[".allSearchFields"] = array();
$tdatatransaction_details[".filterFields"] = array();
$tdatatransaction_details[".requiredSearchFields"] = array();

$tdatatransaction_details[".googleLikeFields"] = array();
$tdatatransaction_details[".googleLikeFields"][] = "idTransaction_Details";
$tdatatransaction_details[".googleLikeFields"][] = "Account";
$tdatatransaction_details[".googleLikeFields"][] = "Transaction";
$tdatatransaction_details[".googleLikeFields"][] = "Description";



$tdatatransaction_details[".tableType"] = "list";

$tdatatransaction_details[".printerPageOrientation"] = 0;
$tdatatransaction_details[".nPrinterPageScale"] = 100;

$tdatatransaction_details[".nPrinterSplitRecords"] = 40;

$tdatatransaction_details[".geocodingEnabled"] = false;










$tdatatransaction_details[".pageSize"] = 20;

$tdatatransaction_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransaction_details[".strOrderBy"] = $tstrOrderBy;

$tdatatransaction_details[".orderindexes"] = array();


$tdatatransaction_details[".sqlHead"] = "SELECT idTransaction_Details,  	Account,  	`Transaction`,  	Description";
$tdatatransaction_details[".sqlFrom"] = "FROM Transaction_Details";
$tdatatransaction_details[".sqlWhereExpr"] = "";
$tdatatransaction_details[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransaction_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransaction_details[".arrGroupsPerPage"] = $arrGPP;

$tdatatransaction_details[".highlightSearchResults"] = true;

$tableKeystransaction_details = array();
$tableKeystransaction_details[] = "idTransaction_Details";
$tdatatransaction_details[".Keys"] = $tableKeystransaction_details;


$tdatatransaction_details[".hideMobileList"] = array();




//	idTransaction_Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransaction_Details";
	$fdata["GoodName"] = "idTransaction_Details";
	$fdata["ownerTable"] = "Transaction_Details";
	$fdata["Label"] = GetFieldLabel("Transaction_Details","idTransaction_Details");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idTransaction_Details";

		$fdata["sourceSingle"] = "idTransaction_Details";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTransaction_Details";

	
	
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


	$tdatatransaction_details["idTransaction_Details"] = $fdata;
		$tdatatransaction_details[".searchableFields"][] = "idTransaction_Details";
//	Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Account";
	$fdata["GoodName"] = "Account";
	$fdata["ownerTable"] = "Transaction_Details";
	$fdata["Label"] = GetFieldLabel("Transaction_Details","Account");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Account";

		$fdata["sourceSingle"] = "Account";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Account";

	
	
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


	$tdatatransaction_details["Account"] = $fdata;
		$tdatatransaction_details[".searchableFields"][] = "Account";
//	Transaction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Transaction";
	$fdata["GoodName"] = "Transaction";
	$fdata["ownerTable"] = "Transaction_Details";
	$fdata["Label"] = GetFieldLabel("Transaction_Details","Transaction");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Transaction";

		$fdata["sourceSingle"] = "Transaction";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Transaction`";

	
	
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


	$tdatatransaction_details["Transaction"] = $fdata;
		$tdatatransaction_details[".searchableFields"][] = "Transaction";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Transaction_Details";
	$fdata["Label"] = GetFieldLabel("Transaction_Details","Description");
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


	$tdatatransaction_details["Description"] = $fdata;
		$tdatatransaction_details[".searchableFields"][] = "Description";


$tables_data["Transaction_Details"]=&$tdatatransaction_details;
$field_labels["Transaction_Details"] = &$fieldLabelstransaction_details;
$fieldToolTips["Transaction_Details"] = &$fieldToolTipstransaction_details;
$placeHolders["Transaction_Details"] = &$placeHolderstransaction_details;
$page_titles["Transaction_Details"] = &$pageTitlestransaction_details;


changeTextControlsToDate( "Transaction_Details" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Transaction_Details"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Transaction_Details"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Transaction_Details"][0] = $masterParams;
				$masterTablesData["Transaction_Details"][0]["masterKeys"] = array();
	$masterTablesData["Transaction_Details"][0]["masterKeys"][]="idAccount";
				$masterTablesData["Transaction_Details"][0]["detailKeys"] = array();
	$masterTablesData["Transaction_Details"][0]["detailKeys"][]="Account";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Transactions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Transactions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "transactions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Transaction_Details"][1] = $masterParams;
				$masterTablesData["Transaction_Details"][1]["masterKeys"] = array();
	$masterTablesData["Transaction_Details"][1]["masterKeys"][]="idTransactions";
				$masterTablesData["Transaction_Details"][1]["detailKeys"] = array();
	$masterTablesData["Transaction_Details"][1]["detailKeys"][]="Transaction";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_transaction_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransaction_Details,  	Account,  	`Transaction`,  	Description";
$proto0["m_strFrom"] = "FROM Transaction_Details";
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
	"m_strName" => "idTransaction_Details",
	"m_strTable" => "Transaction_Details",
	"m_srcTableName" => "Transaction_Details"
));

$proto6["m_sql"] = "idTransaction_Details";
$proto6["m_srcTableName"] = "Transaction_Details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Account",
	"m_strTable" => "Transaction_Details",
	"m_srcTableName" => "Transaction_Details"
));

$proto8["m_sql"] = "Account";
$proto8["m_srcTableName"] = "Transaction_Details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction",
	"m_strTable" => "Transaction_Details",
	"m_srcTableName" => "Transaction_Details"
));

$proto10["m_sql"] = "`Transaction`";
$proto10["m_srcTableName"] = "Transaction_Details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Transaction_Details",
	"m_srcTableName" => "Transaction_Details"
));

$proto12["m_sql"] = "Description";
$proto12["m_srcTableName"] = "Transaction_Details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "Transaction_Details";
$proto15["m_srcTableName"] = "Transaction_Details";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idTransaction_Details";
$proto15["m_columns"][] = "Account";
$proto15["m_columns"][] = "Transaction";
$proto15["m_columns"][] = "Description";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Transaction_Details";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Transaction_Details";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Transaction_Details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transaction_details = createSqlQuery_transaction_details();


	
		;

				

$tdatatransaction_details[".sqlquery"] = $queryData_transaction_details;



$tdatatransaction_details[".hasEvents"] = false;

?>