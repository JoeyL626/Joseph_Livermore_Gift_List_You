<table>
<tr>
<td><? echo $data[1][0]["event"]?></td>
<td><? echo $data[1][0]["address"]." ".$data[1][0]["city"].", ".$data[1][0]["state"]." ".$data[1][0]["zip"]?></td>
</tr>
<?
foreach($data[0] as $list){
?>
<tr>
<td><? echo $list["name"]?></td>
<td><? echo $list["url"]?></td>
<td><? echo $list["price"]?></td>
</tr>
<?
}
?>
</table>