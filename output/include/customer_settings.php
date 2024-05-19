<?php
$tdatacustomer = array();
$tdatacustomer[".searchableFields"] = array();
$tdatacustomer[".ShortName"] = "customer";
$tdatacustomer[".OwnerID"] = "";
$tdatacustomer[".OriginalTable"] = "Customer";


$tdatacustomer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomer[".originalPagesByType"] = $tdatacustomer[".pagesByType"];
$tdatacustomer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomer[".originalPages"] = $tdatacustomer[".pages"];
$tdatacustomer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomer[".originalDefaultPages"] = $tdatacustomer[".defaultPages"];

//	field labels
$fieldLabelscustomer = array();
$fieldToolTipscustomer = array();
$pageTitlescustomer = array();
$placeHolderscustomer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer["English"] = array();
	$fieldToolTipscustomer["English"] = array();
	$placeHolderscustomer["English"] = array();
	$pageTitlescustomer["English"] = array();
	$fieldLabelscustomer["English"]["idCustomer"] = "Customer ID";
	$fieldToolTipscustomer["English"]["idCustomer"] = "";
	$placeHolderscustomer["English"]["idCustomer"] = "";
	$fieldLabelscustomer["English"]["Name"] = "Name";
	$fieldToolTipscustomer["English"]["Name"] = "";
	$placeHolderscustomer["English"]["Name"] = "";
	$fieldLabelscustomer["English"]["Address"] = "Address";
	$fieldToolTipscustomer["English"]["Address"] = "";
	$placeHolderscustomer["English"]["Address"] = "";
	$fieldLabelscustomer["English"]["Phone"] = "Phone";
	$fieldToolTipscustomer["English"]["Phone"] = "";
	$placeHolderscustomer["English"]["Phone"] = "";
	$fieldLabelscustomer["English"]["Type_Of_Customer"] = "Type Of Customer";
	$fieldToolTipscustomer["English"]["Type_Of_Customer"] = "";
	$placeHolderscustomer["English"]["Type_Of_Customer"] = "";
	$fieldLabelscustomer["English"]["Balance"] = "Balance";
	$fieldToolTipscustomer["English"]["Balance"] = "";
	$placeHolderscustomer["English"]["Balance"] = "";
	$fieldLabelscustomer["English"]["Notes"] = "Notes";
	$fieldToolTipscustomer["English"]["Notes"] = "";
	$placeHolderscustomer["English"]["Notes"] = "";
	if (count($fieldToolTipscustomer["English"]))
		$tdatacustomer[".isUseToolTips"] = true;
}


	$tdatacustomer[".NCSearch"] = true;



$tdatacustomer[".shortTableName"] = "customer";
$tdatacustomer[".nSecOptions"] = 0;

$tdatacustomer[".mainTableOwnerID"] = "";
$tdatacustomer[".entityType"] = 0;
$tdatacustomer[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatacustomer[".strOriginalTableName"] = "Customer";

	



$tdatacustomer[".showAddInPopup"] = false;

$tdatacustomer[".showEditInPopup"] = false;

$tdatacustomer[".showViewInPopup"] = false;

$tdatacustomer[".listAjax"] = false;
//	temporary
//$tdatacustomer[".listAjax"] = false;

	$tdatacustomer[".audit"] = false;

	$tdatacustomer[".locking"] = false;


$pages = $tdatacustomer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomer[".edit"] = true;
	$tdatacustomer[".afterEditAction"] = 1;
	$tdatacustomer[".closePopupAfterEdit"] = 1;
	$tdatacustomer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomer[".add"] = true;
$tdatacustomer[".afterAddAction"] = 1;
$tdatacustomer[".closePopupAfterAdd"] = 1;
$tdatacustomer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomer[".list"] = true;
}



$tdatacustomer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomer[".printFriendly"] = true;
}



$tdatacustomer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomer[".isUseAjaxSuggest"] = true;



									

$tdatacustomer[".ajaxCodeSnippetAdded"] = false;

$tdatacustomer[".buttonsAdded"] = false;

$tdatacustomer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer[".isUseTimeForSearch"] = false;


$tdatacustomer[".badgeColor"] = "2F4F4F";


$tdatacustomer[".allSearchFields"] = array();
$tdatacustomer[".filterFields"] = array();
$tdatacustomer[".requiredSearchFields"] = array();

$tdatacustomer[".googleLikeFields"] = array();
$tdatacustomer[".googleLikeFields"][] = "idCustomer";
$tdatacustomer[".googleLikeFields"][] = "Name";
$tdatacustomer[".googleLikeFields"][] = "Address";
$tdatacustomer[".googleLikeFields"][] = "Phone";
$tdatacustomer[".googleLikeFields"][] = "Type_Of_Customer";
$tdatacustomer[".googleLikeFields"][] = "Balance";
$tdatacustomer[".googleLikeFields"][] = "Notes";



$tdatacustomer[".tableType"] = "list";

$tdatacustomer[".printerPageOrientation"] = 0;
$tdatacustomer[".nPrinterPageScale"] = 100;

$tdatacustomer[".nPrinterSplitRecords"] = 40;

$tdatacustomer[".geocodingEnabled"] = false;










$tdatacustomer[".pageSize"] = 20;

$tdatacustomer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomer[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer[".orderindexes"] = array();


$tdatacustomer[".sqlHead"] = "SELECT idCustomer,      Name,      Address,      Phone,      Type_Of_Customer,      (Balance + COALESCE((SELECT SUM(Balance) FROM `Order` WHERE Customer = Customer.idCustomer), 0)) AS Balance,      Notes";
$tdatacustomer[".sqlFrom"] = "FROM Customer";
$tdatacustomer[".sqlWhereExpr"] = "";
$tdatacustomer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomer[".highlightSearchResults"] = true;

$tableKeyscustomer = array();
$tableKeyscustomer[] = "idCustomer";
$tdatacustomer[".Keys"] = $tableKeyscustomer;


$tdatacustomer[".hideMobileList"] = array();




//	idCustomer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCustomer";
	$fdata["GoodName"] = "idCustomer";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","idCustomer");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idCustomer";

		$fdata["sourceSingle"] = "idCustomer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCustomer";

	
	
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


	$tdatacustomer["idCustomer"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "idCustomer";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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


	$tdatacustomer["Name"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Name";
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","Address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address";

		$fdata["sourceSingle"] = "Address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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


	$tdatacustomer["Address"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Address";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","Phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone";

		$fdata["sourceSingle"] = "Phone";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone";

	
	
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


	$tdatacustomer["Phone"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Phone";
//	Type_Of_Customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Type_Of_Customer";
	$fdata["GoodName"] = "Type_Of_Customer";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","Type_Of_Customer");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Type_Of_Customer";

		$fdata["sourceSingle"] = "Type_Of_Customer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Type_Of_Customer";

	
	
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
	$edata["LookupTable"] = "Customer_Type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCustomer_Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

	

	
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


	$tdatacustomer["Type_Of_Customer"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Type_Of_Customer";
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Customer","Balance");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Balance";

		$fdata["sourceSingle"] = "Balance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(Balance + COALESCE((SELECT SUM(Balance) FROM `Order` WHERE Customer = Customer.idCustomer), 0))";

	
	
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


	$tdatacustomer["Balance"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Balance";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Customer";
	$fdata["Label"] = GetFieldLabel("Customer","Notes");
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


	$tdatacustomer["Notes"] = $fdata;
		$tdatacustomer[".searchableFields"][] = "Notes";


$tables_data["Customer"]=&$tdatacustomer;
$field_labels["Customer"] = &$fieldLabelscustomer;
$fieldToolTips["Customer"] = &$fieldToolTipscustomer;
$placeHolders["Customer"] = &$placeHolderscustomer;
$page_titles["Customer"] = &$pageTitlescustomer;


changeTextControlsToDate( "Customer" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Customer"] = array();
//	Order
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Order";
		$detailsParam["dOriginalTable"] = "Order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "order";
	$detailsParam["dCaptionTable"] = GetTableCaption("Order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Customer"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Customer"][$dIndex]["masterKeys"][]="idCustomer";

				$detailsTablesData["Customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Customer"][$dIndex]["detailKeys"][]="Customer";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Customer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCustomer,      Name,      Address,      Phone,      Type_Of_Customer,      (Balance + COALESCE((SELECT SUM(Balance) FROM `Order` WHERE Customer = Customer.idCustomer), 0)) AS Balance,      Notes";
$proto0["m_strFrom"] = "FROM Customer";
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
	"m_strName" => "idCustomer",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto6["m_sql"] = "idCustomer";
$proto6["m_srcTableName"] = "Customer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "Customer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto10["m_sql"] = "Address";
$proto10["m_srcTableName"] = "Customer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto12["m_sql"] = "Phone";
$proto12["m_srcTableName"] = "Customer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Type_Of_Customer",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto14["m_sql"] = "Type_Of_Customer";
$proto14["m_srcTableName"] = "Customer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(Balance + COALESCE((SELECT SUM(Balance) FROM `Order` WHERE Customer = Customer.idCustomer), 0))"
));

$proto16["m_sql"] = "(Balance + COALESCE((SELECT SUM(Balance) FROM `Order` WHERE Customer = Customer.idCustomer), 0))";
$proto16["m_srcTableName"] = "Customer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Balance";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Customer",
	"m_srcTableName" => "Customer"
));

$proto18["m_sql"] = "Notes";
$proto18["m_srcTableName"] = "Customer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "Customer";
$proto21["m_srcTableName"] = "Customer";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idCustomer";
$proto21["m_columns"][] = "Name";
$proto21["m_columns"][] = "Address";
$proto21["m_columns"][] = "Phone";
$proto21["m_columns"][] = "Type_Of_Customer";
$proto21["m_columns"][] = "Balance";
$proto21["m_columns"][] = "Notes";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "Customer";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Customer";
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
$proto0["m_srcTableName"]="Customer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customer = createSqlQuery_customer();


	
		;

							

$tdatacustomer[".sqlquery"] = $queryData_customer;



include_once(getabspath("include/customer_events.php"));
$tdatacustomer[".hasEvents"] = true;

?>