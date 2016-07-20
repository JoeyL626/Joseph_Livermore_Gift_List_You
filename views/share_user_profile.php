<div class="row">
<div class="small-7 small-centered columns">
<table>
<tr>
<th>Name</th>
<td><? echo $data[2][0]["name"]?></td>
</tr>
<tr>
<th>Email</th>
<td><? echo $data[2][0]["email"]?></td>
</tr>
<tr>
<th>Address</th>
<td><? echo $data[1][0]["address"]." ".$data[1][0]["city"].", ".$data[1][0]["state"]." ".$data[1][0]["zip"]?></td>
</tr>
<tr>
<th>Address</th>
<td><? echo $data[1][0]["event"]?></td>
</tr>
</table>
</div>
</div>


