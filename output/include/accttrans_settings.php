<?php
$tdataaccttrans = array();
$tdataaccttrans[".searchableFields"] = array();
$tdataaccttrans[".ShortName"] = "accttrans";
$tdataaccttrans[".OwnerID"] = "";
$tdataaccttrans[".OriginalTable"] = "AcctTrans";


$tdataaccttrans[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccttrans[".originalPagesByType"] = $tdataaccttrans[".pagesByType"];
$tdataaccttrans[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccttrans[".originalPages"] = $tdataaccttrans[".pages"];
$tdataaccttrans[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccttrans[".originalDefaultPages"] = $tdataaccttrans[".defaultPages"];

//	field labels
$fieldLabelsaccttrans = array();
$fieldToolTipsaccttrans = array();
$pageTitlesaccttrans = array();
$placeHoldersaccttrans = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccttrans["English"] = array();
	$fieldToolTipsaccttrans["English"] = array();
	$placeHoldersaccttrans["English"] = array();
	$pageTitlesaccttrans["English"] = array();
	$fieldLabelsaccttrans["English"]["idTransactions"] = "Id Transactions";
	$fieldToolTipsaccttrans["English"]["idTransactions"] = "";
	$placeHoldersaccttrans["English"]["idTransactions"] = "";
	$fieldLabelsaccttrans["English"]["Transaction_date"] = "Transaction Date";
	$fieldToolTipsaccttrans["English"]["Transaction_date"] = "";
	$placeHoldersaccttrans["English"]["Transaction_date"] = "";
	$fieldLabelsaccttrans["English"]["From_Account"] = "From Account";
	$fieldToolTipsaccttrans["English"]["From_Account"] = "";
	$placeHoldersaccttrans["English"]["From_Account"] = "";
	$fieldLabelsaccttrans["English"]["To_Account"] = "To Account";
	$fieldToolTipsaccttrans["English"]["To_Account"] = "";
	$placeHoldersaccttrans["English"]["To_Account"] = "";
	$fieldLabelsaccttrans["English"]["Amount__"] = "Amount \$";
	$fieldToolTipsaccttrans["English"]["Amount__"] = "";
	$placeHoldersaccttrans["English"]["Amount__"] = "";
	$fieldLabelsaccttrans["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipsaccttrans["English"]["Amount_TL"] = "";
	$placeHoldersaccttrans["English"]["Amount_TL"] = "";
	$fieldLabelsaccttrans["English"]["Notes"] = "Notes";
	$fieldToolTipsaccttrans["English"]["Notes"] = "";
	$placeHoldersaccttrans["English"]["Notes"] = "";
	if (count($fieldToolTipsaccttrans["English"]))
		$tdataaccttrans[".isUseToolTips"] = true;
}


	$tdataaccttrans[".NCSearch"] = true;



$tdataaccttrans[".shortTableName"] = "accttrans";
$tdataaccttrans[".nSecOptions"] = 0;

$tdataaccttrans[".mainTableOwnerID"] = "";
$tdataaccttrans[".entityType"] = 0;
$tdataaccttrans[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdataaccttrans[".strOriginalTableName"] = "AcctTrans";

	



$tdataaccttrans[".showAddInPopup"] = false;

$tdataaccttrans[".showEditInPopup"] = false;

$tdataaccttrans[".showViewInPopup"] = false;

$tdataaccttrans[".listAjax"] = false;
//	temporary
//$tdataaccttrans[".listAjax"] = false;

	$tdataaccttrans[".audit"] = false;

	$tdataaccttrans[".locking"] = false;


$pages = $tdataaccttrans[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccttrans[".edit"] = true;
	$tdataaccttrans[".afterEditAction"] = 1;
	$tdataaccttrans[".closePopupAfterEdit"] = 1;
	$tdataaccttrans[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccttrans[".add"] = true;
$tdataaccttrans[".afterAddAction"] = 1;
$tdataaccttrans[".closePopupAfterAdd"] = 1;
$tdataaccttrans[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccttrans[".list"] = true;
}



$tdataaccttrans[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccttrans[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccttrans[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccttrans[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccttrans[".printFriendly"] = true;
}



$tdataaccttrans[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccttrans[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccttrans[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccttrans[".isUseAjaxSuggest"] = true;





$tdataaccttrans[".ajaxCodeSnippetAdded"] = false;

$tdataaccttrans[".buttonsAdded"] = false;

$tdataaccttrans[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccttrans[".isUseTimeForSearch"] = false;


$tdataaccttrans[".badgeColor"] = "4682B4";


$tdataaccttrans[".allSearchFields"] = array();
$tdataaccttrans[".filterFields"] = array();
$tdataaccttrans[".requiredSearchFields"] = array();

$tdataaccttrans[".googleLikeFields"] = array();
$tdataaccttrans[".googleLikeFields"][] = "idTransactions";
$tdataaccttrans[".googleLikeFields"][] = "Transaction_date";
$tdataaccttrans[".googleLikeFields"][] = "From_Account";
$tdataaccttrans[".googleLikeFields"][] = "To_Account";
$tdataaccttrans[".googleLikeFields"][] = "Amount_\$";
$tdataaccttrans[".googleLikeFields"][] = "Amount_TL";
$tdataaccttrans[".googleLikeFields"][] = "Notes";



$tdataaccttrans[".tableType"] = "list";

$tdataaccttrans[".printerPageOrientation"] = 0;
$tdataaccttrans[".nPrinterPageScale"] = 100;

$tdataaccttrans[".nPrinterSplitRecords"] = 40;

$tdataaccttrans[".geocodingEnabled"] = false;










$tdataaccttrans[".pageSize"] = 20;

$tdataaccttrans[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccttrans[".strOrderBy"] = $tstrOrderBy;

$tdataaccttrans[".orderindexes"] = array();


$tdataaccttrans[".sqlHead"] = "SELECT idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$tdataaccttrans[".sqlFrom"] = "FROM AcctTrans";
$tdataaccttrans[".sqlWhereExpr"] = "";
$tdataaccttrans[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccttrans[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccttrans[".arrGroupsPerPage"] = $arrGPP;

$tdataaccttrans[".highlightSearchResults"] = true;

$tableKeysaccttrans = array();
$tableKeysaccttrans[] = "idTransactions";
$tdataaccttrans[".Keys"] = $tableKeysaccttrans;


$tdataaccttrans[".hideMobileList"] = array();




//	idTransactions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransactions";
	$fdata["GoodName"] = "idTransactions";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","idTransactions");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idTransactions";

		$fdata["sourceSingle"] = "idTransactions";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTransactions";

	
	
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


	$tdataaccttrans["idTransactions"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "idTransactions";
//	Transaction_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Transaction_date";
	$fdata["GoodName"] = "Transaction_date";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","Transaction_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Transaction_date";

		$fdata["sourceSingle"] = "Transaction_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Transaction_date";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataaccttrans["Transaction_date"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "Transaction_date";
//	From_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "From_Account";
	$fdata["GoodName"] = "From_Account";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","From_Account");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "From_Account";

		$fdata["sourceSingle"] = "From_Account";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "From_Account";

	
	
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

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataaccttrans["From_Account"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "From_Account";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","To_Account");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "To_Account";

		$fdata["sourceSingle"] = "To_Account";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "To_Account";

	
	
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

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataaccttrans["To_Account"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "To_Account";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","Amount__");
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


	$tdataaccttrans["Amount_\$"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","Amount_TL");
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


	$tdataaccttrans["Amount_TL"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "Amount_TL";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "AcctTrans";
	$fdata["Label"] = GetFieldLabel("AcctTrans","Notes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Notes";

		$fdata["sourceSingle"] = "Notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Notes";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataaccttrans["Notes"] = $fdata;
		$tdataaccttrans[".searchableFields"][] = "Notes";


$tables_data["AcctTrans"]=&$tdataaccttrans;
$field_labels["AcctTrans"] = &$fieldLabelsaccttrans;
$fieldToolTips["AcctTrans"] = &$fieldToolTipsaccttrans;
$placeHolders["AcctTrans"] = &$placeHoldersaccttrans;
$page_titles["AcctTrans"] = &$pageTitlesaccttrans;


changeTextControlsToDate( "AcctTrans" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AcctTrans"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AcctTrans"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_accttrans()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$proto0["m_strFrom"] = "FROM AcctTrans";
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
	"m_strName" => "idTransactions",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto6["m_sql"] = "idTransactions";
$proto6["m_srcTableName"] = "AcctTrans";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction_date",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto8["m_sql"] = "Transaction_date";
$proto8["m_srcTableName"] = "AcctTrans";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "From_Account",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto10["m_sql"] = "From_Account";
$proto10["m_srcTableName"] = "AcctTrans";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto12["m_sql"] = "To_Account";
$proto12["m_srcTableName"] = "AcctTrans";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "AcctTrans";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "AcctTrans";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "AcctTrans",
	"m_srcTableName" => "AcctTrans"
));

$proto18["m_sql"] = "Notes";
$proto18["m_srcTableName"] = "AcctTrans";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "AcctTrans";
$proto21["m_srcTableName"] = "AcctTrans";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idTransactions";
$proto21["m_columns"][] = "Transaction_date";
$proto21["m_columns"][] = "From_Account";
$proto21["m_columns"][] = "To_Account";
$proto21["m_columns"][] = "Amount_\$";
$proto21["m_columns"][] = "Amount_TL";
$proto21["m_columns"][] = "Notes";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "AcctTrans";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "AcctTrans";
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
$proto0["m_srcTableName"]="AcctTrans";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accttrans = createSqlQuery_accttrans();


	
		;

							

$tdataaccttrans[".sqlquery"] = $queryData_accttrans;



$tdataaccttrans[".hasEvents"] = false;

?>