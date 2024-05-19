<?php
$tdataaccount = array();
$tdataaccount[".searchableFields"] = array();
$tdataaccount[".ShortName"] = "account";
$tdataaccount[".OwnerID"] = "";
$tdataaccount[".OriginalTable"] = "Account";


$tdataaccount[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccount[".originalPagesByType"] = $tdataaccount[".pagesByType"];
$tdataaccount[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccount[".originalPages"] = $tdataaccount[".pages"];
$tdataaccount[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccount[".originalDefaultPages"] = $tdataaccount[".defaultPages"];

//	field labels
$fieldLabelsaccount = array();
$fieldToolTipsaccount = array();
$pageTitlesaccount = array();
$placeHoldersaccount = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccount["English"] = array();
	$fieldToolTipsaccount["English"] = array();
	$placeHoldersaccount["English"] = array();
	$pageTitlesaccount["English"] = array();
	$fieldLabelsaccount["English"]["idAccount"] = "Account ID";
	$fieldToolTipsaccount["English"]["idAccount"] = "";
	$placeHoldersaccount["English"]["idAccount"] = "";
	$fieldLabelsaccount["English"]["Acct_Name"] = "Acct Name";
	$fieldToolTipsaccount["English"]["Acct_Name"] = "";
	$placeHoldersaccount["English"]["Acct_Name"] = "";
	$fieldLabelsaccount["English"]["Acct_Description"] = "Acct Description";
	$fieldToolTipsaccount["English"]["Acct_Description"] = "";
	$placeHoldersaccount["English"]["Acct_Description"] = "";
	$fieldLabelsaccount["English"]["Balance_TL"] = "Balance TL";
	$fieldToolTipsaccount["English"]["Balance_TL"] = "";
	$placeHoldersaccount["English"]["Balance_TL"] = "";
	$fieldLabelsaccount["English"]["Balance__"] = "Balance \$";
	$fieldToolTipsaccount["English"]["Balance__"] = "";
	$placeHoldersaccount["English"]["Balance__"] = "";
	if (count($fieldToolTipsaccount["English"]))
		$tdataaccount[".isUseToolTips"] = true;
}


	$tdataaccount[".NCSearch"] = true;



$tdataaccount[".shortTableName"] = "account";
$tdataaccount[".nSecOptions"] = 0;

$tdataaccount[".mainTableOwnerID"] = "";
$tdataaccount[".entityType"] = 0;
$tdataaccount[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdataaccount[".strOriginalTableName"] = "Account";

	



$tdataaccount[".showAddInPopup"] = false;

$tdataaccount[".showEditInPopup"] = false;

$tdataaccount[".showViewInPopup"] = false;

$tdataaccount[".listAjax"] = false;
//	temporary
//$tdataaccount[".listAjax"] = false;

	$tdataaccount[".audit"] = false;

	$tdataaccount[".locking"] = false;


$pages = $tdataaccount[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccount[".edit"] = true;
	$tdataaccount[".afterEditAction"] = 1;
	$tdataaccount[".closePopupAfterEdit"] = 1;
	$tdataaccount[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccount[".add"] = true;
$tdataaccount[".afterAddAction"] = 1;
$tdataaccount[".closePopupAfterAdd"] = 1;
$tdataaccount[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccount[".list"] = true;
}



$tdataaccount[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccount[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccount[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccount[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccount[".printFriendly"] = true;
}



$tdataaccount[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccount[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccount[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccount[".isUseAjaxSuggest"] = true;



									

$tdataaccount[".ajaxCodeSnippetAdded"] = false;

$tdataaccount[".buttonsAdded"] = false;

$tdataaccount[".addPageEvents"] = true;

// use timepicker for search panel
$tdataaccount[".isUseTimeForSearch"] = false;


$tdataaccount[".badgeColor"] = "4169E1";


$tdataaccount[".allSearchFields"] = array();
$tdataaccount[".filterFields"] = array();
$tdataaccount[".requiredSearchFields"] = array();

$tdataaccount[".googleLikeFields"] = array();
$tdataaccount[".googleLikeFields"][] = "idAccount";
$tdataaccount[".googleLikeFields"][] = "Acct_Name";
$tdataaccount[".googleLikeFields"][] = "Acct_Description";
$tdataaccount[".googleLikeFields"][] = "Balance_TL";
$tdataaccount[".googleLikeFields"][] = "Balance_\$";



$tdataaccount[".tableType"] = "list";

$tdataaccount[".printerPageOrientation"] = 0;
$tdataaccount[".nPrinterPageScale"] = 100;

$tdataaccount[".nPrinterSplitRecords"] = 40;

$tdataaccount[".geocodingEnabled"] = false;










$tdataaccount[".pageSize"] = 20;

$tdataaccount[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccount[".strOrderBy"] = $tstrOrderBy;

$tdataaccount[".orderindexes"] = array();


$tdataaccount[".sqlHead"] = "SELECT idAccount,  	Acct_Name,  	Acct_Description,  	Balance_TL,  	`Balance_\$`";
$tdataaccount[".sqlFrom"] = "FROM Account";
$tdataaccount[".sqlWhereExpr"] = "";
$tdataaccount[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccount[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccount[".arrGroupsPerPage"] = $arrGPP;

$tdataaccount[".highlightSearchResults"] = true;

$tableKeysaccount = array();
$tableKeysaccount[] = "idAccount";
$tdataaccount[".Keys"] = $tableKeysaccount;


$tdataaccount[".hideMobileList"] = array();




//	idAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idAccount";
	$fdata["GoodName"] = "idAccount";
	$fdata["ownerTable"] = "Account";
	$fdata["Label"] = GetFieldLabel("Account","idAccount");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idAccount";

		$fdata["sourceSingle"] = "idAccount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idAccount";

	
	
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


	$tdataaccount["idAccount"] = $fdata;
		$tdataaccount[".searchableFields"][] = "idAccount";
//	Acct_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Acct_Name";
	$fdata["GoodName"] = "Acct_Name";
	$fdata["ownerTable"] = "Account";
	$fdata["Label"] = GetFieldLabel("Account","Acct_Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Acct_Name";

		$fdata["sourceSingle"] = "Acct_Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Acct_Name";

	
	
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


	$tdataaccount["Acct_Name"] = $fdata;
		$tdataaccount[".searchableFields"][] = "Acct_Name";
//	Acct_Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Acct_Description";
	$fdata["GoodName"] = "Acct_Description";
	$fdata["ownerTable"] = "Account";
	$fdata["Label"] = GetFieldLabel("Account","Acct_Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Acct_Description";

		$fdata["sourceSingle"] = "Acct_Description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Acct_Description";

	
	
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


	$tdataaccount["Acct_Description"] = $fdata;
		$tdataaccount[".searchableFields"][] = "Acct_Description";
//	Balance_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Balance_TL";
	$fdata["GoodName"] = "Balance_TL";
	$fdata["ownerTable"] = "Account";
	$fdata["Label"] = GetFieldLabel("Account","Balance_TL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Balance_TL";

		$fdata["sourceSingle"] = "Balance_TL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balance_TL";

	
	
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


	$tdataaccount["Balance_TL"] = $fdata;
		$tdataaccount[".searchableFields"][] = "Balance_TL";
//	Balance_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Balance_\$";
	$fdata["GoodName"] = "Balance__";
	$fdata["ownerTable"] = "Account";
	$fdata["Label"] = GetFieldLabel("Account","Balance__");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Balance_\$";

		$fdata["sourceSingle"] = "Balance_\$";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Balance_\$`";

	
	
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


	$tdataaccount["Balance_\$"] = $fdata;
		$tdataaccount[".searchableFields"][] = "Balance_\$";


$tables_data["Account"]=&$tdataaccount;
$field_labels["Account"] = &$fieldLabelsaccount;
$fieldToolTips["Account"] = &$fieldToolTipsaccount;
$placeHolders["Account"] = &$placeHoldersaccount;
$page_titles["Account"] = &$pageTitlesaccount;


changeTextControlsToDate( "Account" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Account"] = array();
//	Sent
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Sent";
		$detailsParam["dOriginalTable"] = "Sent";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sent";
	$detailsParam["dCaptionTable"] = GetTableCaption("Sent");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Account"][$dIndex]["masterKeys"][]="idAccount";

				$detailsTablesData["Account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Account"][$dIndex]["detailKeys"][]="From_Account";
//	Received
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Received";
		$detailsParam["dOriginalTable"] = "Received";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "received";
	$detailsParam["dCaptionTable"] = GetTableCaption("Received");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Account"][$dIndex]["masterKeys"][]="idAccount";

				$detailsTablesData["Account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Account"][$dIndex]["detailKeys"][]="To_Account";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Account"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_account()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idAccount,  	Acct_Name,  	Acct_Description,  	Balance_TL,  	`Balance_\$`";
$proto0["m_strFrom"] = "FROM Account";
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
	"m_strName" => "idAccount",
	"m_strTable" => "Account",
	"m_srcTableName" => "Account"
));

$proto6["m_sql"] = "idAccount";
$proto6["m_srcTableName"] = "Account";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Acct_Name",
	"m_strTable" => "Account",
	"m_srcTableName" => "Account"
));

$proto8["m_sql"] = "Acct_Name";
$proto8["m_srcTableName"] = "Account";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Acct_Description",
	"m_strTable" => "Account",
	"m_srcTableName" => "Account"
));

$proto10["m_sql"] = "Acct_Description";
$proto10["m_srcTableName"] = "Account";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance_TL",
	"m_strTable" => "Account",
	"m_srcTableName" => "Account"
));

$proto12["m_sql"] = "Balance_TL";
$proto12["m_srcTableName"] = "Account";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance_\$",
	"m_strTable" => "Account",
	"m_srcTableName" => "Account"
));

$proto14["m_sql"] = "`Balance_\$`";
$proto14["m_srcTableName"] = "Account";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Account";
$proto17["m_srcTableName"] = "Account";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idAccount";
$proto17["m_columns"][] = "Acct_Name";
$proto17["m_columns"][] = "Acct_Description";
$proto17["m_columns"][] = "Balance_TL";
$proto17["m_columns"][] = "Balance_\$";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "Account";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Account";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Account";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_account = createSqlQuery_account();


	
		;

					

$tdataaccount[".sqlquery"] = $queryData_account;



include_once(getabspath("include/account_events.php"));
$tdataaccount[".hasEvents"] = true;

?>