<div id="categorie-contain" class="ui-widget div-contain">
    {foreach from=$categorie key=k item=i}
        <h3>
            <p>{$k}</p>
            <button title='Modifica {$k}' class="ModificaCategoria">Modifica</button>
            <button title='Elimina {$k}' class="EliminaCategoria">Elimina</button>
        </h3>
        <div
            <ul>
                {foreach from=$i key=c item=v}
                    <li class="elemento-lista-sottocategorie ui-corner-all">{$v}</li>
                    <button class="ModificaSottoCategoria">Modifica</button>
                    <button class="EliminaSottoCategoria">Elimina</button>
                {/foreach}
            </ul>
            <button class="create-SottoCategoria">Aggiungi una Sotto Categoria</button>
        </div>
    {/foreach}
    
</div>
<button id="create-Categoria">Aggiungi una Categoria di Esami</button>
<div id="dialog-Categoria" title="Aggiungi una Categoria di Esami">
  
 
  <form>
    <fieldset id="fieldsetAggiungiCategoria">
      <label for="nome">Categoria Esame</label>
      <input type="text" name="nome" id="nome" value="Endoscopico" class="text ui-widget-content ui-corner-all">
      <input type="submit" tabindex="-1" style="display: none">
    </fieldset>
  </form>
</div>
<div id="dialog-sottocategoria" title="Aggiungi una Sotto Categoria">
    <form>
        <fieldset id="fieldsetAggiungiSottoCategoria">
            <label id="sottocategorialabel" for="sottocategoria" class="sottocategoria">Sotto Categoria</label>
            <input type="text" name="sottocategoria" id="sottocategoriainput" value="Sottocategoria" class="sottocategoria text ui-widget-content ui-corner-all">
            <input type="submit" tabindex="-1" style="display: none">
        </fieldset>
    </form>
</div>