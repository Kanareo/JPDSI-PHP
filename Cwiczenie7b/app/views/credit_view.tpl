{extends file="main.tpl"}

{block name=header}
    <div style="margin-top: 5.5em; margin-right: 1em; text-align: right">
        <p>Użytkownik: {$user->login}, rola: {$user->role}</p>
        <p><a href="{$conf->action_url}logout" class="btn btn-primary btn-sm">Wyloguj</a></p>
    </div>
{/block}
{block name=content}    
<div style="min-height:43.55em;padding:4em">
    <form action="{$conf->action_url}process" method="post">
        <p><label for="id_x">Kwota kredytu: </label>
        <input id="id_x" type="text" name="x" value="{$form->x}" /></p>
        <p><label for="id_y">Ilość lat: </label>
        <input id="id_y" type="text" name="y" value="{$form->y}" /></p>
        <p><label for="id_y">Oprocentowanie roczne: </label>
        <input id="id_y" type="text" name="p" value="{$form->p}" /></p>
        <p><input class="btn btn-default btn-md" type="submit" value="Oblicz" /></p>
    </form>	
    
    {include file='messages.tpl'}
</div>
{/block}
