{extends file="../templates/main.tpl"}

{block name=content}
<div style="min-height:40.7em;padding:4em">
    <form action="{$app_url}/app/credit_calc.php" method="post">
        <p><label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="x" value="{$form['x']}" /></p>
        <p><label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="y" value="{$form['y']}" /></p>
        <p><label for="id_y">Oprocentowanie roczne: </label>
        <input id="id_y" type="text" name="p" value="{$form['p']}" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Oblicz" /></p>
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

    {if isset($result)}
	<div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
	{$result}
	</div>
    {/if}
</div>
<div>
    <a href="{$app_url}/app/security/logout.php" class="btn btn-action">Wyloguj</a>
</div>
{/block}
