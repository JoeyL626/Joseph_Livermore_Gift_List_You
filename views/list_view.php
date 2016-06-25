<table width=60%>
<?
foreach($edata as $item){
?>
<tr>
<th align=left><? echo $item["order"]?></th>
<th align=left><? echo $item["name"]?></th>
<th align=left><? echo $item["event"]?></th>
<th align=left><? echo $item["address"]?></th>
<th align=left><? echo $item["city"]?></th>
<th align=left><? echo $item["state"]?></th>
<th align=left><? echo $item["zip"]?></th>
<th align=left><? echo $item["name"]?></th>
<th align=left><? echo $item["url"]?></th>
<th align=left><? echo $item["price"]?></th>
<th align=left><a href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit List</a></th>
<th align=left><a href="?action=deleteListAction&id=<? echo $list['list_id']?>">Delete List</a></th>
<th align=left><a href="?action=updateItemButton&id=<? echo $item['item_id']?>">Edit Item</a></th>
<th align=left><a href="?action=deleteItemAction&id=<? echo $item['item_id']?>">Delete Item</a></th>
</tr>
<?
}
?>
</table>