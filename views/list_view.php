
<div class="small-5 columns float-right">
<table>
<thead>
<tr>
<th width="250">Event</th>
<th width="700">Address</th>
<th width="50">Edit</th>
<th width="50">Items</th>
</tr>
</thead>
<?
foreach($data[1] as $list){
?>
<tbody>
<tr>
<td><? echo $list["event"]?></td>
<td><? echo $list["address"]." ".$list["city"].", ".$list["state"]." ".$list["zip"]?></td>
<td><a class="button listButton" href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit</a></td>
<td><a class="button listButton" href="?action=itemView&id=<? echo $list['list_id']?>">Items</a></td>
</tr>
</tbody>
<?
}
?>

</table>
</div>



