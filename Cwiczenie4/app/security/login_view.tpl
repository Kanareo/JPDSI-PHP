{extends file="../../templates/main.tpl"}

{block name=content}
<div style="min-height:43.55em">
<form action="{$app_url}/app/security/login.php" method="post">
	<legend>Logowanie</legend>
	<fieldset>
            <p><label for="id_login">login: </label>
            <input id="id_login" type="text" name="login" value="{$form['login']}" />
            <label for="id_pass">pass: </label>
            <input id="id_pass" type="password" name="pass" /></p>
	</fieldset>
	<input type="submit" value="zaloguj" class="btn btn-default btn-md"/>
</form>	

{if isset($messages)}
    {if count($messages) > 0} 
	<ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #f88; width:300px;text-align:center">
	{foreach  $messages as $msg}
            {strip}
		<li>{$msg}</li>
            {/strip}
	{/foreach}
	</ol>
    {/if}
{/if}

</div>
{/block}
