
<div class="large-7 medium-12 columns">
<div style="background-color: #2196F3; border-top-right-radius:15px; border-top-left-radius:15px;">
<div class="row">
<div class="large-4 small-4 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Your Lists</h2>
</div>
</div>
</div>
<table>
<tr>
<th width="250">Event</th>
<th width="500">Address</th>
<th width="50">Edit</th>
<th width="50">Items</th>
</tr>
<?
foreach($data[1] as $list){
?>
<tr>
<td><? echo $list["event"]?></td>
<td><? echo $list["address"]." ".$list["city"].", ".$list["state"]." ".$list["zip"]?></td>
<td><a class="button listButton" href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit</a></td>
<td><a class="button listButton" href="?action=itemView&id=<? echo $list['list_id']?>">Items</a></td>
</tr>
<?
}
?>

</table>
</div>



