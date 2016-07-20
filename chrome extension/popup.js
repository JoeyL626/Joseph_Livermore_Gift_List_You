chrome.tabs.getSelected(null, function(tab) {

    var iframe = document.createElement('iframe');
		iframe.src = "http://gift-list-you.herokuapp.com/?action=chromeAddItemView&url="+tab.url;

		$("#host").appendChild(iframe);
});
