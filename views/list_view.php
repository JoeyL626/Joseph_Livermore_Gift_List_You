
<div class="small-5 columns float-right">
<table>
<?
foreach($data[1] as $list){
?>
<tr>
<td id="eventLength"><? echo $list["event"]?></td>
<td id="addressLength" ><? echo $list["address"]." ".$list["city"].", ".$list["state"]." ".$list["zip"]?></td>
<td align=left><a class="button listButton" href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit</a></td>
<td align=left><a class="button listButton" href="?action=itemView&id=<? echo $list['list_id']?>">Items</a></td>
</tr>
<?
}
?>

</table>
</div>



