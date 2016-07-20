
<div class="small-5 columns float-right">
<table>
<?
foreach($data[1] as $list){
?>
<tr>
<th align=left><? echo $list["name"]?></th>
<th align=left><? echo $list["event"]?></th>
<th align=left><? echo $list["address"].$list["city"].$list["state"].$list["zip"]?></th>
<th align=left><a class="button listButton" href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit</a></th>
<th align=left><a class="button listButton" href="?action=itemView&id=<? echo $list['list_id']?>">Items</a></th>
</tr>
<?
}
?>

</table>
</div>



