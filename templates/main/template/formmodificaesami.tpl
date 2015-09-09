<button id="create-esame">Aggiungi un Esame</button>
<div id="dialog-form-Esame" title="Aggiungi un Esame">
  
 
  <form>
    <fieldset id="fieldsetAggiungiUtilizza">
      <label for="nome">Esame</label>
      <input type="text" name="nome" id="nome" value="Endoscopico" class="text ui-widget-content ui-corner-all">
      <div class="ui-widget">
        <label>Categoria</label>
        <select id="categoria" class="ui-widget-content ui-corner-all">
            <option>Scegli una Categoria</option>
          {foreach from=$categorie key=m item=h}
            <option value="{$h}">{$h}</option>
          {/foreach}  
        </select>
      </div>
      <div class="ui-widget">
        <label>Sottocategoria</label>
        <select id="sottocategoria" class="text ui-widget-content ui-corner-all">
            
        </select>
      </div>
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
<div id="dialog-utilizza">
    <form>
    <fieldset id="fieldsetAggiungiUtilizza">
    <table id="Utilizza" class="ui-widget ui-widget-content">
        <tr>
            <td>Materiale</td>
            <td>Quantita</td>
        </tr>
    </table>
    <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
    </form>
</div>
    <table style="display: none"  id='input-utilizza'>
        <tr>
            <td><input type="text" name="materiale" value="" class="materialeinput text ui-widget-content ui-corner-all"></td>
            <td><input name="quantita" value="" class="quantitainput ui-widget-content ui-corner-all"></td>
        </tr>
    </table>