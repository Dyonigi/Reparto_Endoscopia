<div id="dialog-login" title="Log-in">
    {$avviso}
  <form  id="login-utente" action="index.php" method="POST">
    <fieldset>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="denisgaia" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" value="login" tabindex="-1" style="display: none">
      <input type="submit" value="Submit" tabindex="-1" style="display: none">
    </fieldset>
</form>
</div>
<div id="dialog-login-paziente" title="Log-in Paziente">
  <form  id="login-paziente"  action="index.php" method="POST">
    <fieldset>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognome" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label for="codicecup">Codice CUP</label>
      <input type="text" name="codicecup" id="codicecup" value="XXXXXXXXXX" maxlength="10" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" value="loginpaziente" tabindex="-1" style="display: none">
      <input type="submit" value="Submit" tabindex="-1" style="display: none">
    </fieldset>
</form>
</div>
</div>
<div id="dialog-registrazione" title="Registrazione">
    <p id="validateTips">Compila tutti i campi per registrarti</p>
  <form  id="registrazione"  action="index.php" method="POST">
    <fieldset>
      <label for="username">Username</label>
      <input type="text" name="username" id="nuovousername" value="" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="nuovopassword" value="" class="text ui-widget-content ui-corner-all">
      <label for="confermapassword">Conferma Password</label>
      <input type="password" name="confermapassword" id="confermapassword" value="" class="text ui-widget-content ui-corner-all">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nomeutente" value="Felicia" class="text ui-widget-content ui-corner-all">
      <label for="cognome">Cognome</label>
      <input type="text" name="cognome" id="cognomeutente" value="Di Bacco" class="text ui-widget-content ui-corner-all">
      <label for="mansione">Mansione</label>
        <select id="mansione" name="mansione" class="ui-widget-content ui-corner-all">
          <option value=3>Dottore</option>
          <option value=2>Infermiere</option>
          <option value=1>Magazziniere</option>
        </select>
      <input type="text" name="task" value="registrazione" tabindex="-1" style="display: none">
      <input type="submit" value="Submit" tabindex="-1" style="display: none">
    </fieldset>
</form>
</div>
