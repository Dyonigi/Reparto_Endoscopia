<div id="Esame-contain" class="ui-widget div-contain">
    <table id="Esami" class="ui-widget ui-widget-content">
        {foreach from=$attributi key=m item=h}
            <td>{$h}</td>
        {/foreach}
        {foreach from=$mylist key=k item=i}
            <tr>
                {foreach from=$i key=n item=j}
                    <td>{$j}</td>
                {/foreach}
                {$bottonimodificaesame}
            </tr>
        {/foreach}
    </table>
</div>
{$formmodificaesami}