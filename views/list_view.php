
<div class="small-5 columns float-right">
<table>
<th width="150">Event</th>
<th width="300">Address</th>
<th>Edit</th>
<th>Items</th>
<?
foreach($data[1] as $list){
?>
<tr>
<td width="150"><? echo $list["event"]?></td>
<td width="300"><? echo $list["address"]." ".$list["city"].", ".$list["state"]." ".$list["zip"]?></td>
<td align=left><a class="button listButton" href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit</a></td>
<td align=left><a class="button listButton" href="?action=itemView&id=<? echo $list['list_id']?>">Items</a></td>
</tr>
<?
}
?>

</table>
</div>



