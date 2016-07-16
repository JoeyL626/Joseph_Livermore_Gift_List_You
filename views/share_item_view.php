<table width=60%>
<tr>
<th align=left><? echo $data[1]["name"]?></th>
<th align=left><? echo $data[1]["event"]?></th>
</tr>
<?
foreach($data[0] as $list){
?>
<tr>
<td align=left><? echo $list["name"]?></td>
<td align=left><? echo $list["url"]?></td>
<td align=left><? echo $list["price"]?></td>
</tr>
<tr>
<?
}
?>

</table>