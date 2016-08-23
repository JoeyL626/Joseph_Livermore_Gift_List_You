<div class="row">
<div class="large-6 small-8 small-centered columns">
<div style="background-color: #2196F3;border-radius:15px;">
<div class="row">
<div class="large-4 small-5 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Add Item</h2>
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
<div class="row">
<div class="small-3 small-centered columns">
  	<input class="button small-centered" type="submit" name="submit" value="Add Item"/>
</div>
</div>

  </fieldset>
</form>
</div>
</div>
</div>
