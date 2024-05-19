<?php
$tdatapaccttrans = array();
$tdatapaccttrans[".searchableFields"] = array();
$tdatapaccttrans[".ShortName"] = "paccttrans";
$tdatapaccttrans[".OwnerID"] = "";
$tdatapaccttrans[".OriginalTable"] = "pAcctTrans";


$tdatapaccttrans[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaccttrans[".originalPagesByType"] = $tdatapaccttrans[".pagesByType"];
$tdatapaccttrans[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaccttrans[".originalPages"] = $tdatapaccttrans[".pages"];
$tdatapaccttrans[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaccttrans[".originalDefaultPages"] = $tdatapaccttrans[".defaultPages"];

//	field labels
$fieldLabelspaccttrans = array();
$fieldToolTipspaccttrans = array();
$pageTitlespaccttrans = array();
$placeHolderspaccttrans = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaccttrans["English"] = array();
	$fieldToolTipspaccttrans["English"] = array();
	$placeHolderspaccttrans["English"] = array();
	$pageTitlespaccttrans["English"] = array();
	$fieldLabelspaccttrans["English"]["idTransaction_Details"] = "IdTransaction Details";
	$fieldToolTipspaccttrans["English"]["idTransaction_Details"] = "";
	$placeHolderspaccttrans["English"]["idTransaction_Details"] = "";
	$fieldLabelspaccttrans["English"]["date"] = "Date";
	$fieldToolTipspaccttrans["English"]["date"] = "";
	$placeHolderspaccttrans["English"]["date"] = "";
	$fieldLabelspaccttrans["English"]["Account"] = "Account";
	$fieldToolTipspaccttrans["English"]["Account"] = "";
	$placeHolderspaccttrans["English"]["Account"] = "";
	$fieldLabelspaccttrans["English"]["SecondAccount"] = "Second Account";
	$fieldToolTipspaccttrans["English"]["SecondAccount"] = "";
	$placeHolderspaccttrans["English"]["SecondAccount"] = "";
	$fieldLabelspaccttrans["English"]["Amount__"] = "Amount \$";
	$fieldToolTipspaccttrans["English"]["Amount__"] = "";
	$placeHolderspaccttrans["English"]["Amount__"] = "";
	$fieldLabelspaccttrans["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipspaccttrans["English"]["Amount_TL"] = "";
	$placeHolderspaccttrans["English"]["Amount_TL"] = "";
	$fieldLabelspaccttrans["English"]["Description"] = "Description";
	$fieldToolTipspaccttrans["English"]["Description"] = "";
	$placeHolderspaccttrans["English"]["Description"] = "";
	if (count($fieldToolTipspaccttrans["English"]))
		$tdatapaccttrans[".isUseToolTips"] = true;
}


	$tdatapaccttrans[".NCSearch"] = true;



$tdatapaccttrans[".shortTableName"] = "paccttrans";
$tdatapaccttrans[".nSecOptions"] = 0;

$tdatapaccttrans[".mainTableOwnerID"] = "";
$tdatapaccttrans[".entityType"] = 0;
$tdatapaccttrans[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatapaccttrans[".strOriginalTableName"] = "pAcctTrans";

	



$tdatapaccttrans[".showAddInPopup"] = false;

$tdatapaccttrans[".showEditInPopup"] = false;

$tdatapaccttrans[".showViewInPopup"] = false;

$tdatapaccttrans[".listAjax"] = false;
//	temporary
//$tdatapaccttrans[".listAjax"] = false;

	$tdatapaccttrans[".audit"] = false;

	$tdatapaccttrans[".locking"] = false;


$pages = $tdatapaccttrans[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaccttrans[".edit"] = true;
	$tdatapaccttrans[".afterEditAction"] = 1;
	$tdatapaccttrans[".closePopupAfterEdit"] = 1;
	$tdatapaccttrans[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaccttrans[".add"] = true;
$tdatapaccttrans[".afterAddAction"] = 1;
$tdatapaccttrans[".closePopupAfterAdd"] = 1;
$tdatapaccttrans[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaccttrans[".list"] = true;
}



$tdatapaccttrans[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaccttrans[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaccttrans[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaccttrans[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaccttrans[".printFriendly"] = true;
}



$tdatapaccttrans[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaccttrans[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaccttrans[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaccttrans[".isUseAjaxSuggest"] = true;





$tdatapaccttrans[".ajaxCodeSnippetAdded"] = false;

$tdatapaccttrans[".buttonsAdded"] = false;

$tdatapaccttrans[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaccttrans[".isUseTimeForSearch"] = false;


$tdatapaccttrans[".badgeColor"] = "9acd32";


$tdatapaccttrans[".allSearchFields"] = array();
$tdatapaccttrans[".filterFields"] = array();
$tdatapaccttrans[".requiredSearchFields"] = array();

$tdatapaccttrans[".googleLikeFields"] = array();
$tdatapaccttrans[".googleLikeFields"][] = "idTransaction_Details";
$tdatapaccttrans[".googleLikeFields"][] = "date";
$tdatapaccttrans[".googleLikeFields"][] = "Account";
$tdatapaccttrans[".googleLikeFields"][] = "SecondAccount";
$tdatapaccttrans[".googleLikeFields"][] = "Amount_\$";
$tdatapaccttrans[".googleLikeFields"][] = "Amount_TL";
$tdatapaccttrans[".googleLikeFields"][] = "Description";



$tdatapaccttrans[".tableType"] = "list";

$tdatapaccttrans[".printerPageOrientation"] = 0;
$tdatapaccttrans[".nPrinterPageScale"] = 100;

$tdatapaccttrans[".nPrinterSplitRecords"] = 40;

$tdatapaccttrans[".geocodingEnabled"] = false;










$tdatapaccttrans[".pageSize"] = 20;

$tdatapaccttrans[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapaccttrans[".strOrderBy"] = $tstrOrderBy;

$tdatapaccttrans[".orderindexes"] = array();


$tdatapaccttrans[".sqlHead"] = "SELECT idTransaction_Details,  	`date`,  	Account,  	SecondAccount,  	`Amount_\$`,  	Amount_TL,  	Description";
$tdatapaccttrans[".sqlFrom"] = "FROM pAcctTrans";
$tdatapaccttrans[".sqlWhereExpr"] = "";
$tdatapaccttrans[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaccttrans[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaccttrans[".arrGroupsPerPage"] = $arrGPP;

$tdatapaccttrans[".highlightSearchResults"] = true;

$tableKeyspaccttrans = array();
$tableKeyspaccttrans[] = "idTransaction_Details";
$tdatapaccttrans[".Keys"] = $tableKeyspaccttrans;


$tdatapaccttrans[".hideMobileList"] = array();




//	idTransaction_Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransaction_Details";
	$fdata["GoodName"] = "idTransaction_Details";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","idTransaction_Details");
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


	$tdatapaccttrans["idTransaction_Details"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "idTransaction_Details";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date";

		$fdata["sourceSingle"] = "date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapaccttrans["date"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "date";
//	Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Account";
	$fdata["GoodName"] = "Account";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","Account");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Account";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idAccount";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Acct_Description";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapaccttrans["Account"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "Account";
//	SecondAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SecondAccount";
	$fdata["GoodName"] = "SecondAccount";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","SecondAccount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "SecondAccount";

		$fdata["sourceSingle"] = "SecondAccount";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SecondAccount";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Account";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idAccount";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Acct_Description";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapaccttrans["SecondAccount"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "SecondAccount";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","Amount__");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Amount_\$";

		$fdata["sourceSingle"] = "Amount_\$";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Amount_\$`";

	
	
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


	$tdatapaccttrans["Amount_\$"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","Amount_TL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Amount_TL";

		$fdata["sourceSingle"] = "Amount_TL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount_TL";

	
	
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


	$tdatapaccttrans["Amount_TL"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "Amount_TL";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "pAcctTrans";
	$fdata["Label"] = GetFieldLabel("pAcctTrans","Description");
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


	$tdatapaccttrans["Description"] = $fdata;
		$tdatapaccttrans[".searchableFields"][] = "Description";


$tables_data["pAcctTrans"]=&$tdatapaccttrans;
$field_labels["pAcctTrans"] = &$fieldLabelspaccttrans;
$fieldToolTips["pAcctTrans"] = &$fieldToolTipspaccttrans;
$placeHolders["pAcctTrans"] = &$placeHolderspaccttrans;
$page_titles["pAcctTrans"] = &$pageTitlespaccttrans;


changeTextControlsToDate( "pAcctTrans" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pAcctTrans"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pAcctTrans"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pAcctTrans"][0] = $masterParams;
				$masterTablesData["pAcctTrans"][0]["masterKeys"] = array();
	$masterTablesData["pAcctTrans"][0]["masterKeys"][]="idAccount";
				$masterTablesData["pAcctTrans"][0]["detailKeys"] = array();
	$masterTablesData["pAcctTrans"][0]["detailKeys"][]="Account";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paccttrans()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransaction_Details,  	`date`,  	Account,  	SecondAccount,  	`Amount_\$`,  	Amount_TL,  	Description";
$proto0["m_strFrom"] = "FROM pAcctTrans";
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
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto6["m_sql"] = "idTransaction_Details";
$proto6["m_srcTableName"] = "pAcctTrans";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "pAcctTrans";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Account",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto10["m_sql"] = "Account";
$proto10["m_srcTableName"] = "pAcctTrans";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SecondAccount",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto12["m_sql"] = "SecondAccount";
$proto12["m_srcTableName"] = "pAcctTrans";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "pAcctTrans";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "pAcctTrans";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "pAcctTrans",
	"m_srcTableName" => "pAcctTrans"
));

$proto18["m_sql"] = "Description";
$proto18["m_srcTableName"] = "pAcctTrans";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pAcctTrans";
$proto21["m_srcTableName"] = "pAcctTrans";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idTransaction_Details";
$proto21["m_columns"][] = "date";
$proto21["m_columns"][] = "Account";
$proto21["m_columns"][] = "SecondAccount";
$proto21["m_columns"][] = "Amount_\$";
$proto21["m_columns"][] = "Amount_TL";
$proto21["m_columns"][] = "Description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "pAcctTrans";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "pAcctTrans";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pAcctTrans";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paccttrans = createSqlQuery_paccttrans();


	
		;

							

$tdatapaccttrans[".sqlquery"] = $queryData_paccttrans;



$tdatapaccttrans[".hasEvents"] = false;

?>