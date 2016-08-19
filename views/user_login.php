
<div class="row show-for-small-only">
<div class="large-6 small-4 small-centered columns">
<form enctype="multipart/form-data" action="?action=loginAction" method="POST">
	<fieldset>

		<input type="text" name="email" value="" placeholder="Email" />

		<input type="password" name="password" value="" placeholder="Password"/>

    <input type="submit" name="submit" value="Login"/>

  </fieldset>
</form>
<?
// $fb = new Facebook\Facebook([
//   'app_id' => '{1766483266905544}', // Replace {app-id} with your app id
//   'app_secret' => '{67a267e941fbd2f9b4985b4c133488ea}',
//   'default_graph_version' => 'v2.2',
//   ]);

// $helper = $fb->getRedirectLoginHelper();

// $permissions = ['email']; // Optional permissions
// $loginUrl = $helper->getLoginUrl('http://gift-list-you.herokuapp.com/fbCallback.php', $permissions);

// echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>
</div>
</div>
