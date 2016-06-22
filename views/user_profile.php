<h2>User Info</h2>
<table width=40%>
<tr>
<th>Name</th>
<td><? echo $data[0]["name"]?></td>
</tr>
<tr>
<th>Email</th>
<td><? echo $data[0]["email"]?></td>
</tr>
<tr>
<th>Address</th>
<td><? echo $data[0]["address"]?></td>
</tr>
<tr>
<th>City</th>
<td><? echo $data[0]["city"]?></td>
</tr>
<tr>
<th>State</th>
<td><? echo $data[0]["state"]?></td>
</tr>
<tr>
<th>Zip</th>
<td><? echo $data[0]["zip"]?></td>
</tr>
</table>

<br>

<a href="?action=updateUserButton">Edit Profile?</a>
<a href="?action=deleteUserButton">Delete Account?</a>
<a href="?action=addItemButton">Add Item</a>

<br>
<br>
<br>


