
<form enctype="multipart/form-data" action="?action=chromeAddItemAction" method="POST">
	<fieldset>

		<input type="text" name="name" value="" placeholder="Item Name" />

		<input type="text" name="url" value="<? echo $data[1]?>" placeholder="<? echo $data[1]?>"/>

		<input type="text" name="price" value="" placeholder="$9.99" />

		<select name="list">
							<?
								foreach($data[0] as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><? echo $list["name"]?> <?echo $list["event"]?></option>
  						<?
								}
							?>
								</select><br>
  	<input type="submit" name="submit" value="Add Item"/>

  </fieldset>
</form>