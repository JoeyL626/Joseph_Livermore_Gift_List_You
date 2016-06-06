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
<td><? echo $list["name"]?></td>
<td><? echo $list["event"]?></td>
<td><? echo $list["address"]?></td>
<td><? echo $list["city"]?></td>
<td><? echo $list["state"]?></td>
<td><? echo $list["zip"]?></td>
<td><a href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit List</a></td>
<td><a href="?action=deleteListButton&id=<? echo $list['list_id']?>">Delete List</a></td>
</tr>
<?
}
?>
</table>