<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => true,
'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'userinfo_link' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'Account',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'Order',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'Customer',
'page' => 'list' ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'linkType' => 0,
'items' => null,
'table' => 'Shipment',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'supertop' => array( 'logo',
'userinfo_link' ),
'grid' => array( 'welcome_item',
'welcome_item2',
'welcome_item4',
'welcome_item6' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'userinfo_link' => 'supertop',
'welcome_item' => 'grid',
'welcome_item2' => 'grid',
'welcome_item4' => 'grid',
'welcome_item6' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'welcome_item' => array( 'welcome_item',
'welcome_item4',
'welcome_item2',
'welcome_item6' ),
'userinfo_link' => array( 'userinfo_link' ),
'logo' => array( 'logo' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'userinfo_link' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'welcome_item2' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'welcome_item4' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'welcome_item6' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Account',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Accounts' ),
'linkIcon' => array( 'glyph' => 'usd' ),
'linkComments' => array( 'type' => 0,
'text' => 'View and manage financial accounts' ),
'background' => '#4169E1',
'linkType' => 0,
'mobileDisplay' => '',
'customCSS' => '.host {
  color: red;
}' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Order',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Orders' ),
'linkIcon' => array( 'glyph' => 'envelope' ),
'linkComments' => array( 'type' => 0,
'text' => 'View and manage orders' ),
'background' => '#DAA520',
'linkType' => 0,
'customCSS' => '.host {
  color: red;
}' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Customer',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Customers' ),
'linkIcon' => array( 'glyph' => 'user' ),
'linkComments' => array( 'type' => 0,
'text' => 'Manage customer information' ),
'background' => '#2F4F4F',
'linkType' => 0,
'customCSS' => '.host {
  color: red;
}' ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Shipment',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Shipments' ),
'linkIcon' => array( 'glyph' => 'plane' ),
'linkComments' => array( 'type' => 0,
'text' => 'Track and manage shipments' ),
'background' => '#00C2C5',
'linkType' => 0,
'customCSS' => '.host {
  color: red;
}' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logo' => array( 'type' => 'logo' ) ),
'dbProps' => array(  ),
'version' => 14,
'pageAlign' => 'center',
'imageItem' => array( 'type' => 'page_image',
'image' => array( 'source' => 3,
'image' => 'pexels-andrea-piacquadio-3769120.jpg' ),
'shadow' => false,
'fullSize' => true ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>