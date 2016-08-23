
<div class="medium-6 columns hide-for-small-only">
<div style="background-color: #2196F3; border-top-right-radius:15px; border-top-left-radius:15px;">
<div class="row">
<div class="large-5 small-4 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Recipient List</h2>
</div>
</div>
</div>
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
<div style="background-color: #2196F3; border-top-right-radius:15px; border-top-left-radius:15px;">
<div class="row">
<div class="large-6 small-4 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Recipient List</h2>
</div>
</div>
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
</div>