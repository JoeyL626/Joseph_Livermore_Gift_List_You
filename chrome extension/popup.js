$(document).ready(function(){
	chrome.tabs.getCurrent(null, function(tab){
		var link = document.createElement('a');
		link.href = tab.url
		$('#host').html(link.hostname);
	})
});
