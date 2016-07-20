<table>
<tr>
<td align=left><? echo $data[1][0]["name"]?></td>
<td align=left><? echo $data[1][0]["event"]?></td>
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