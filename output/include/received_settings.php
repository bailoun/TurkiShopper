<?php
$tdatareceived = array();
$tdatareceived[".searchableFields"] = array();
$tdatareceived[".ShortName"] = "received";
$tdatareceived[".OwnerID"] = "";
$tdatareceived[".OriginalTable"] = "Received";


$tdatareceived[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareceived[".originalPagesByType"] = $tdatareceived[".pagesByType"];
$tdatareceived[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareceived[".originalPages"] = $tdatareceived[".pages"];
$tdatareceived[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatareceived[".originalDefaultPages"] = $tdatareceived[".defaultPages"];

//	field labels
$fieldLabelsreceived = array();
$fieldToolTipsreceived = array();
$pageTitlesreceived = array();
$placeHoldersreceived = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreceived["English"] = array();
	$fieldToolTipsreceived["English"] = array();
	$placeHoldersreceived["English"] = array();
	$pageTitlesreceived["English"] = array();
	$fieldLabelsreceived["English"]["idTransaction_Details"] = "IdTransaction Details";
	$fieldToolTipsreceived["English"]["idTransaction_Details"] = "";
	$placeHoldersreceived["English"]["idTransaction_Details"] = "";
	$fieldLabelsreceived["English"]["date"] = "Date";
	$fieldToolTipsreceived["English"]["date"] = "";
	$placeHoldersreceived["English"]["date"] = "";
	$fieldLabelsreceived["English"]["Received_From"] = "Received From";
	$fieldToolTipsreceived["English"]["Received_From"] = "";
	$placeHoldersreceived["English"]["Received_From"] = "";
	$fieldLabelsreceived["English"]["Description"] = "Description";
	$fieldToolTipsreceived["English"]["Description"] = "";
	$placeHoldersreceived["English"]["Description"] = "";
	$fieldLabelsreceived["English"]["Amount__"] = "Amount \$";
	$fieldToolTipsreceived["English"]["Amount__"] = "";
	$placeHoldersreceived["English"]["Amount__"] = "";
	$fieldLabelsreceived["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipsreceived["English"]["Amount_TL"] = "";
	$placeHoldersreceived["English"]["Amount_TL"] = "";
	$fieldLabelsreceived["English"]["To_Account"] = "To Account";
	$fieldToolTipsreceived["English"]["To_Account"] = "";
	$placeHoldersreceived["English"]["To_Account"] = "";
	if (count($fieldToolTipsreceived["English"]))
		$tdatareceived[".isUseToolTips"] = true;
}


	$tdatareceived[".NCSearch"] = true;



$tdatareceived[".shortTableName"] = "received";
$tdatareceived[".nSecOptions"] = 0;

$tdatareceived[".mainTableOwnerID"] = "";
$tdatareceived[".entityType"] = 0;
$tdatareceived[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatareceived[".strOriginalTableName"] = "Received";

	



$tdatareceived[".showAddInPopup"] = false;

$tdatareceived[".showEditInPopup"] = false;

$tdatareceived[".showViewInPopup"] = false;

$tdatareceived[".listAjax"] = false;
//	temporary
//$tdatareceived[".listAjax"] = false;

	$tdatareceived[".audit"] = false;

	$tdatareceived[".locking"] = false;


$pages = $tdatareceived[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareceived[".edit"] = true;
	$tdatareceived[".afterEditAction"] = 1;
	$tdatareceived[".closePopupAfterEdit"] = 1;
	$tdatareceived[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareceived[".add"] = true;
$tdatareceived[".afterAddAction"] = 1;
$tdatareceived[".closePopupAfterAdd"] = 1;
$tdatareceived[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatareceived[".list"] = true;
}



$tdatareceived[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareceived[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareceived[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareceived[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareceived[".printFriendly"] = true;
}



$tdatareceived[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareceived[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareceived[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareceived[".isUseAjaxSuggest"] = true;



																		

$tdatareceived[".ajaxCodeSnippetAdded"] = false;

$tdatareceived[".buttonsAdded"] = false;

$tdatareceived[".addPageEvents"] = true;

// use timepicker for search panel
$tdatareceived[".isUseTimeForSearch"] = false;


$tdatareceived[".badgeColor"] = "cfae83";


$tdatareceived[".allSearchFields"] = array();
$tdatareceived[".filterFields"] = array();
$tdatareceived[".requiredSearchFields"] = array();

$tdatareceived[".googleLikeFields"] = array();
$tdatareceived[".googleLikeFields"][] = "idTransaction_Details";
$tdatareceived[".googleLikeFields"][] = "date";
$tdatareceived[".googleLikeFields"][] = "To_Account";
$tdatareceived[".googleLikeFields"][] = "Received_From";
$tdatareceived[".googleLikeFields"][] = "Description";
$tdatareceived[".googleLikeFields"][] = "Amount_\$";
$tdatareceived[".googleLikeFields"][] = "Amount_TL";



$tdatareceived[".tableType"] = "list";

$tdatareceived[".printerPageOrientation"] = 0;
$tdatareceived[".nPrinterPageScale"] = 100;

$tdatareceived[".nPrinterSplitRecords"] = 40;

$tdatareceived[".geocodingEnabled"] = false;










$tdatareceived[".pageSize"] = 20;

$tdatareceived[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareceived[".strOrderBy"] = $tstrOrderBy;

$tdatareceived[".orderindexes"] = array();


$tdatareceived[".sqlHead"] = "SELECT idTransaction_Details,  	`date`,  	To_Account,  	Received_From,  	Description,  	`Amount_\$`,  	Amount_TL";
$tdatareceived[".sqlFrom"] = "FROM Received";
$tdatareceived[".sqlWhereExpr"] = "";
$tdatareceived[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareceived[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareceived[".arrGroupsPerPage"] = $arrGPP;

$tdatareceived[".highlightSearchResults"] = true;

$tableKeysreceived = array();
$tableKeysreceived[] = "idTransaction_Details";
$tdatareceived[".Keys"] = $tableKeysreceived;


$tdatareceived[".hideMobileList"] = array();




//	idTransaction_Details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTransaction_Details";
	$fdata["GoodName"] = "idTransaction_Details";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","idTransaction_Details");
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


	$tdatareceived["idTransaction_Details"] = $fdata;
		$tdatareceived[".searchableFields"][] = "idTransaction_Details";
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","date");
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


	$tdatareceived["date"] = $fdata;
		$tdatareceived[".searchableFields"][] = "date";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","To_Account");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatareceived["To_Account"] = $fdata;
		$tdatareceived[".searchableFields"][] = "To_Account";
//	Received_From
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Received_From";
	$fdata["GoodName"] = "Received_From";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","Received_From");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Received_From";

		$fdata["sourceSingle"] = "Received_From";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Received_From";

	
	
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


	$tdatareceived["Received_From"] = $fdata;
		$tdatareceived[".searchableFields"][] = "Received_From";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","Description");
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


	$tdatareceived["Description"] = $fdata;
		$tdatareceived[".searchableFields"][] = "Description";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","Amount__");
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


	$tdatareceived["Amount_\$"] = $fdata;
		$tdatareceived[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "Received";
	$fdata["Label"] = GetFieldLabel("Received","Amount_TL");
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


	$tdatareceived["Amount_TL"] = $fdata;
		$tdatareceived[".searchableFields"][] = "Amount_TL";


$tables_data["Received"]=&$tdatareceived;
$field_labels["Received"] = &$fieldLabelsreceived;
$fieldToolTips["Received"] = &$fieldToolTipsreceived;
$placeHolders["Received"] = &$placeHoldersreceived;
$page_titles["Received"] = &$pageTitlesreceived;


changeTextControlsToDate( "Received" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Received"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Received"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Received"][0] = $masterParams;
				$masterTablesData["Received"][0]["masterKeys"] = array();
	$masterTablesData["Received"][0]["masterKeys"][]="idAccount";
				$masterTablesData["Received"][0]["detailKeys"] = array();
	$masterTablesData["Received"][0]["detailKeys"][]="To_Account";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_received()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTransaction_Details,  	`date`,  	To_Account,  	Received_From,  	Description,  	`Amount_\$`,  	Amount_TL";
$proto0["m_strFrom"] = "FROM Received";
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
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto6["m_sql"] = "idTransaction_Details";
$proto6["m_srcTableName"] = "Received";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "Received";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto10["m_sql"] = "To_Account";
$proto10["m_srcTableName"] = "Received";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Received_From",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto12["m_sql"] = "Received_From";
$proto12["m_srcTableName"] = "Received";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto14["m_sql"] = "Description";
$proto14["m_srcTableName"] = "Received";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto16["m_sql"] = "`Amount_\$`";
$proto16["m_srcTableName"] = "Received";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "Received",
	"m_srcTableName" => "Received"
));

$proto18["m_sql"] = "Amount_TL";
$proto18["m_srcTableName"] = "Received";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Received";
$proto21["m_srcTableName"] = "Received";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idTransaction_Details";
$proto21["m_columns"][] = "date";
$proto21["m_columns"][] = "To_Account";
$proto21["m_columns"][] = "Received_From";
$proto21["m_columns"][] = "Description";
$proto21["m_columns"][] = "Amount_\$";
$proto21["m_columns"][] = "Amount_TL";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Received";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Received";
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
$proto0["m_srcTableName"]="Received";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_received = createSqlQuery_received();


	
		;

							

$tdatareceived[".sqlquery"] = $queryData_received;



include_once(getabspath("include/received_events.php"));
$tdatareceived[".hasEvents"] = true;

?>