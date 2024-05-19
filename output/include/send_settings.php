<?php
$tdatasend = array();
$tdatasend[".searchableFields"] = array();
$tdatasend[".ShortName"] = "send";
$tdatasend[".OwnerID"] = "";
$tdatasend[".OriginalTable"] = "Send";


$tdatasend[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasend[".originalPagesByType"] = $tdatasend[".pagesByType"];
$tdatasend[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasend[".originalPages"] = $tdatasend[".pages"];
$tdatasend[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasend[".originalDefaultPages"] = $tdatasend[".defaultPages"];

//	field labels
$fieldLabelssend = array();
$fieldToolTipssend = array();
$pageTitlessend = array();
$placeHolderssend = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssend["English"] = array();
	$fieldToolTipssend["English"] = array();
	$placeHolderssend["English"] = array();
	$pageTitlessend["English"] = array();
	$fieldLabelssend["English"]["idTransactions"] = "Id Transactions";
	$fieldToolTipssend["English"]["idTransactions"] = "";
	$placeHolderssend["English"]["idTransactions"] = "";
	$fieldLabelssend["English"]["Transaction_date"] = "Transaction Date";
	$fieldToolTipssend["English"]["Transaction_date"] = "";
	$placeHolderssend["English"]["Transaction_date"] = "";
	$fieldLabelssend["English"]["From_Account"] = "From Account";
	$fieldToolTipssend["English"]["From_Account"] = "";
	$placeHolderssend["English"]["From_Account"] = "";
	$fieldLabelssend["English"]["To_Account"] = "To Account";
	$fieldToolTipssend["English"]["To_Account"] = "";
	$placeHolderssend["English"]["To_Account"] = "";
	$fieldLabelssend["English"]["Amount__"] = "Amount \$";
	$fieldToolTipssend["English"]["Amount__"] = "";
	$placeHolderssend["English"]["Amount__"] = "";
	$fieldLabelssend["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipssend["English"]["Amount_TL"] = "";
	$placeHolderssend["English"]["Amount_TL"] = "";
	$fieldLabelssend["English"]["Notes"] = "Notes";
	$fieldToolTipssend["English"]["Notes"] = "";
	$placeHolderssend["English"]["Notes"] = "";
	if (count($fieldToolTipssend["English"]))
		$tdatasend[".isUseToolTips"] = true;
}


	$tdatasend[".NCSearch"] = true;



$tdatasend[".shortTableName"] = "send";
$tdatasend[".nSecOptions"] = 0;

$tdatasend[".mainTableOwnerID"] = "";
$tdatasend[".entityType"] = 0;
$tdatasend[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatasend[".strOriginalTableName"] = "Send";

	



$tdatasend[".showAddInPopup"] = false;

$tdatasend[".showEditInPopup"] = false;

$tdatasend[".showViewInPopup"] = false;

$tdatasend[".listAjax"] = false;
//	temporary
//$tdatasend[".listAjax"] = false;

	$tdatasend[".audit"] = false;

	$tdatasend[".locking"] = false;


$pages = $tdatasend[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasend[".edit"] = true;
	$tdatasend[".afterEditAction"] = 1;
	$tdatasend[".closePopupAfterEdit"] = 1;
	$tdatasend[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasend[".add"] = true;
$tdatasend[".afterAddAction"] = 1;
$tdatasend[".closePopupAfterAdd"] = 1;
$tdatasend[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasend[".list"] = true;
}



$tdatasend[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasend[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasend[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasend[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasend[".printFriendly"] = true;
}



$tdatasend[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasend[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasend[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasend[".isUseAjaxSuggest"] = true;





$tdatasend[".ajaxCodeSnippetAdded"] = false;

$tdatasend[".buttonsAdded"] = false;

$tdatasend[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasend[".isUseTimeForSearch"] = false;


$tdatasend[".badgeColor"] = "cfae83";


$tdatasend[".allSearchFields"] = array();
$tdatasend[".filterFields"] = array();
$tdatasend[".requiredSearchFields"] = array();

$tdatasend[".googleLikeFields"] = array();
$tdatasend[".googleLikeFields"][] = "idTransactions";
$tdatasend[".googleLikeFields"][] = "Transaction_date";
$tdatasend[".googleLikeFields"][] = "From_Account";
$tdatasend[".googleLikeFields"][] = "To_Account";
$tdatasend[".googleLikeFields"][] = "Amount_\$";
$tdatasend[".googleLikeFields"][] = "Amount_TL";
$tdatasend[".googleLikeFields"][] = "Notes";



$tdatasend[".tableType"] = "list";

$tdatasend[".printerPageOrientation"] = 0;
$tdatasend[".nPrinterPageScale"] = 100;

$tdatasend[".nPrinterSplitRecords"] = 40;

$tdatasend[".geocodingEnabled"] = false;










$tdatasend[".pageSize"] = 20;

$tdatasend[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasend[".strOrderBy"] = $tstrOrderBy;

$tdatasend[".orderindexes"] = array();


$tdatasend[".sqlHead"] = "SELECT idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$tdatasend[".sqlFrom"] = "FROM Send";
$tdatasend[".sqlWhereExpr"] = "";
$tdatasend[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasend[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasend[".arrGroupsPerPage"] = $arrGPP;

$tdatasend[".highlightSearchResults"] = true;

$tableKeyssend = array();
$tableKeyssend[] = "idTransactions";
$tdatasend[".Keys"] = $tableKeyssend;


$tdatasend[".hideMobileList"] = array();




//	idTransactions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransactions";
	$fdata["GoodName"] = "idTransactions";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","idTransactions");
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


	$tdatasend["idTransactions"] = $fdata;
		$tdatasend[".searchableFields"][] = "idTransactions";
//	Transaction_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Transaction_date";
	$fdata["GoodName"] = "Transaction_date";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","Transaction_date");
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


	$tdatasend["Transaction_date"] = $fdata;
		$tdatasend[".searchableFields"][] = "Transaction_date";
//	From_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "From_Account";
	$fdata["GoodName"] = "From_Account";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","From_Account");
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


	$tdatasend["From_Account"] = $fdata;
		$tdatasend[".searchableFields"][] = "From_Account";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","To_Account");
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


	$tdatasend["To_Account"] = $fdata;
		$tdatasend[".searchableFields"][] = "To_Account";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","Amount__");
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


	$tdatasend["Amount_\$"] = $fdata;
		$tdatasend[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","Amount_TL");
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


	$tdatasend["Amount_TL"] = $fdata;
		$tdatasend[".searchableFields"][] = "Amount_TL";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Send";
	$fdata["Label"] = GetFieldLabel("Send","Notes");
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


	$tdatasend["Notes"] = $fdata;
		$tdatasend[".searchableFields"][] = "Notes";


$tables_data["Send"]=&$tdatasend;
$field_labels["Send"] = &$fieldLabelssend;
$fieldToolTips["Send"] = &$fieldToolTipssend;
$placeHolders["Send"] = &$placeHolderssend;
$page_titles["Send"] = &$pageTitlessend;


changeTextControlsToDate( "Send" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Send"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Send"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Send"][0] = $masterParams;
				$masterTablesData["Send"][0]["masterKeys"] = array();
	$masterTablesData["Send"][0]["masterKeys"][]="idAccount";
				$masterTablesData["Send"][0]["detailKeys"] = array();
	$masterTablesData["Send"][0]["detailKeys"][]="From_Account";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_send()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransactions,  	Transaction_date,  	From_Account,  	To_Account,  	`Amount_\$`,  	Amount_TL,  	Notes";
$proto0["m_strFrom"] = "FROM Send";
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
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto6["m_sql"] = "idTransactions";
$proto6["m_srcTableName"] = "Send";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction_date",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto8["m_sql"] = "Transaction_date";
$proto8["m_srcTableName"] = "Send";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "From_Account",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto10["m_sql"] = "From_Account";
$proto10["m_srcTableName"] = "Send";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto12["m_sql"] = "To_Account";
$proto12["m_srcTableName"] = "Send";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "Send";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "Send";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Send",
	"m_srcTableName" => "Send"
));

$proto18["m_sql"] = "Notes";
$proto18["m_srcTableName"] = "Send";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Send";
$proto21["m_srcTableName"] = "Send";
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
$proto20["m_sql"] = "Send";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Send";
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
$proto0["m_srcTableName"]="Send";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_send = createSqlQuery_send();


	
		;

							

$tdatasend[".sqlquery"] = $queryData_send;



$tdatasend[".hasEvents"] = false;

?>