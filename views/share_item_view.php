<div class="row">
<div class="small-8 small-centered columns">
<table>
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
</div>
</div>