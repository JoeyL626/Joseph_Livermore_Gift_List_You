<table width=60%>
<th align=left>Name</th>
<th align=left>Event</th>
<th align=left>Address</th>
<th align=left>City</th>
<th align=left>State</th>
<th>Zip</th>
<?
foreach($ldata as $list){
?>
<tr>
<th><? echo $list["name"]?></th>
<th><? echo $list["event"]?></th>
<th><? echo $list["address"]?></th>
<th><? echo $list["city"]?></th>
<th><? echo $list["state"]?></th>
<th><? echo $list["zip"]?></th>
<th><a href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit List</a></th>
<th><a href="?action=deleteListAction&id=<? echo $list['list_id']?>">Delete List</a></th>
<th><a href="?action=addItemButton&id=<? echo $list['list_id']?>">Delete List</a></th>
</tr>
<?
}
?>
</table>