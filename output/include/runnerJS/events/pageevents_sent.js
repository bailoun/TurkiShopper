
Runner.pages.PageSettings.addPageEvent('Sent',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){});Runner.pages.PageSettings.addPageEvent('Sent',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if((proxy['saved'])&&window.parent&&window.parent.popup){window.parent.popup.close();window.parent.location.reload();window.location.reload();}});