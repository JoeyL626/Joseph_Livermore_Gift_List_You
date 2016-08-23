<div class="row">
<div class="medium-5 small-12 columns">
<div style="background-color: #2196F3; border-top-right-radius:15px; border-top-left-radius:15px;">
<div class="row">
<div class="large-6 small-4 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Recipient Info</h2>
</div>
</div>
</div>
<table>
<tr>
<th>Name</th>
<td><? echo $data[2][0]["name"]?></td>
</tr>
<tr>
<th>Event</th>
<td><? echo $data[1][0]["event"]?></td>
</tr>
<tr>
<th>Email</th>
<td><? echo $data[2][0]["email"]?></td>
</tr>
<tr>
<th>Address</th>
<td><? echo $data[1][0]["address"]." ".$data[1][0]["city"].", ".$data[1][0]["state"]." ".$data[1][0]["zip"]?></td>
</tr>
</table>
</div>



