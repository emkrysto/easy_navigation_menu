$.fn.uiConfirm = function(dialogText, okFunc, cancelFunc, dialogTitle, dialogButton=["",""]) 
{
	$('<div style="padding: 20px; max-width: 500px; word-wrap: break-word;">' + dialogText + '</div>').dialog({
		draggable: false,
		modal: true,
		resizable: false,
		width: 'auto',
		title: dialogTitle || 'Confirm',
		minHeight: 75,
		closeOnEscape: false,
		closeText: "",
		beforeClose: function( event, ui ) {},
		dialogClass: "no-close",   
		open: function () {
			$(".ui-dialog-titlebar-close").hide();
			$(".ui-dialog").keypress(function (e) {		
				if (e.which == 13) {
					return false;					
				}
			});
		},
		buttons: [
			{
				id: "button-ok",
				text: dialogButton[0] || 'Confirm',
				click: function () {
					if (typeof (okFunc) == 'function') {
						setTimeout(okFunc, 50);
					}
					$(this).dialog('destroy');
				},
			},
			{
				id: "button-cancel",
				text: dialogButton[1] || 'Cancel',
				click: function () {
					if (typeof (cancelFunc) == 'function') {
						setTimeout(cancelFunc, 50);
					}
					$(this).dialog('destroy');
				}
			}
		]
	});
	$(".ui-dialog").keypress(function (e) {
		if (e.which == 13) {
			//console.log("13");
		}
	});
}

$.fn.uiAlert = function(dialogText, okFunc, cancelFunc, dialogTitle) 
{
	$('<div style="padding: 20px; max-width: 500px; word-wrap: break-word;">' + dialogText + '</div>').dialog({
		draggable: false,
		resizable: false,
		width: 'auto',
		title: dialogTitle || 'Alert',
		minHeight: 75,
		closeOnEscape: false,
		closeText: "",
		beforeClose: function( event, ui ) {},
		dialogClass: "no-close",   
		open: function () {
			$(".ui-dialog-titlebar-close").hide();
			$(".ui-dialog").keypress(function (e) {		
				if (e.which == 13) {
					return false;					
				}
			});
		},
		buttons: [
			{
				id: "button-cancel",
				text: "Cancel",
				click: function () {
					if (typeof (cancelFunc) == 'function') {
						setTimeout(cancelFunc, 50);
					} 
					$(this).dialog('destroy');
				}
			}
		]
	});
}