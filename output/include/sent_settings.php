<?php
$tdatasent = array();
$tdatasent[".searchableFields"] = array();
$tdatasent[".ShortName"] = "sent";
$tdatasent[".OwnerID"] = "";
$tdatasent[".OriginalTable"] = "Sent";


$tdatasent[".pagesByType"] = my_json_decode( "{\"add\":[\"add\",\"order_add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasent[".originalPagesByType"] = $tdatasent[".pagesByType"];
$tdatasent[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\",\"order_add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasent[".originalPages"] = $tdatasent[".pages"];
$tdatasent[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasent[".originalDefaultPages"] = $tdatasent[".defaultPages"];

//	field labels
$fieldLabelssent = array();
$fieldToolTipssent = array();
$pageTitlessent = array();
$placeHolderssent = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssent["English"] = array();
	$fieldToolTipssent["English"] = array();
	$placeHolderssent["English"] = array();
	$pageTitlessent["English"] = array();
	$fieldLabelssent["English"]["idTransactions"] = "Id Transactions";
	$fieldToolTipssent["English"]["idTransactions"] = "";
	$placeHolderssent["English"]["idTransactions"] = "";
	$fieldLabelssent["English"]["Transaction_date"] = "Transaction Date";
	$fieldToolTipssent["English"]["Transaction_date"] = "";
	$placeHolderssent["English"]["Transaction_date"] = "";
	$fieldLabelssent["English"]["From_Account"] = "From Account";
	$fieldToolTipssent["English"]["From_Account"] = "";
	$placeHolderssent["English"]["From_Account"] = "";
	$fieldLabelssent["English"]["To_Account"] = "To Account";
	$fieldToolTipssent["English"]["To_Account"] = "";
	$placeHolderssent["English"]["To_Account"] = "";
	$fieldLabelssent["English"]["Amount__"] = "Amount \$";
	$fieldToolTipssent["English"]["Amount__"] = "";
	$placeHolderssent["English"]["Amount__"] = "";
	$fieldLabelssent["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipssent["English"]["Amount_TL"] = "";
	$placeHolderssent["English"]["Amount_TL"] = "";
	$fieldLabelssent["English"]["Notes"] = "Notes";
	$fieldToolTipssent["English"]["Notes"] = "";
	$placeHolderssent["English"]["Notes"] = "";
	$fieldLabelssent["English"]["Order_ID"] = "Order ID";
	$fieldToolTipssent["English"]["Order_ID"] = "";
	$placeHolderssent["English"]["Order_ID"] = "";
	$pageTitlessent["English"]["order_add"] = "Order Payment";
	if (count($fieldToolTipssent["English"]))
		$tdatasent[".isUseToolTips"] = true;
}


	$tdatasent[".NCSearch"] = true;



$tdatasent[".shortTableName"] = "sent";
$tdatasent[".nSecOptions"] = 0;

$tdatasent[".mainTableOwnerID"] = "";
$tdatasent[".entityType"] = 0;
$tdatasent[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatasent[".strOriginalTableName"] = "Sent";

	



$tdatasent[".showAddInPopup"] = false;

$tdatasent[".showEditInPopup"] = false;

$tdatasent[".showViewInPopup"] = false;

$tdatasent[".listAjax"] = false;
//	temporary
//$tdatasent[".listAjax"] = false;

	$tdatasent[".audit"] = false;

	$tdatasent[".locking"] = false;


$pages = $tdatasent[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasent[".edit"] = true;
	$tdatasent[".afterEditAction"] = 1;
	$tdatasent[".closePopupAfterEdit"] = 1;
	$tdatasent[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasent[".add"] = true;
$tdatasent[".afterAddAction"] = 1;
$tdatasent[".closePopupAfterAdd"] = 1;
$tdatasent[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatasent[".list"] = true;
}



$tdatasent[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasent[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasent[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasent[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasent[".printFriendly"] = true;
}



$tdatasent[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasent[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasent[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasent[".isUseAjaxSuggest"] = true;



																											

$tdatasent[".ajaxCodeSnippetAdded"] = false;

$tdatasent[".buttonsAdded"] = false;

$tdatasent[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasent[".isUseTimeForSearch"] = false;


$tdatasent[".badgeColor"] = "00c2c5";


$tdatasent[".allSearchFields"] = array();
$tdatasent[".filterFields"] = array();
$tdatasent[".requiredSearchFields"] = array();

$tdatasent[".googleLikeFields"] = array();
$tdatasent[".googleLikeFields"][] = "idTransactions";
$tdatasent[".googleLikeFields"][] = "Transaction_date";
$tdatasent[".googleLikeFields"][] = "From_Account";
$tdatasent[".googleLikeFields"][] = "To_Account";
$tdatasent[".googleLikeFields"][] = "Amount_\$";
$tdatasent[".googleLikeFields"][] = "Amount_TL";
$tdatasent[".googleLikeFields"][] = "Notes";
$tdatasent[".googleLikeFields"][] = "Order_ID";



$tdatasent[".tableType"] = "list";

$tdatasent[".printerPageOrientation"] = 0;
$tdatasent[".nPrinterPageScale"] = 100;

$tdatasent[".nPrinterSplitRecords"] = 40;

$tdatasent[".geocodingEnabled"] = false;










$tdatasent[".pageSize"] = 20;

$tdatasent[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasent[".strOrderBy"] = $tstrOrderBy;

$tdatasent[".orderindexes"] = array();


$tdatasent[".sqlHead"] = "SELECT idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes,  	Order_ID";
$tdatasent[".sqlFrom"] = "FROM Sent";
$tdatasent[".sqlWhereExpr"] = "";
$tdatasent[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasent[".arrGroupsPerPage"] = $arrGPP;

$tdatasent[".highlightSearchResults"] = true;

$tableKeyssent = array();
$tableKeyssent[] = "idTransactions";
$tdatasent[".Keys"] = $tableKeyssent;


$tdatasent[".hideMobileList"] = array();




//	idTransactions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransactions";
	$fdata["GoodName"] = "idTransactions";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","idTransactions");
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


	$tdatasent["idTransactions"] = $fdata;
		$tdatasent[".searchableFields"][] = "idTransactions";
//	Transaction_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Transaction_date";
	$fdata["GoodName"] = "Transaction_date";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","Transaction_date");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatasent["Transaction_date"] = $fdata;
		$tdatasent[".searchableFields"][] = "Transaction_date";
//	From_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "From_Account";
	$fdata["GoodName"] = "From_Account";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","From_Account");
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


	$tdatasent["From_Account"] = $fdata;
		$tdatasent[".searchableFields"][] = "From_Account";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","To_Account");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "To_Account";

		$fdata["sourceSingle"] = "To_Account";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "To_Account";

	
	
			
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


	$tdatasent["To_Account"] = $fdata;
		$tdatasent[".searchableFields"][] = "To_Account";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","Amount__");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Amount_\$";

		$fdata["sourceSingle"] = "Amount_\$";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Amount_\$`";

	
	
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


	$tdatasent["Amount_\$"] = $fdata;
		$tdatasent[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","Amount_TL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Amount_TL";

		$fdata["sourceSingle"] = "Amount_TL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount_TL";

	
	
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


	$tdatasent["Amount_TL"] = $fdata;
		$tdatasent[".searchableFields"][] = "Amount_TL";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","Notes");
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


	$tdatasent["Notes"] = $fdata;
		$tdatasent[".searchableFields"][] = "Notes";
//	Order_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Order_ID";
	$fdata["GoodName"] = "Order_ID";
	$fdata["ownerTable"] = "Sent";
	$fdata["Label"] = GetFieldLabel("Sent","Order_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Order_ID";

		$fdata["sourceSingle"] = "Order_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Order_ID";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasent["Order_ID"] = $fdata;
		$tdatasent[".searchableFields"][] = "Order_ID";


$tables_data["Sent"]=&$tdatasent;
$field_labels["Sent"] = &$fieldLabelssent;
$fieldToolTips["Sent"] = &$fieldToolTipssent;
$placeHolders["Sent"] = &$placeHolderssent;
$page_titles["Sent"] = &$pageTitlessent;


changeTextControlsToDate( "Sent" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Sent"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Sent"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Sent"][0] = $masterParams;
				$masterTablesData["Sent"][0]["masterKeys"] = array();
	$masterTablesData["Sent"][0]["masterKeys"][]="idAccount";
				$masterTablesData["Sent"][0]["detailKeys"] = array();
	$masterTablesData["Sent"][0]["detailKeys"][]="From_Account";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Order";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Order";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "order";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Sent"][1] = $masterParams;
				$masterTablesData["Sent"][1]["masterKeys"] = array();
	$masterTablesData["Sent"][1]["masterKeys"][]="idOrder";
				$masterTablesData["Sent"][1]["detailKeys"] = array();
	$masterTablesData["Sent"][1]["detailKeys"][]="Order_ID";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sent()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes,  	Order_ID";
$proto0["m_strFrom"] = "FROM Sent";
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
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto6["m_sql"] = "idTransactions";
$proto6["m_srcTableName"] = "Sent";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction_date",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto8["m_sql"] = "Transaction_date";
$proto8["m_srcTableName"] = "Sent";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "From_Account",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto10["m_sql"] = "From_Account";
$proto10["m_srcTableName"] = "Sent";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto12["m_sql"] = "To_Account";
$proto12["m_srcTableName"] = "Sent";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "Sent";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "Sent";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto18["m_sql"] = "Notes";
$proto18["m_srcTableName"] = "Sent";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Order_ID",
	"m_strTable" => "Sent",
	"m_srcTableName" => "Sent"
));

$proto20["m_sql"] = "Order_ID";
$proto20["m_srcTableName"] = "Sent";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Sent";
$proto23["m_srcTableName"] = "Sent";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idTransactions";
$proto23["m_columns"][] = "Transaction_date";
$proto23["m_columns"][] = "From_Account";
$proto23["m_columns"][] = "To_Account";
$proto23["m_columns"][] = "Amount_\$";
$proto23["m_columns"][] = "Amount_TL";
$proto23["m_columns"][] = "Notes";
$proto23["m_columns"][] = "Order_ID";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Sent";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Sent";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Sent";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sent = createSqlQuery_sent();


	
		;

								

$tdatasent[".sqlquery"] = $queryData_sent;



include_once(getabspath("include/sent_events.php"));
$tdatasent[".hasEvents"] = true;

?>