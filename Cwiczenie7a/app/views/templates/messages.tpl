{if $msgs->isError()}
    <h4>Wystąpiły błędy: </h4>
    <ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #f88; width:300px;text-align:center">
    {foreach $msgs->getErrors() as $err}
        {strip}
            <li>{$err}</li>
        {/strip}
    {/foreach}
    </ol>
{/if}

{if $msgs->isInfo()}
    <h4>Informacje: </h4>
    <ol style="margin: 5em auto; padding: 10px; border-radius: 5px; background-color: #7EFA83; width:300px;text-align:center">
    {foreach $msgs->getInfos() as $inf}
        {strip}
            <li>{$inf}</li>
        {/strip}
    {/foreach}
    </ol>
{/if}

{if isset($res->result)}
    <div style="margin: auto; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
        {$res->result}
    </div>
{/if}
</div>
