
<form enctype="multipart/form-data" action="?action=updateListAction" method="POST">
	<fieldset>

		Name :<input type="text" name="name" value="" placeholder="<? echo $data[0]["name"]?>" /><br>

		Event: <? echo $data[0]["event"]?><br>

		New Event :<select name="event">
    					<option value="Mothers' Day">Mothers' Day</option>
							<option value="Valentine's Day">Valentine's Day</option>
							<option value="Easter">Easter</option>
							<option value="Fathers' Day">Fathers' Day</option>
							<option value="Christmas">Christmas</option>
							<option value="Hanukkah">Hanukkah</option>
							<option value="Birthday">Birthday</option>
							<option value="Baby Shower">Baby Shower</option>
							<option value="Wedding">Wedding</option>
  					</select><br>
  	<input type="submit" name="submit" value="Update List"/>

  </fieldset>
</form>