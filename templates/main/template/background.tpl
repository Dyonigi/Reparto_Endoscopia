{extends file="layout.tpl"}
{block name=head}
    {$Head}
{/block}
{block name=Main}
    <div id="background" class="ui-corner-all">
        <img class="ui-corner-all" id="banner" src="{$banner}" >
        <div id="resizer" class="ui-corner-all">
            {$Main}
        </div>
    </div>
{/block}
{block name=Login}
    {$loginform}

{/block}