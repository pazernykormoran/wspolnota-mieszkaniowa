{$tytul}

<ul>
{if $catsData}
    {foreach from=$catsData  item=cats}
        {foreach from=$cats key=k item=c}
            <li>{$k}: {$c}</li>
        {/foreach}
    {/foreach}
{/if}
</ul>

