
<form enctype="multipart/form-data" action="?action=updateItemAction" method="POST">
	<fieldset>

					 <input type="hidden" name="item_id" value="<? echo $data[0][0]["item_id"]?>"/><br>

		Name : <input type="text" name="name" value="" placeholder="<? echo $data[0][0]["name"]?>" /><br>

		Price: <input type="text" name="price" value="" placeholder="<? echo $data[0][0]["price"]?>" /><br>

		List : <? echo $data[1][0]["name"]?><br>

		New List :<select name="list">
							<?
								foreach($data[2] as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><? echo $list["name"]?> <?echo $list["event"]?></option>
  						<?
								}
							?>
								</select><br>

  	<input type="submit" name="submit" value="Update Item"/>

  </fieldset>
</form>
<a href="?action=itemView&id=<? echo $data[0][0]['list_id']?>">Back</a>