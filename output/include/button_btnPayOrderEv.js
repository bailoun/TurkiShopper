Runner.buttonEvents["btnPayOrderEv"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btnPayOrderEv';
	
	if ( !pageObj.buttonEventBefore['btnPayOrderEv'] ) {
		pageObj.buttonEventBefore['btnPayOrderEv'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
/*
var Order_ID = row.getFieldValue("idOrder");
//var Order_ID = rowData.fields["Order_ID"].html();
//alert('Order Id: '+Order_ID);

window.popup = Runner.displayPopup( {

url: "sent_add.php?page=order_add&order="+Order_ID,

width: 700,

height: 700

});
*/
//params["pmt"]=window.prompt("Please enter pmt", "Pmt");

return ctrl.dialog( {
        title: 'Enter Payment',
        fields: [{
            name: 'Amount',
            value: '0'
        },
			{  name: 'Account',
            type: 'lookup',
           value: 2,
				options:  proxy['lookup']
                 
       }],
        ok: 'Send',
        cancel: 'Cancel'
    });
		}
	}
	
	if ( !pageObj.buttonEventAfter['btnPayOrderEv'] ) {
		pageObj.buttonEventAfter['btnPayOrderEv'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
//window.orderPage = pageObj;
//pageObj.reload();
//window.alert(result['error']);
//window.alert(result['msg']);
window.location.reload();
		}
	}
	
	$('a[id="btnPayOrderEv"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btnPayOrderEv" + "_" + Runner.genId();
		
		// create object
		var button_btnPayOrderEv = new Runner.form.Button({
			id: this.id ,
			btnName: "btnPayOrderEv"
		});
		
		// init
		button_btnPayOrderEv.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

