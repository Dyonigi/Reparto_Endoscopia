
    <div id="tabs">
        <ul>
          <li><a href="#Home">Home</a></li>
          {foreach from=$Tabs key=m item=h}
            <li  id= '{$h.idbottone}'><a href="#{$h.iddiv}">{$h.testobottone}</a></li>
        {/foreach}
          
        </ul>
        <div id="Home">
            {$Home}
            
        </div>
          {foreach from=$Tabs key=m item=h}
            <div id="{$h.iddiv}">
            <p>
                Reparto di Endoscopia dell'Ospedale di Sulmona
            </p>
        </div>
        {/foreach}
        
    </div>