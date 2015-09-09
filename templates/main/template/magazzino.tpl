<div id="magazzino-contain" class="ui-widget div-contain">
    <table id="tab-magazzino" class="ui-widget ui-widget-content">
        {foreach from=$attributi key=m item=h}
            <td>{$h}</td>
        {/foreach}
        {foreach from=$mylist key=k item=i}
            <tr id="materiale-draggable">
                {foreach from=$i key=n item=j}
                    <td>{$j}</td>
                {/foreach}
                
            </tr>
            {/foreach}
    </table>
</div>
    {$Form}