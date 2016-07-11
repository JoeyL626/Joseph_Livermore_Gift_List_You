<table width=60%>
<?
foreach($ldata as $item){
?>
<tr>
<th align=left><? echo $item["name"]?></th>
<th align=left><? echo $item["url"]?></th>
<th align=left><? echo $item["price"]?></th>
<th align=left><? echo $item["order"]?></th>
<th align=left><a href="?action=updateItemButton&id=<? echo $item['item_id']?>">Edit Item</a></th>
<th align=left><a href="?action=deleteItemAction&id=<? echo $item['item_id']?>">Delete Item</a></th>

</tr>
<tr>
<?
}
?>

</table>
<a href="?action=profile">Back</a>