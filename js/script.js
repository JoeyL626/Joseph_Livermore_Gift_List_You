/*
* Author : Ali Aboussebaba
* URL : http://www.http://www.bewebdeveloper.com/tutorial-about-dynamic-drag-and-drop-with-jquery-and-php
*/

$(function() {
    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
         
            var list_sortable = $(this).sortable('toArray').toString();
    		// change order in the database using Ajax
            $.ajax({
                url: 'model/set_order.php',
                type: 'POST',
                data: {list_order:list_sortable},
                success: function(data) {
                
                }
            });
        }
    });
});