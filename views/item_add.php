<div class="row">
<div class="large-6 small-8 small-centered columns">
<div style="background-color: #0C56AF;border-radius:15px;">
<div class="row">
<div class="small-5 small-centered columns">
<h2>Add Item</h2>
</div>
</div>
<form enctype="multipart/form-data" action="?action=addItemAction" method="POST">
	<fieldset>

		Name :<input type="text" name="name" value="" placeholder="Your List" />

		Url: <input type="text" name="url" value="" placeholder="url.com" />

		Price: <input type="text" name="price" value="" placeholder="$9.99" />

		List :<select name="list">
							<?
								foreach($data as $list){
							?>
    						<option value="<? echo $list["list_id"]?>"><? echo $list["name"]?> <?echo $list["event"]?></option>
  						<?
								}
							?>
								</select>
  	<input type="submit" name="submit" value="Add Item"/>

  </fieldset>
</form>
</div>
</div>
</div>
