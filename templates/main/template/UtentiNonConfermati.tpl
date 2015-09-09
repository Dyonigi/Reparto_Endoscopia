<div id="users-contain" class="ui-widget div-contain">
    <table id="users" class="ui-widget ui-widget-content">
        {foreach from=$attributi key=m item=h}
            <td>{$h}</td>
        {/foreach}
        {foreach from=$mylist key=k item=i}
            <tr>
                {foreach from=$i key=n item=j}
                    <td>{$j}</td>
                {/foreach}
                <td><button class="Modifica">Modifica</button></td>
            </tr>
            {/foreach}
    </table>
</div>