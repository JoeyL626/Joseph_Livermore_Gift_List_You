<div class="row">
<div class="large-6 small-8 small-centered columns">
<div style="background-color: #0C56AF;border-radius:15px;">
<div class="row">
<div class="small-8 small-centered columns">
<h2>Update Item</h2>
</div>
</div>
<form enctype="multipart/form-data" action="?action=updateItemAction" method="POST">
	<fieldset>

					 <input type="hidden" name="item_id" value="<? echo $data[0][0]["item_id"]?>"/>

		Name : <input type="text" name="name" value="" placeholder="<? echo $data[0][0]["name"]?>" />

		Price: <input type="text" name="price" value="" placeholder="<? echo $data[0][0]["price"]?>" />

		List :<select name="list">
								<option value="<? echo $data[1][0]["list_id"]?>"> <? echo $data[1][0]["event"]?></option>
							<?
								foreach($data[2] as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><?echo $list["event"]?></option>
  						<?
								}
							?>
								</select>

  	<input type="submit" name="submit" value="Update Item"/>

  </fieldset>
</form>
</div>
</div>
</div>