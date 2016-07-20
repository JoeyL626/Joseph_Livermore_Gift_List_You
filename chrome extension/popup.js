chrome.tabs.getSelected(null, function(tab) {

    document.getElementById('webAddress').setAttribute('src', 'http://gift-list-you.herokuapp.com/?action=chromeAddItemView&url=' + tab.url);

});
