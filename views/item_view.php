
<div class="row">
  <div class="small-10 columns">

		<ul id="sortable">
			<?
			foreach($data[1] as $item){
			?>
				<li id="<?php echo $item['item_id']; ?>">
				<span></span>
				<div>
				<? echo $item["name"]?>
				<? echo $item["url"]?>
				<? echo $item["price"]?>
				<a href="?action=updateItemButton&id=<? echo $item['item_id']?>">Edit Item</a>
				<a href="?action=deleteItemAction&id=<? echo $item['item_id']?>&list_id=<? echo $item['list_id']?>">Delete Item</a></div>
				</li>	
			<?
			}
			?>
		
		</ul>
  
  <div class="fb-share-button" data-href="http://gift-list-you.herokuapp.com/?action=shareView&list_id=<? echo $data[1][0]['list_id']?>" 
  data-layout="button" data-size="large" data-mobile-iframe="true">
  <a class="fb-xfbml-parse-ignore" target="_blank" href="http://gift-list-you.herokuapp.com/?action=shareView&id=<? echo $data[1][0]['user_id']?>">
  Share</a></div>
<a href="?action=profile">Back</a>
</div><!-- content --> 
</div>