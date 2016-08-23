
<div class="medium-7 columns hide-for-small-only">
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


<div class="row show-for-small-only">
<div class="small-12 small-centered columns">
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