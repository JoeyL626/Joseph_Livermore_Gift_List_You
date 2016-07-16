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
<a href="?action=profile">Back</a>