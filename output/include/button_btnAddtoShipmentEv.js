Runner.buttonEvents["btnAddtoShipmentEv"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btnAddtoShipmentEv';
	
	if ( !pageObj.buttonEventBefore['btnAddtoShipmentEv'] ) {
		pageObj.buttonEventBefore['btnAddtoShipmentEv'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
params["Shipment"]=window.prompt("Enter Shipment No:");
		}
	}
	
	if ( !pageObj.buttonEventAfter['btnAddtoShipmentEv'] ) {
		pageObj.buttonEventAfter['btnAddtoShipmentEv'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.alert(result['OrderCount']+' Orders added to Shipment '+result['Shipment']);
		}
	}
	
	$('a[id="btnAddtoShipmentEv"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btnAddtoShipmentEv" + "_" + Runner.genId();
		
		// create object
		var button_btnAddtoShipmentEv = new Runner.form.Button({
			id: this.id ,
			btnName: "btnAddtoShipmentEv"
		});
		
		// init
		button_btnAddtoShipmentEv.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

