<?php
$tdataorder = array();
$tdataorder[".searchableFields"] = array();
$tdataorder[".ShortName"] = "order";
$tdataorder[".OwnerID"] = "";
$tdataorder[".OriginalTable"] = "Order";


$tdataorder[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataorder[".originalPagesByType"] = $tdataorder[".pagesByType"];
$tdataorder[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataorder[".originalPages"] = $tdataorder[".pages"];
$tdataorder[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataorder[".originalDefaultPages"] = $tdataorder[".defaultPages"];

//	field labels
$fieldLabelsorder = array();
$fieldToolTipsorder = array();
$pageTitlesorder = array();
$placeHoldersorder = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorder["English"] = array();
	$fieldToolTipsorder["English"] = array();
	$placeHoldersorder["English"] = array();
	$pageTitlesorder["English"] = array();
	$fieldLabelsorder["English"]["idOrder"] = "Order ID";
	$fieldToolTipsorder["English"]["idOrder"] = "";
	$placeHoldersorder["English"]["idOrder"] = "";
	$fieldLabelsorder["English"]["Customer"] = "Customer";
	$fieldToolTipsorder["English"]["Customer"] = "";
	$placeHoldersorder["English"]["Customer"] = "";
	$fieldLabelsorder["English"]["Shipment"] = "Shipment";
	$fieldToolTipsorder["English"]["Shipment"] = "";
	$placeHoldersorder["English"]["Shipment"] = "";
	$fieldLabelsorder["English"]["Weight"] = "Weight";
	$fieldToolTipsorder["English"]["Weight"] = "";
	$placeHoldersorder["English"]["Weight"] = "";
	$fieldLabelsorder["English"]["Status"] = "Status";
	$fieldToolTipsorder["English"]["Status"] = "";
	$placeHoldersorder["English"]["Status"] = "";
	$fieldLabelsorder["English"]["Notes"] = "Notes";
	$fieldToolTipsorder["English"]["Notes"] = "";
	$placeHoldersorder["English"]["Notes"] = "";
	$fieldLabelsorder["English"]["Category"] = "Category";
	$fieldToolTipsorder["English"]["Category"] = "";
	$placeHoldersorder["English"]["Category"] = "";
	$fieldLabelsorder["English"]["Shipping_Cost"] = "Shipping Fee";
	$fieldToolTipsorder["English"]["Shipping_Cost"] = "";
	$placeHoldersorder["English"]["Shipping_Cost"] = "";
	$fieldLabelsorder["English"]["Customer_Shipping_Fee"] = "Cust Shipping";
	$fieldToolTipsorder["English"]["Customer_Shipping_Fee"] = "";
	$placeHoldersorder["English"]["Customer_Shipping_Fee"] = "";
	$fieldLabelsorder["English"]["Total_Price"] = "Total Price/Balance";
	$fieldToolTipsorder["English"]["Total_Price"] = "";
	$placeHoldersorder["English"]["Total_Price"] = "";
	$fieldLabelsorder["English"]["Ordered"] = "Ordered";
	$fieldToolTipsorder["English"]["Ordered"] = "";
	$placeHoldersorder["English"]["Ordered"] = "";
	$fieldLabelsorder["English"]["Description"] = "Description";
	$fieldToolTipsorder["English"]["Description"] = "";
	$placeHoldersorder["English"]["Description"] = "";
	$fieldLabelsorder["English"]["Balance"] = "Balance";
	$fieldToolTipsorder["English"]["Balance"] = "";
	$placeHoldersorder["English"]["Balance"] = "";
	$fieldLabelsorder["English"]["Price_TL"] = "Price TL";
	$fieldToolTipsorder["English"]["Price_TL"] = "";
	$placeHoldersorder["English"]["Price_TL"] = "";
	$fieldLabelsorder["English"]["Price__"] = "Price \$";
	$fieldToolTipsorder["English"]["Price__"] = "";
	$placeHoldersorder["English"]["Price__"] = "";
	$fieldLabelsorder["English"]["Rate"] = "Rate";
	$fieldToolTipsorder["English"]["Rate"] = "";
	$placeHoldersorder["English"]["Rate"] = "";
	$pageTitlesorder["English"]["list"] = "Orders";
	if (count($fieldToolTipsorder["English"]))
		$tdataorder[".isUseToolTips"] = true;
}


	$tdataorder[".NCSearch"] = true;



$tdataorder[".shortTableName"] = "order";
$tdataorder[".nSecOptions"] = 0;

$tdataorder[".mainTableOwnerID"] = "";
$tdataorder[".entityType"] = 0;
$tdataorder[".connId"] = "bvsxncteMMShippingatlibanexco";


$tdataorder[".strOriginalTableName"] = "Order";

	



$tdataorder[".showAddInPopup"] = false;

$tdataorder[".showEditInPopup"] = false;

$tdataorder[".showViewInPopup"] = false;

$tdataorder[".listAjax"] = false;
//	temporary
//$tdataorder[".listAjax"] = false;

	$tdataorder[".audit"] = false;

	$tdataorder[".locking"] = false;


$pages = $tdataorder[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorder[".edit"] = true;
	$tdataorder[".afterEditAction"] = 1;
	$tdataorder[".closePopupAfterEdit"] = 1;
	$tdataorder[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorder[".add"] = true;
$tdataorder[".afterAddAction"] = 1;
$tdataorder[".closePopupAfterAdd"] = 1;
$tdataorder[".afterAddActionDetTable"] = "Sent";
}

if( $pages[PAGE_LIST] ) {
	$tdataorder[".list"] = true;
}



$tdataorder[".strSortControlSettingsJSON"] = "";

$tdataorder[".strClickActionJSON"] = "{\"fields\":{\"Category\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"Customer\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Date_Ordered\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Expected_delivery_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Notes\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Order_Description\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Price_in_\$\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Price_in_TL\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Rate_for_Client\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Shipment\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Weight\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"idOrder\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataorder[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorder[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorder[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorder[".printFriendly"] = true;
}



$tdataorder[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorder[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorder[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorder[".isUseAjaxSuggest"] = true;



																											

$tdataorder[".ajaxCodeSnippetAdded"] = false;

$tdataorder[".buttonsAdded"] = false;

$tdataorder[".addPageEvents"] = true;

// use timepicker for search panel
$tdataorder[".isUseTimeForSearch"] = false;


$tdataorder[".badgeColor"] = "daa520";


$tdataorder[".allSearchFields"] = array();
$tdataorder[".filterFields"] = array();
$tdataorder[".requiredSearchFields"] = array();

$tdataorder[".googleLikeFields"] = array();
$tdataorder[".googleLikeFields"][] = "idOrder";
$tdataorder[".googleLikeFields"][] = "Customer";
$tdataorder[".googleLikeFields"][] = "Shipment";
$tdataorder[".googleLikeFields"][] = "Ordered";
$tdataorder[".googleLikeFields"][] = "Category";
$tdataorder[".googleLikeFields"][] = "Description";
$tdataorder[".googleLikeFields"][] = "Price_TL";
$tdataorder[".googleLikeFields"][] = "Rate";
$tdataorder[".googleLikeFields"][] = "Price_\$";
$tdataorder[".googleLikeFields"][] = "Shipping_Cost";
$tdataorder[".googleLikeFields"][] = "Customer_Shipping_Fee";
$tdataorder[".googleLikeFields"][] = "Total_Price";
$tdataorder[".googleLikeFields"][] = "Balance";
$tdataorder[".googleLikeFields"][] = "Weight";
$tdataorder[".googleLikeFields"][] = "Status";
$tdataorder[".googleLikeFields"][] = "Notes";



$tdataorder[".tableType"] = "list";

$tdataorder[".printerPageOrientation"] = 0;
$tdataorder[".nPrinterPageScale"] = 100;

$tdataorder[".nPrinterSplitRecords"] = 40;

$tdataorder[".geocodingEnabled"] = false;










$tdataorder[".pageSize"] = 20;

$tdataorder[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataorder[".strOrderBy"] = $tstrOrderBy;

$tdataorder[".orderindexes"] = array();


$tdataorder[".sqlHead"] = "SELECT idOrder,  	Customer,  	Shipment,  	Ordered,  	Category,  	Description,  	Price_TL,  	Rate,  	`Price_\$`,  	Shipping_Cost,  	Customer_Shipping_Fee,  	Total_Price,  	Balance,  	Weight,  	Status,  	Notes";
$tdataorder[".sqlFrom"] = "FROM `Order`";
$tdataorder[".sqlWhereExpr"] = "";
$tdataorder[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorder[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorder[".arrGroupsPerPage"] = $arrGPP;

$tdataorder[".highlightSearchResults"] = true;

$tableKeysorder = array();
$tableKeysorder[] = "idOrder";
$tdataorder[".Keys"] = $tableKeysorder;


$tdataorder[".hideMobileList"] = array();




//	idOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idOrder";
	$fdata["GoodName"] = "idOrder";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","idOrder");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idOrder";

		$fdata["sourceSingle"] = "idOrder";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idOrder";

	
	
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


	$tdataorder["idOrder"] = $fdata;
		$tdataorder[".searchableFields"][] = "idOrder";
//	Customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Customer";
	$fdata["GoodName"] = "Customer";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Customer");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Customer";

		$fdata["sourceSingle"] = "Customer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Customer";

	
	
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
	$edata["LookupTable"] = "Customer";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCustomer";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "idCustomer";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
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


	$tdataorder["Customer"] = $fdata;
		$tdataorder[".searchableFields"][] = "Customer";
//	Shipment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Shipment";
	$fdata["GoodName"] = "Shipment";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Shipment");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Shipment";

		$fdata["sourceSingle"] = "Shipment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Shipment";

	
	
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


	$tdataorder["Shipment"] = $fdata;
		$tdataorder[".searchableFields"][] = "Shipment";
//	Ordered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ordered";
	$fdata["GoodName"] = "Ordered";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Ordered");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Ordered";

		$fdata["sourceSingle"] = "Ordered";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ordered";

	
	
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


	$tdataorder["Ordered"] = $fdata;
		$tdataorder[".searchableFields"][] = "Ordered";
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Category");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Category";

		$fdata["sourceSingle"] = "Category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";

	
	
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
	$edata["LookupTable"] = "Order_Categories";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idOrder_Categories";
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


	$tdataorder["Category"] = $fdata;
		$tdataorder[".searchableFields"][] = "Category";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Description");
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


	$tdataorder["Description"] = $fdata;
		$tdataorder[".searchableFields"][] = "Description";
//	Price_TL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Price_TL";
	$fdata["GoodName"] = "Price_TL";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Price_TL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Price_TL";

		$fdata["sourceSingle"] = "Price_TL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price_TL";

	
	
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


	$tdataorder["Price_TL"] = $fdata;
		$tdataorder[".searchableFields"][] = "Price_TL";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Rate");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Rate";

		$fdata["sourceSingle"] = "Rate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rate";

	
	
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


	$tdataorder["Rate"] = $fdata;
		$tdataorder[".searchableFields"][] = "Rate";
//	Price_$
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Price_\$";
	$fdata["GoodName"] = "Price__";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Price__");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Price_\$";

		$fdata["sourceSingle"] = "Price_\$";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Price_\$`";

	
	
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


	$tdataorder["Price_\$"] = $fdata;
		$tdataorder[".searchableFields"][] = "Price_\$";
//	Shipping_Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Shipping_Cost";
	$fdata["GoodName"] = "Shipping_Cost";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Shipping_Cost");
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


	$tdataorder["Shipping_Cost"] = $fdata;
		$tdataorder[".searchableFields"][] = "Shipping_Cost";
//	Customer_Shipping_Fee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Customer_Shipping_Fee";
	$fdata["GoodName"] = "Customer_Shipping_Fee";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Customer_Shipping_Fee");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Customer_Shipping_Fee";

		$fdata["sourceSingle"] = "Customer_Shipping_Fee";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Customer_Shipping_Fee";

	
	
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


	$tdataorder["Customer_Shipping_Fee"] = $fdata;
		$tdataorder[".searchableFields"][] = "Customer_Shipping_Fee";
//	Total_Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Total_Price";
	$fdata["GoodName"] = "Total_Price";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Total_Price");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Total_Price";

		$fdata["sourceSingle"] = "Total_Price";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Total_Price";

	
	
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


	$tdataorder["Total_Price"] = $fdata;
		$tdataorder[".searchableFields"][] = "Total_Price";
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Balance");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Balance";

		$fdata["sourceSingle"] = "Balance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balance";

	
	
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


	$tdataorder["Balance"] = $fdata;
		$tdataorder[".searchableFields"][] = "Balance";
//	Weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Weight";
	$fdata["GoodName"] = "Weight";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Weight");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Weight";

		$fdata["sourceSingle"] = "Weight";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Weight";

	
	
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


	$tdataorder["Weight"] = $fdata;
		$tdataorder[".searchableFields"][] = "Weight";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "Status";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idStatus";
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
		$fdata["filterTotalFields"] = "idOrder";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataorder["Status"] = $fdata;
		$tdataorder[".searchableFields"][] = "Status";
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "Order";
	$fdata["Label"] = GetFieldLabel("Order","Notes");
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


	$tdataorder["Notes"] = $fdata;
		$tdataorder[".searchableFields"][] = "Notes";


$tables_data["Order"]=&$tdataorder;
$field_labels["Order"] = &$fieldLabelsorder;
$fieldToolTips["Order"] = &$fieldToolTipsorder;
$placeHolders["Order"] = &$placeHoldersorder;
$page_titles["Order"] = &$pageTitlesorder;


changeTextControlsToDate( "Order" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Order"] = array();
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


		
	$detailsTablesData["Order"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Order"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Order"][$dIndex]["masterKeys"][]="idOrder";

				$detailsTablesData["Order"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Order"][$dIndex]["detailKeys"][]="Order_ID";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Order"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Customer";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Customer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customer";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Order"][0] = $masterParams;
				$masterTablesData["Order"][0]["masterKeys"] = array();
	$masterTablesData["Order"][0]["masterKeys"][]="idCustomer";
				$masterTablesData["Order"][0]["detailKeys"] = array();
	$masterTablesData["Order"][0]["detailKeys"][]="Customer";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Shipment";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Shipment";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "shipment";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Order"][1] = $masterParams;
				$masterTablesData["Order"][1]["masterKeys"] = array();
	$masterTablesData["Order"][1]["masterKeys"][]="idShipment";
				$masterTablesData["Order"][1]["detailKeys"] = array();
	$masterTablesData["Order"][1]["detailKeys"][]="Shipment";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idOrder,  	Customer,  	Shipment,  	Ordered,  	Category,  	Description,  	Price_TL,  	Rate,  	`Price_\$`,  	Shipping_Cost,  	Customer_Shipping_Fee,  	Total_Price,  	Balance,  	Weight,  	Status,  	Notes";
$proto0["m_strFrom"] = "FROM `Order`";
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
	"m_strName" => "idOrder",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto6["m_sql"] = "idOrder";
$proto6["m_srcTableName"] = "Order";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Customer",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto8["m_sql"] = "Customer";
$proto8["m_srcTableName"] = "Order";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipment",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto10["m_sql"] = "Shipment";
$proto10["m_srcTableName"] = "Order";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordered",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto12["m_sql"] = "Ordered";
$proto12["m_srcTableName"] = "Order";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto14["m_sql"] = "Category";
$proto14["m_srcTableName"] = "Order";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto16["m_sql"] = "Description";
$proto16["m_srcTableName"] = "Order";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Price_TL",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto18["m_sql"] = "Price_TL";
$proto18["m_srcTableName"] = "Order";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "Order";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Price_\$",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto22["m_sql"] = "`Price_\$`";
$proto22["m_srcTableName"] = "Order";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Shipping_Cost",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto24["m_sql"] = "Shipping_Cost";
$proto24["m_srcTableName"] = "Order";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Customer_Shipping_Fee",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto26["m_sql"] = "Customer_Shipping_Fee";
$proto26["m_srcTableName"] = "Order";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Total_Price",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto28["m_sql"] = "Total_Price";
$proto28["m_srcTableName"] = "Order";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto30["m_sql"] = "Balance";
$proto30["m_srcTableName"] = "Order";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Weight",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto32["m_sql"] = "Weight";
$proto32["m_srcTableName"] = "Order";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto34["m_sql"] = "Status";
$proto34["m_srcTableName"] = "Order";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "Order",
	"m_srcTableName" => "Order"
));

$proto36["m_sql"] = "Notes";
$proto36["m_srcTableName"] = "Order";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "Order";
$proto39["m_srcTableName"] = "Order";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "idOrder";
$proto39["m_columns"][] = "Customer";
$proto39["m_columns"][] = "Shipment";
$proto39["m_columns"][] = "Ordered";
$proto39["m_columns"][] = "Category";
$proto39["m_columns"][] = "Description";
$proto39["m_columns"][] = "Price_TL";
$proto39["m_columns"][] = "Rate";
$proto39["m_columns"][] = "Price_\$";
$proto39["m_columns"][] = "Shipping_Cost";
$proto39["m_columns"][] = "Customer_Shipping_Fee";
$proto39["m_columns"][] = "Total_Price";
$proto39["m_columns"][] = "Balance";
$proto39["m_columns"][] = "Weight";
$proto39["m_columns"][] = "Status";
$proto39["m_columns"][] = "Notes";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`Order`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Order";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Order";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_order = createSqlQuery_order();


	
		;

																

$tdataorder[".sqlquery"] = $queryData_order;



include_once(getabspath("include/order_events.php"));
$tdataorder[".hasEvents"] = true;

?>