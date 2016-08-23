<div class="row">
<div class="large-6 small-10 small-centered columns">
<div style="background-color: #2196F3;border-radius:15px;">
<div class="row">
<div class="large-7 small-8 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Update User Info</h2>
</div>
</div>
	<form action="?action=updateUserAction" method="POST">
		
		<input type="text" name="name" value="" placeholder="<? echo $data[0]["name"];?>"/>

		<input type="text" name="email" value="" placeholder="<? echo $data[0]["email"];?>"/>

		<input type="text" name="address" value="" placeholder="<? echo $data[0]["address"];?>"/>

		<input type="text" name="city" value="" placeholder="<? echo $data[0]["city"];?>"/>

		<input type="text" name="state" value="" placeholder="<? echo $data[0]["state"];?>"/>
		
		<input type="text" name="zip" value="" placeholder="<? echo $data[0]["zip"];?>"/>

		<input type="submit" name="submit" value="Update User"/>
		<a href="?action=deleteUserButton">Delete Account?</a>
	</form>
</div>
</div>
</div>
