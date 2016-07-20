<div class="row" style="margin-left:.5rem;">
<div class="row float-left"  >
<div class="small-5 columns" style="width:100%; padding-left:.5rem;">
<table >
<tr>
<th>Name</th>
<td><? echo $data[0][0]["name"]?></td>
</tr>
<tr>
<th>Email</th>
<td><? echo $data[0][0]["email"]?></td>
</tr>
<tr>
<th>Address</th>
<td><? echo $data[0][0]["address"]." ".$data[0][0]["city"].", ".$data[0][0]["state"]." ".$data[0][0]["zip"]?></td>
</tr>
</table>
</div>
</div>



