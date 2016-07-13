<?
// DO NOT CHANGE THE STYLES ON THIS PAGE!!!
// DO NOT CHANGE THE STYLES ON THIS PAGE!!!
// DO NOT CHANGE THE STYLES ON THIS PAGE!!!
// DO NOT CHANGE THE STYLES ON THIS PAGE!!!
?>
<div style="position: absolute;width: 100%;height: 100%;opacity:0.5;background-color: rgba(0,0,0,0.6);">
<h2>User Info</h2>
<table width=40% align=left>
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
<a href="?action=deleteUserButton">Delete Your Account For Good?</a>

<br>
<br>
<br>

</div>
<div align=center style="padding:100px;width: 30%;position: relative;margin: 0 auto;top: 50%;transform: translateY(-50%);background-color: rgba(0,0,245,0.9);">
	<form action="?action=updateUserAction" align=center style="margin:0 auto" method="POST">
		
		<input type="text" name="name" value="" placeholder="<? echo $data[0]["name"];?>"/>
		<input type="submit" name="submit" value="Update User"/>
	
	</form>
<a href="?action=profile">Back</a>
	
</div>
