<div id="Utilizza">
  <h1 class="ui-widget-header">Materiali Utilizzati durante l'esame del Paziente</h1>
  <div class="ui-widget-content">
      <label for="codicecuputilizza">Codice CUP del Paziente</label>
      <select name="codicecuputilizza" id="codicecuputilizza" class="text ui-widget-content ui-corner-all">
      {foreach from=$pazienti key=m item=h}
            <option value="{$h.0}">
                <h2>{$h.0}</h2><br>
                <h3>{$h.1}{$h.2}</h3>
            </option>
      {/foreach}
      </select>
    <ul>
      <li class="placeholder">Trascina i Materiali qui</li>
    </ul>
  </div>
      <button id='Invia'>Invia</button>
      <button id='Cancella'>Cancella</button>
</div>