<?php
$tdatashipment = array();
$tdatashipment[".searchableFields"] = array();
$tdatashipment[".ShortName"] = "shipment";
$tdatashipment[".OwnerID"] = "";
$tdatashipment[".OriginalTable"] = "Shipment";


$tdatashipment[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatashipment[".originalPagesByType"] = $tdatashipment[".pagesByType"];
$tdatashipment[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatashipment[".originalPages"] = $tdatashipment[".pages"];
$tdatashipment[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatashipment[".originalDefaultPages"] = $tdatashipment[".defaultPages"];

//	field labels
$fieldLabelsshipment = array();
$fieldToolTipsshipment = array();
$pageTitlesshipment = array();
$placeHoldersshipment = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshipment["English"] = array();
	$fieldToolTipsshipment["English"] = array();
	$placeHoldersshipment["English"] = array();
	$pageTitlesshipment["English"] = array();
	$fieldLabelsshipment["English"]["idShipment"] = "Shipment ID";
	$fieldToolTipsshipment["English"]["idShipment"] = "";
	$placeHoldersshipment["English"]["idShipment"] = "";
	$fieldLabelsshipment["English"]["Shipment_date"] = "Shipment Date";
	$fieldToolTipsshipment["English"]["Shipment_date"] = "";
	$placeHoldersshipment["English"]["Shipment_date"] = "";
	$fieldLabelsshipment["English"]["Shipment_Amount__"] = "Shipment Amount \$";
	$fieldToolTipsshipment["English"]["Shipment_Amount__"] = "";
	$placeHoldersshipment["English"]["Shipment_Amount__"] = "";
	$fieldLabelsshipment["English"]["Shipment_Amount_TL"] = "Shipment Amount TL";
	$fieldToolTipsshipment["English"]["Shipment_Amount_TL"] = "";
	$placeHoldersshipment["English"]["Shipment_Amount_TL"] = "";
	$fieldLabelsshipment["English"]["Notes"] = "Notes";
	$fieldToolTipsshipment["English"]["Notes"] = "";
	$placeHoldersshipment["English"]["Notes"] = "";
	$fieldLabelsshipment["English"]["Shipping_Cost"] = "Shipping Cost";
	$fieldToolTipsshipment["English"]["Shipping_Cost"] = "";
	$placeHoldersshipment["English"]["Shipping_Cost"] = "";
	if (count($fieldToolTipsshipment["English"]))
		$tdatashipment[".isUseToolTips"] = true;
}


	$tdatashipment[".NCSearch"] = true;



$tdatashipment[".shortTableName"] = "shipment";
$tdatashipment[".nSecOptions"] = 0;

$tdatashipment[".mainTableOwnerID"] = "";
$tdatashipment[".entityType"] = 0;
$tdatashipment[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdatashipment[".strOriginalTableName"] = "Shipment";

	



$tdatashipment[".showAddInPopup"] = false;

$tdatashipment[".showEditInPopup"] = false;

$tdatashipment[".showViewInPopup"] = false;

$tdatashipment[".listAjax"] = false;
//	temporary
//$tdatashipment[".listAjax"] = false;

	$tdatashipment[".audit"] = false;

	$tdatashipment[".locking"] = false;


$pages = $tdatashipment[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatashipment[".edit"] = true;
	$tdatashipment[".afterEditAction"] = 1;
	$tdatashipment[".closePopupAfterEdit"] = 1;
	$tdatashipment[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatashipment[".add"] = true;
$tdatashipment[".afterAddAction"] = 1;
$tdatashipment[".closePopupAfterAdd"] = 1;
$tdatashipment[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatashipment[".list"] = true;
}



$tdatashipment[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatashipment[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatashipment[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatashipment[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatashipment[".printFriendly"] = true;
}



$tdatashipment[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatashipment[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatashipment[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatashipment[".isUseAjaxSuggest"] = true;



									

$tdatashipment[".ajaxCodeSnippetAdded"] = false;

$tdatashipment[".buttonsAdded"] = false;

$tdatashipment[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashipment[".isUseTimeForSearch"] = false;


$tdatashipment[".badgeColor"] = "00C2C5";


$tdatashipment[".allSearchFields"] = array();
$tdatashipment[".filterFields"] = array();
$tdatashipment[".requiredSearchFields"] = array();

$tdatashipment[".googleLikeFields"] = array();
$tdatashipment[".googleLikeFields"][] = "idShipment";
$tdatashipment[".googleLikeFields"][] = "Shipment_date";
$tdatashipment[".googleLikeFields"][] = "Shipment_Amount_\$";
$tdatashipment[".googleLikeFields"][] = "Shipment_Amount_TL";
$tdatashipment[".googleLikeFields"][] = "Shipping_Cost";
$tdatashipment[".googleLikeFields"][] = "Notes";



$tdatashipment[".tableType"] = "list";

$tdatashipment[".printerPageOrientation"] = 0;
$tdatashipment[".nPrinterPageScale"] = 100;

$tdatashipment[".nPrinterSplitRecords"] = 40;

$tdatashipment[".geocodingEnabled"] = false;










$tdatashipment[".pageSize"] = 20;

$tdatashipment[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatashipment[".strOrderBy"] = $tstrOrderBy;

$tdatashipment[".orderindexes"] = array();


$tdatashipment[".sqlHead"] = "SELECT idShipment,  	Shipment_date,  	`Shipment_Amount_\$`,  	Shipment_Amount_TL,  	Shipping_Cost,  	Notes";
$tdatashipment[".sqlFrom"] = "FROM Shipment";
$tdatashipment[".sqlWhereExpr"] = "";
$tdatashipment[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashipment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashipment[".arrGroupsPerPage"] = $arrGPP;

$tdatashipment[".highlightSearchResults"] = true;

$tableKeysshipment = array();
$tableKeysshipment[] = "idShipment";
$tdatashipment[".Keys"] = $tableKeysshipment;


$tdatashipment[".hideMobileList"] = array();




//	idShipment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idShipment";
	$fdata["GoodName"] = "idShipment";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","idShipment");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idShipment";

		$fdata["sourceSingle"] = "idShipment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idShipment";

	
	
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


	$tdatashipment["idShipment"] = $fdata;
		$tdatashipment[".searchableFields"][] = "idShipment";
//	Shipment_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Shipment_date";
	$fdata["GoodName"] = "Shipment_date";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","Shipment_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Shipment_date";

		$fdata["sourceSingle"] = "Shipment_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shipment_date";

	
	
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


	$tdatashipment["Shipment_date"] = $fdata;
		$tdatashipment[".searchableFields"][] = "Shipment_date";
//	Shipment_Amount_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Shipment_Amount_\$";
	$fdata["GoodName"] = "Shipment_Amount__";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","Shipment_Amount__");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Shipment_Amount_\$";

		$fdata["sourceSingle"] = "Shipment_Amount_\$";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Shipment_Amount_\$`";

	
	
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


	$tdatashipment["Shipment_Amount_\$"] = $fdata;
		$tdatashipment[".searchableFields"][] = "Shipment_Amount_\$";
//	Shipment_Amount_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Shipment_Amount_TL";
	$fdata["GoodName"] = "Shipment_Amount_TL";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","Shipment_Amount_TL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Shipment_Amount_TL";

		$fdata["sourceSingle"] = "Shipment_Amount_TL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shipment_Amount_TL";

	
	
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


	$tdatashipment["Shipment_Amount_TL"] = $fdata;
		$tdatashipment[".searchableFields"][] = "Shipment_Amount_TL";
//	Shipping_Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Shipping_Cost";
	$fdata["GoodName"] = "Shipping_Cost";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","Shipping_Cost");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Shipping_Cost";

		$fdata["sourceSingle"] = "Shipping_Cost";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shipping_Cost";

	
	
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


	$tdatashipment["Shipping_Cost"] = $fdata;
		$tdatashipment[".searchableFields"][] = "Shipping_Cost";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Shipment";
	$fdata["Label"] = GetFieldLabel("Shipment","Notes");
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


	$tdatashipment["Notes"] = $fdata;
		$tdatashipment[".searchableFields"][] = "Notes";


$tables_data["Shipment"]=&$tdatashipment;
$field_labels["Shipment"] = &$fieldLabelsshipment;
$fieldToolTips["Shipment"] = &$fieldToolTipsshipment;
$placeHolders["Shipment"] = &$placeHoldersshipment;
$page_titles["Shipment"] = &$pageTitlesshipment;


changeTextControlsToDate( "Shipment" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Shipment"] = array();
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


		
	$detailsTablesData["Shipment"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Shipment"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Shipment"][$dIndex]["masterKeys"][]="idShipment";

				$detailsTablesData["Shipment"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Shipment"][$dIndex]["detailKeys"][]="Shipment";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Shipment"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_shipment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idShipment,  	Shipment_date,  	`Shipment_Amount_\$`,  	Shipment_Amount_TL,  	Shipping_Cost,  	Notes";
$proto0["m_strFrom"] = "FROM Shipment";
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
	"m_strName" => "idShipment",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto6["m_sql"] = "idShipment";
$proto6["m_srcTableName"] = "Shipment";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipment_date",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto8["m_sql"] = "Shipment_date";
$proto8["m_srcTableName"] = "Shipment";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipment_Amount_\$",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto10["m_sql"] = "`Shipment_Amount_\$`";
$proto10["m_srcTableName"] = "Shipment";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipment_Amount_TL",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto12["m_sql"] = "Shipment_Amount_TL";
$proto12["m_srcTableName"] = "Shipment";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipping_Cost",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto14["m_sql"] = "Shipping_Cost";
$proto14["m_srcTableName"] = "Shipment";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Shipment",
	"m_srcTableName" => "Shipment"
));

$proto16["m_sql"] = "Notes";
$proto16["m_srcTableName"] = "Shipment";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "Shipment";
$proto19["m_srcTableName"] = "Shipment";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idShipment";
$proto19["m_columns"][] = "Shipment_date";
$proto19["m_columns"][] = "Shipment_Amount_\$";
$proto19["m_columns"][] = "Shipment_Amount_TL";
$proto19["m_columns"][] = "Shipping_Cost";
$proto19["m_columns"][] = "Notes";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "Shipment";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Shipment";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Shipment";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shipment = createSqlQuery_shipment();


	
		;

						

$tdatashipment[".sqlquery"] = $queryData_shipment;



$tdatashipment[".hasEvents"] = false;

?>