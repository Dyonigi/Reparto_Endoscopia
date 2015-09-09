<script>
  $(function() {
    $( "input[type=submit]" )
      .button()
      .click(function() {
        $('#registrazione').submit();
      });
  });
</script>