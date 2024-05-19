<?php
$tdataaccount_transactions = array();
$tdataaccount_transactions[".searchableFields"] = array();
$tdataaccount_transactions[".ShortName"] = "account_transactions";
$tdataaccount_transactions[".OwnerID"] = "";
$tdataaccount_transactions[".OriginalTable"] = "Account_Transactions";


$tdataaccount_transactions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccount_transactions[".originalPagesByType"] = $tdataaccount_transactions[".pagesByType"];
$tdataaccount_transactions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccount_transactions[".originalPages"] = $tdataaccount_transactions[".pages"];
$tdataaccount_transactions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccount_transactions[".originalDefaultPages"] = $tdataaccount_transactions[".defaultPages"];

//	field labels
$fieldLabelsaccount_transactions = array();
$fieldToolTipsaccount_transactions = array();
$pageTitlesaccount_transactions = array();
$placeHoldersaccount_transactions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccount_transactions["English"] = array();
	$fieldToolTipsaccount_transactions["English"] = array();
	$placeHoldersaccount_transactions["English"] = array();
	$pageTitlesaccount_transactions["English"] = array();
	$fieldLabelsaccount_transactions["English"]["idAccount_Transactions"] = "IdAccount Transactions";
	$fieldToolTipsaccount_transactions["English"]["idAccount_Transactions"] = "";
	$placeHoldersaccount_transactions["English"]["idAccount_Transactions"] = "";
	$fieldLabelsaccount_transactions["English"]["Transaction_date"] = "Transaction Date";
	$fieldToolTipsaccount_transactions["English"]["Transaction_date"] = "";
	$placeHoldersaccount_transactions["English"]["Transaction_date"] = "";
	$fieldLabelsaccount_transactions["English"]["To_Account"] = "To Account";
	$fieldToolTipsaccount_transactions["English"]["To_Account"] = "";
	$placeHoldersaccount_transactions["English"]["To_Account"] = "";
	$fieldLabelsaccount_transactions["English"]["From_Account"] = "From Account";
	$fieldToolTipsaccount_transactions["English"]["From_Account"] = "";
	$placeHoldersaccount_transactions["English"]["From_Account"] = "";
	$fieldLabelsaccount_transactions["English"]["Amount__"] = "Amount \$";
	$fieldToolTipsaccount_transactions["English"]["Amount__"] = "";
	$placeHoldersaccount_transactions["English"]["Amount__"] = "";
	$fieldLabelsaccount_transactions["English"]["Amount_TL"] = "Amount TL";
	$fieldToolTipsaccount_transactions["English"]["Amount_TL"] = "";
	$placeHoldersaccount_transactions["English"]["Amount_TL"] = "";
	$fieldLabelsaccount_transactions["English"]["Amount_LL"] = "Amount LL";
	$fieldToolTipsaccount_transactions["English"]["Amount_LL"] = "";
	$placeHoldersaccount_transactions["English"]["Amount_LL"] = "";
	$fieldLabelsaccount_transactions["English"]["Notes"] = "Notes";
	$fieldToolTipsaccount_transactions["English"]["Notes"] = "";
	$placeHoldersaccount_transactions["English"]["Notes"] = "";
	if (count($fieldToolTipsaccount_transactions["English"]))
		$tdataaccount_transactions[".isUseToolTips"] = true;
}


	$tdataaccount_transactions[".NCSearch"] = true;



$tdataaccount_transactions[".shortTableName"] = "account_transactions";
$tdataaccount_transactions[".nSecOptions"] = 0;

$tdataaccount_transactions[".mainTableOwnerID"] = "";
$tdataaccount_transactions[".entityType"] = 0;
$tdataaccount_transactions[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdataaccount_transactions[".strOriginalTableName"] = "Account_Transactions";

	



$tdataaccount_transactions[".showAddInPopup"] = false;

$tdataaccount_transactions[".showEditInPopup"] = false;

$tdataaccount_transactions[".showViewInPopup"] = false;

$tdataaccount_transactions[".listAjax"] = false;
//	temporary
//$tdataaccount_transactions[".listAjax"] = false;

	$tdataaccount_transactions[".audit"] = false;

	$tdataaccount_transactions[".locking"] = false;


$pages = $tdataaccount_transactions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccount_transactions[".edit"] = true;
	$tdataaccount_transactions[".afterEditAction"] = 1;
	$tdataaccount_transactions[".closePopupAfterEdit"] = 1;
	$tdataaccount_transactions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccount_transactions[".add"] = true;
$tdataaccount_transactions[".afterAddAction"] = 1;
$tdataaccount_transactions[".closePopupAfterAdd"] = 1;
$tdataaccount_transactions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccount_transactions[".list"] = true;
}



$tdataaccount_transactions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccount_transactions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccount_transactions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccount_transactions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccount_transactions[".printFriendly"] = true;
}



$tdataaccount_transactions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccount_transactions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccount_transactions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccount_transactions[".isUseAjaxSuggest"] = true;





$tdataaccount_transactions[".ajaxCodeSnippetAdded"] = false;

$tdataaccount_transactions[".buttonsAdded"] = false;

$tdataaccount_transactions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccount_transactions[".isUseTimeForSearch"] = false;


$tdataaccount_transactions[".badgeColor"] = "db7093";


$tdataaccount_transactions[".allSearchFields"] = array();
$tdataaccount_transactions[".filterFields"] = array();
$tdataaccount_transactions[".requiredSearchFields"] = array();

$tdataaccount_transactions[".googleLikeFields"] = array();
$tdataaccount_transactions[".googleLikeFields"][] = "idAccount_Transactions";
$tdataaccount_transactions[".googleLikeFields"][] = "Transaction_date";
$tdataaccount_transactions[".googleLikeFields"][] = "To_Account";
$tdataaccount_transactions[".googleLikeFields"][] = "From_Account";
$tdataaccount_transactions[".googleLikeFields"][] = "Amount_\$";
$tdataaccount_transactions[".googleLikeFields"][] = "Amount_TL";
$tdataaccount_transactions[".googleLikeFields"][] = "Amount_LL";
$tdataaccount_transactions[".googleLikeFields"][] = "Notes";



$tdataaccount_transactions[".tableType"] = "list";

$tdataaccount_transactions[".printerPageOrientation"] = 0;
$tdataaccount_transactions[".nPrinterPageScale"] = 100;

$tdataaccount_transactions[".nPrinterSplitRecords"] = 40;

$tdataaccount_transactions[".geocodingEnabled"] = false;










$tdataaccount_transactions[".pageSize"] = 20;

$tdataaccount_transactions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccount_transactions[".strOrderBy"] = $tstrOrderBy;

$tdataaccount_transactions[".orderindexes"] = array();


$tdataaccount_transactions[".sqlHead"] = "SELECT idAccount_Transactions,  	Transaction_date,  	To_Account,  	From_Account,  	`Amount_\$`,  	Amount_TL,  	Amount_LL,  	Notes";
$tdataaccount_transactions[".sqlFrom"] = "FROM Account_Transactions";
$tdataaccount_transactions[".sqlWhereExpr"] = "";
$tdataaccount_transactions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccount_transactions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccount_transactions[".arrGroupsPerPage"] = $arrGPP;

$tdataaccount_transactions[".highlightSearchResults"] = true;

$tableKeysaccount_transactions = array();
$tableKeysaccount_transactions[] = "idAccount_Transactions";
$tdataaccount_transactions[".Keys"] = $tableKeysaccount_transactions;


$tdataaccount_transactions[".hideMobileList"] = array();




//	idAccount_Transactions
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idAccount_Transactions";
	$fdata["GoodName"] = "idAccount_Transactions";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","idAccount_Transactions");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idAccount_Transactions";

		$fdata["sourceSingle"] = "idAccount_Transactions";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idAccount_Transactions";

	
	
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


	$tdataaccount_transactions["idAccount_Transactions"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "idAccount_Transactions";
//	Transaction_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Transaction_date";
	$fdata["GoodName"] = "Transaction_date";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","Transaction_date");
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


	$tdataaccount_transactions["Transaction_date"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "Transaction_date";
//	To_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "To_Account";
	$fdata["GoodName"] = "To_Account";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","To_Account");
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


	$tdataaccount_transactions["To_Account"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "To_Account";
//	From_Account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "From_Account";
	$fdata["GoodName"] = "From_Account";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","From_Account");
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


	$tdataaccount_transactions["From_Account"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "From_Account";
//	Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount_\$";
	$fdata["GoodName"] = "Amount__";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","Amount__");
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


	$tdataaccount_transactions["Amount_\$"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "Amount_\$";
//	Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount_TL";
	$fdata["GoodName"] = "Amount_TL";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","Amount_TL");
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


	$tdataaccount_transactions["Amount_TL"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "Amount_TL";
//	Amount_LL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Amount_LL";
	$fdata["GoodName"] = "Amount_LL";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","Amount_LL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Amount_LL";

		$fdata["sourceSingle"] = "Amount_LL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount_LL";

	
	
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


	$tdataaccount_transactions["Amount_LL"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "Amount_LL";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Account_Transactions";
	$fdata["Label"] = GetFieldLabel("Account_Transactions","Notes");
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


	$tdataaccount_transactions["Notes"] = $fdata;
		$tdataaccount_transactions[".searchableFields"][] = "Notes";


$tables_data["Account_Transactions"]=&$tdataaccount_transactions;
$field_labels["Account_Transactions"] = &$fieldLabelsaccount_transactions;
$fieldToolTips["Account_Transactions"] = &$fieldToolTipsaccount_transactions;
$placeHolders["Account_Transactions"] = &$placeHoldersaccount_transactions;
$page_titles["Account_Transactions"] = &$pageTitlesaccount_transactions;


changeTextControlsToDate( "Account_Transactions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Account_Transactions"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Account_Transactions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Account";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Account";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "account";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Account_Transactions"][0] = $masterParams;
				$masterTablesData["Account_Transactions"][0]["masterKeys"] = array();
	$masterTablesData["Account_Transactions"][0]["masterKeys"][]="idAccount";
				$masterTablesData["Account_Transactions"][0]["detailKeys"] = array();
	$masterTablesData["Account_Transactions"][0]["detailKeys"][]="To_Account";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_account_transactions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idAccount_Transactions,  	Transaction_date,  	To_Account,  	From_Account,  	`Amount_\$`,  	Amount_TL,  	Amount_LL,  	Notes";
$proto0["m_strFrom"] = "FROM Account_Transactions";
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
	"m_strName" => "idAccount_Transactions",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto6["m_sql"] = "idAccount_Transactions";
$proto6["m_srcTableName"] = "Account_Transactions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Transaction_date",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto8["m_sql"] = "Transaction_date";
$proto8["m_srcTableName"] = "Account_Transactions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "To_Account",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto10["m_sql"] = "To_Account";
$proto10["m_srcTableName"] = "Account_Transactions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "From_Account",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto12["m_sql"] = "From_Account";
$proto12["m_srcTableName"] = "Account_Transactions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_\$",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto14["m_sql"] = "`Amount_\$`";
$proto14["m_srcTableName"] = "Account_Transactions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_TL",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto16["m_sql"] = "Amount_TL";
$proto16["m_srcTableName"] = "Account_Transactions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount_LL",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto18["m_sql"] = "Amount_LL";
$proto18["m_srcTableName"] = "Account_Transactions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Account_Transactions",
	"m_srcTableName" => "Account_Transactions"
));

$proto20["m_sql"] = "Notes";
$proto20["m_srcTableName"] = "Account_Transactions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "Account_Transactions";
$proto23["m_srcTableName"] = "Account_Transactions";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idAccount_Transactions";
$proto23["m_columns"][] = "Transaction_date";
$proto23["m_columns"][] = "To_Account";
$proto23["m_columns"][] = "From_Account";
$proto23["m_columns"][] = "Amount_\$";
$proto23["m_columns"][] = "Amount_TL";
$proto23["m_columns"][] = "Amount_LL";
$proto23["m_columns"][] = "Notes";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "Account_Transactions";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Account_Transactions";
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
$proto0["m_srcTableName"]="Account_Transactions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_account_transactions = createSqlQuery_account_transactions();


	
		;

								

$tdataaccount_transactions[".sqlquery"] = $queryData_account_transactions;



$tdataaccount_transactions[".hasEvents"] = false;

?>