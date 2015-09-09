<div id="pazienti-contain" class="ui-widget div-contain">
    <table id="pazienti" class="ui-widget ui-widget-content">
        {foreach from=$attributi key=m item=h}
            <td>{$h}</td>
        {/foreach}
        {foreach from=$mylist key=k item=i}
            <tr>
                {foreach from=$i key=n item=j}
                    <td>{$j}</td>
                {/foreach}
                <td><button class="Modifica">Modifica</button></td>
                <td class="abbastanza" title="{$check.$k}"><span class= "ui-icon ui-icon-circle-{$check.$k}"></span></td>
            </tr>
            {/foreach}
    </table>
</div>
<button id="create-pazienti">Aggiungi un Paziente</button>
<div id="dialog-form-create-pazienti" title="Aggiungi un Paziente">
 <p id="validateTips"></p> 
 
  <form>
    <fieldset>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label for="codicecup">Codice CUP</label>
      <input type="text" name="codicecup" id="codicecup" value="XXXXXXXXXX" maxlength="10" class="text ui-widget-content ui-corner-all">
      <label>Esame</label>
        <select id="esame" class="ui-widget-content ui-corner-all">
          {foreach from=$categorie key=m item=h}
            <option value="{$h}">{$h}</option>
          {/foreach}  
        </select>
      <label for="dataEsame">Data dell'Esame</label>
      <input type="text" name="dataEsame" id="dataEsame" class="text ui-widget-content ui-corner-all">

      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
