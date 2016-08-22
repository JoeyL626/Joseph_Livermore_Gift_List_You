
<div class="row">
		<ul id="sortable">
			<?
			foreach($data[1] as $item){
			?>
				<li id="<?php echo $item['item_id']; ?>">
				<span>
				<div class="large-2 large-offset-1 columns" >
				<? echo $item["name"]?>
				</div>
				<div class="large-2 columns" >
				<? echo $item["url"]?>
				</div>
				<div class="large-2 columns" >
				<? echo $item["price"]?>
				</div>
				<div class="large-3 columns" >
				<a class="button" href="?action=updateItemButton&id=<? echo $item['item_id']?>">Edit Item</a>
				<a class="button" href="?action=deleteItemAction&id=<? echo $item['item_id']?>&list_id=<? echo $item['list_id']?>">Delete Item</a>
				</div>
				</span>
				</li>	
			<?
			}
			?>
		
		</ul>
  
  <div class="fb-share-button" data-href="http://gift-list-you.herokuapp.com/?action=shareView&list_id=<? echo $data[1][0]['list_id']?>" 
  data-layout="button" data-size="large" data-mobile-iframe="true">
  <a class="fb-xfbml-parse-ignore" target="_blank" href="http://gift-list-you.herokuapp.com/?action=shareView&id=<? echo $data[1][0]['user_id']?>">
  Share</a></div>
<!-- content --> 
</div>