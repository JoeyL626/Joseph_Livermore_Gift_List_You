
<div class="small-4 columns float-right">
<table>
<?
foreach($data[1] as $list){
?>
<tr>
<th align=left><? echo $list["name"]?></th>
<th align=left><? echo $list["event"]?></th>
<th align=left><? echo $list["address"]?></th>
<th align=left><? echo $list["city"]?></th>
<th align=left><? echo $list["state"]?></th>
<th align=left><? echo $list["zip"]?></th>
<th align=left><a href="?action=updateListButton&id=<? echo $list['list_id']?>">Edit List</a></th>
<th align=left><a href="?action=deleteListAction&id=<? echo $list['list_id']?>">Delete List</a></th>
<th align=left><a href="?action=itemView&id=<? echo $list['list_id']?>">View Items</a></th>
</tr>
<?
}
?>

</table>
</div>

