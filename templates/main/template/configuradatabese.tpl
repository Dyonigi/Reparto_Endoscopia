Configura i dati di accesso al DataBase
<form  id="configuradb" action="index.php" method="POST">
    <fieldset>
      <label for="database">Nome del Data Base</label>
      <input type="text" name="database" id="database" value="endoscopia" class="text ui-widget-content ui-corner-all">
      <label for="username">Username</label>
      <input type="text" name="user" id="user" value="root" class="text ui-widget-content ui-corner-all">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
      <label for="host">Host</label>
      <input type="text" name="host" id="host" value="localhost" class="text ui-widget-content ui-corner-all">
      <input type="text" name="task" id="task" value="configuradb" tabindex="-1" style="display: none">
      <input type="submit" value="Submit">
    </fieldset>
</form>