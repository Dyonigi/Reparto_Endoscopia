<form  id="registrazione" action="index.php" method="POST">
    <fieldset>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="{$username}" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="{$password}" class="text ui-widget-content ui-corner-all">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label>Mansione</label>
        <select id="mansione" name="mansione" class="ui-widget-content ui-corner-all">
          <option value=3>Dottore</option>
          <option value=2>Infermiere</option>
          <option value=1>Magazziniere</option>
        </select>
      <input type="text" name="task" id="task" value="registrazione" tabindex="-1" style="display: none">
      
      <input type="submit" value="Registrati">
    </fieldset>
</form>