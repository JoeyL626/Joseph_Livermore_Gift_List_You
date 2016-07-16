

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
FB.init({appId: '1766483266905544', status: true, cookie: true,
xfbml: true});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
'//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>

<div class="container">
  <div class="content">

		<ul id="sortable">
			<?
			foreach($data[1] as $item){
			?>
				<li id="<?php echo $item['item_id']; ?>">
				<span></span>
				<div><? echo $item["name"]?>
				<? echo $item["url"]?>
				<? echo $item["price"]?>
				<? echo $item["order"]?>
				<a href="?action=updateItemButton&id=<? echo $item['item_id']?>">Edit Item</a>
				<a href="?action=deleteItemAction&id=<? echo $item['item_id']?>&list_id=<? echo $item['list_id']?>">Delete Item</a></div>
				</li>	
			<?
			}
			?>
		
		</ul>
  </div><!-- content --> 
  </div>

  <script type="text/javascript">
$(document).ready(function(){
$('#share_button').click(function(e){
e.preventDefault();
FB.ui(
{
method: 'feed',
name: 'This is the content of the "name" field.',
link: ' http://gift-list-you.herokuapp.com/?action=shareView&id=<? echo $data[0]['user_id']?>',
picture: 'http://www.hyperarts.com/external-xfbml/share-image.gif',
caption: 'Joey Livermore',
description: 'His list for his birthday',
message: ''
});
});
});
</script>
<a href="?action=profile">Back</a>