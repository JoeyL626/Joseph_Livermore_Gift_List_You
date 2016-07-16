<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1766483266905544";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
  <div class="fb-share-button" data-href="http://gift-list-you.herokuapp.com/?action=shareView&id=<? echo $data[0]['user_id']?>" 
  data-layout="button_count" data-size="small" data-mobile-iframe="true">
  <a class="fb-xfbml-parse-ignore" target="_blank" href="http://gift-list-you.herokuapp.com/?action=shareView&id=<? echo $data[0]['user_id']?>">
  Share</a></div>
<a href="?action=profile">Back</a>