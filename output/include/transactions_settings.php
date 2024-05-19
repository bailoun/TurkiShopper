<?php
$tdatatransactions = array();
$tdatatransactions[".searchableFields"] = array();
$tdatatransactions[".ShortName"] = "transactions";
$tdatatransactions[".OwnerID"] = "";
$tdatatransactions[".OriginalTable"] = "Transactions";


$tdatatransactions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatransactions[".originalPagesByType"] = $tdatatransactions[".pagesByType"];
$tdatatransactions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatransactions[".originalPages"] = $tdatatransactions[".pages"];
$tdatatransactions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatransactions[".originalDefaultPages"] = $tdatatransactions[".defaultPages"];

//	field labels
$fieldLabelstransactions = array();
$fieldToolTipstransactions = array();
$pageTitlestransactions = array();
$placeHolderstransactions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransactions["English"] = array();
	$fieldToolTipstransactions["English"] = array();
	$placeHolderstransactions["English"] = array();
	$pageTitlestransactions["English"] = array();
	$fieldLabelstransactions["English"]["idTransactions"] = "Id Transactions";
	$fieldToolTipstransactions["English"]["idTransactions"] = "";
	$placeHolderstransactions["English"]["idTransactions"] = "";
	$fieldLabelstransactions["English"]["Transaction_date"] = "Transaction Date";
	$fieldToolTipstransactions["English"]["Transaction_date"] = "";
	$placeHolderstransactions["English"]["Transaction_date"] = "";
	$fieldLabelstransactions["English"]["To_Account"] = "To Account";
	$fieldToolTipstransactions["English"]["To_Account"] = "";
	$placeHolderstransactions["English"]["To_Account"] = "";
	$fieldLabelstransactions["English"]["From_Account"] = "From Account";
	$fieldToolTipstransactions["English"]["From_Account"] = "";
	$placeHolderstransactions["English"]["From_Account"] = "";
	$fieldLabelstransactions["English"]["Amount__"] = "Amount \$";
	$fieldToolTipstransactions["English"]["Amount__"] = "";
	$placeHolderstransactions["English"]["Amount__"] = "";
	$fieldLabelstransactions["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipstransactions["English"]["Amount_TL"] = "";
	$placeHolderstransactions["English"]["Amount_TL"] = "";
	$fieldLabelstransactions["English"]["Notes"] = "Notes";
	$fieldToolTipstransactions["English"]["Notes"] = "";
	$placeHolderstransactions["English"]["Notes"] = "";
	if (count($fieldToolTipstransactions["English"]))
		$tdatatransactions[".isUseToolTips"] = true;
}


	$tdatatransactions[".NCSearch"] = true;



$tdatatransactions[".shortTableName"] = "transactions";
$tdatatransactions[".nSecOptions"] = 0;

$tdatatransactions[".mainTableOwnerID"] = "";
$tdatatransactions[".entityType"] = 0;
$tdatatransactions[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatatransactions[".strOriginalTableName"] = "Transactions";

	



$tdatatransactions[".showAddInPopup"] = false;

$tdatatransactions[".showEditInPopup"] = false;

$tdatatransactions[".showViewInPopup"] = false;

$tdatatransactions[".listAjax"] = false;
//	temporary
//$tdatatransactions[".listAjax"] = false;

	$tdatatransactions[".audit"] = false;

	$tdatatransactions[".locking"] = false;


$pages = $tdatatransactions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransactions[".edit"] = true;
	$tdatatransactions[".afterEditAction"] = 1;
	$tdatatransactions[".closePopupAfterEdit"] = 1;
	$tdatatransactions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransactions[".add"] = true;
$tdatatransactions[".afterAddAction"] = 1;
$tdatatransactions[".closePopupAfterAdd"] = 1;
$tdatatransactions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransactions[".list"] = true;
}



$tdatatransactions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransactions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransactions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransactions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransactions[".printFriendly"] = true;
}



$tdatatransactions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransactions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransactions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransactions[".isUseAjaxSuggest"] = true;





$tdatatransactions[".ajaxCodeSnippetAdded"] = false;

$tdatatransactions[".buttonsAdded"] = false;

$tdatatransactions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransactions[".isUseTimeForSearch"] = false;


$tdatatransactions[".badgeColor"] = "dc143c";


$tdatatransactions[".allSearchFields"] = array();
$tdatatransactions[".filterFields"] = array();
$tdatatransactions[".requiredSearchFields"] = array();

$tdatatransactions[".googleLikeFields"] = array();
$tdatatransactions[".googleLikeFields"][] = "idTransactions";
$tdatatransactions[".googleLikeFields"][] = "Transaction_date";
$tdatatransactions[".googleLikeFields"][] = "From_Account";
$tdatatransactions[".googleLikeFields"][] = "To_Account";
$tdatatransactions[".googleLikeFields"][] = "Amount_\$";
$tdatatransactions[".googleLikeFields"][] = "Amount_TL";
$tdatatransactions[".googleLikeFields"][] = "Notes";



$tdatatransactions[".tableType"] = "list";

$tdatatransactions[".printerPageOrientation"] = 0;
$tdatatransactions[".nPrinterPageScale"] = 100;

$tdatatransactions[".nPrinterSplitRecords"] = 40;

$tdatatransactions[".geocodingEnabled"] = false;










$tdatatransactions[".pageSize"] = 20;

$tdatatransactions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransactions[".strOrderBy"] = $tstrOrderBy;

$tdatatransactions[".orderindexes"] = array();


$tdatatransactions[".sqlHead"] = "SELECT idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$tdatatransactions[".sqlFrom"] = "FROM Transactions";
$tdatatransactions[".sqlWhereExpr"] = "";
$tdatatransactions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransactions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransactions[".arrGroupsPerPage"] = $arrGPP;

$tdatatransactions[".highlightSearchResults"] = true;

$tableKeystransactions = array();
$tableKeystransactions[] = "idTransactions";
$tdatatransactions[".Keys"] = $tableKeystransactions;


$tdatatransactions[".hideMobileList"] = array();




//	idTransactions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransactions";
	$fdata["GoodName"] = "idTransactions";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","idTransactions");
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


	$tdatatransactions["idTransactions"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "idTransactions";
//	Transaction_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Transaction_date";
	$fdata["GoodName"] = "Transaction_date";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","Transaction_date");
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


	$tdatatransactions["Transaction_date"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "Transaction_date";
//	From_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "From_Account";
	$fdata["GoodName"] = "From_Account";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","From_Account");
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

	
		
	$edata["LinkField"] = "Acct_Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Acct_Name";

	

	
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


	$tdatatransactions["From_Account"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "From_Account";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","To_Account");
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

	
		
	$edata["LinkField"] = "Acct_Name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Acct_Name";

	

	
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


	$tdatatransactions["To_Account"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "To_Account";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","Amount__");
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


	$tdatatransactions["Amount_\$"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","Amount_TL");
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


	$tdatatransactions["Amount_TL"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "Amount_TL";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Transactions";
	$fdata["Label"] = GetFieldLabel("Transactions","Notes");
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


	$tdatatransactions["Notes"] = $fdata;
		$tdatatransactions[".searchableFields"][] = "Notes";


$tables_data["Transactions"]=&$tdatatransactions;
$field_labels["Transactions"] = &$fieldLabelstransactions;
$fieldToolTips["Transactions"] = &$fieldToolTipstransactions;
$placeHolders["Transactions"] = &$placeHolderstransactions;
$page_titles["Transactions"] = &$pageTitlestransactions;


changeTextControlsToDate( "Transactions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Transactions"] = array();
//	Transaction_Details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Transaction_Details";
		$detailsParam["dOriginalTable"] = "Transaction_Details";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "transaction_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("Transaction_Details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Transactions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Transactions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Transactions"][$dIndex]["masterKeys"][]="idTransactions";

				$detailsTablesData["Transactions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Transactions"][$dIndex]["detailKeys"][]="Transaction";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Transactions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_transactions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$proto0["m_strFrom"] = "FROM Transactions";
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
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto6["m_sql"] = "idTransactions";
$proto6["m_srcTableName"] = "Transactions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction_date",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto8["m_sql"] = "Transaction_date";
$proto8["m_srcTableName"] = "Transactions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "From_Account",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto10["m_sql"] = "From_Account";
$proto10["m_srcTableName"] = "Transactions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto12["m_sql"] = "To_Account";
$proto12["m_srcTableName"] = "Transactions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "Transactions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "Transactions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Transactions",
	"m_srcTableName" => "Transactions"
));

$proto18["m_sql"] = "Notes";
$proto18["m_srcTableName"] = "Transactions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Transactions";
$proto21["m_srcTableName"] = "Transactions";
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
$proto20["m_sql"] = "Transactions";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Transactions";
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
$proto0["m_srcTableName"]="Transactions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transactions = createSqlQuery_transactions();


	
		;

							

$tdatatransactions[".sqlquery"] = $queryData_transactions;



$tdatatransactions[".hasEvents"] = false;

?>