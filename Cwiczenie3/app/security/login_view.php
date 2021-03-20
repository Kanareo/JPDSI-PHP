<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

<div style="min-height:43.55em">
<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
	<legend>Logowanie</legend>
	<fieldset>
            <p><label for="id_login">login: </label>
            <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
            <label for="id_pass">pass: </label>
            <input id="id_pass" type="password" name="pass" /></p>
	</fieldset>
	<input type="submit" value="zaloguj" class="btn btn-default btn-md"/>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>
<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>