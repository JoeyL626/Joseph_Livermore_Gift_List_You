chrome.tabs.getSelected(null, function(tab) {
    document.getElementById('host').innerHTML = tab.url;
});
