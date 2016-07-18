
<form enctype="multipart/form-data" action="?action=chromeAddItemAction" method="POST">
	<fieldset>

		Name :<input type="text" name="name" value="" placeholder="Your List" /><br>

		Url: <input type="text" name="url" value="" placeholder="url.com" /><br>

		Price: <input type="text" name="price" value="" placeholder="$9.99" /><br>

		List :<select name="list">
							<?
								foreach($data as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><? echo $list["name"]?> <?echo $list["event"]?></option>
  						<?
								}
							?>
								</select><br>
  	<input type="submit" name="submit" value="Add Item"/>

  </fieldset>
</form>