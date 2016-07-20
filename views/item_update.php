<div class="row">
<div class="large-6 small-4 small-centered columns">
<form enctype="multipart/form-data" action="?action=updateItemAction" method="POST">
	<fieldset>

					 <input type="hidden" name="item_id" value="<? echo $data[0][0]["item_id"]?>"/><br>

		Name : <input type="text" name="name" value="" placeholder="<? echo $data[0][0]["name"]?>" /><br>

		Price: <input type="text" name="price" value="" placeholder="<? echo $data[0][0]["price"]?>" /><br>

		List :<select name="list">
								<option value="<? echo $data[1][0]["list_id"]?>"> $data[1][0]["event"]?></option>
							<?
								foreach($data[2] as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><?echo $list["event"]?></option>
  						<?
								}
							?>
								</select><br>

  	<input type="submit" name="submit" value="Update Item"/>

  </fieldset>
</form>
</div>
</div>