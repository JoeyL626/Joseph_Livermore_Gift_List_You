<div class="row">
<div class="large-5 medium-12 columns">
<div style="background-color: #0C56AF; border-top-right-radius:15px; border-top-left-radius:15px;">
<div class="row">
<div class="large-7 small-5 small-centered columns">
<h2>User Info</h2>
</div>
</div>
</div>
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





