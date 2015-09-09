<link rel="stylesheet" href="{$jqueryuicss}">
<script src="{$jquery}"></script>
<script src="{$jqueryui}"></script>
<link rel="stylesheet" href="{$forms}">
<script src="{$Center}"></script>
{literal}
<script>
    $(function() {
    $( "#dialog-login" ).dialog();
    $( "#dialog-login-paziente" ).dialog();
    $('#dialog-registrazione').dialog();
  });
    $(window).load(function(){
        
        $('#background').css({
                        'height':($(window).height()-20)+'px'
                    });
        $('#banner').position({
           my: 'center top',
           at: 'center top',
           of: $('#background')
           });
        $('#resizer').css({
                        'width':($('#banner').width())+'px'
                    });
        $('#resizer').position({
           my: 'center top',
           at: 'center bottom',
           of: $('#banner')
           });
        $( "#dialog-login" ).dialog({
            position: {
                my: 'right top-45',
                at: 'right bottom',
                of: $('#banner')
              }
        });
        $( "#dialog-login-paziente" ).dialog({
            position: {
                my: 'right top-45',
                at: 'right bottom',
                of: $('#banner')
              }
        });
        $( "#dialog-login-paziente" ).dialog('close');
        $('#dialog-registrazione').dialog('close');
        $( "#dialog-login" ).dialog("widget")
                .next(".ui-widget-overlay")
                .css({background: "transparent", opacity: 0});
        $( "#dialog-login-paziente" ).dialog("widget")
                .next(".ui-widget-overlay")
                .css({background: "transparent", opacity: 0});
    });
    
</script>
{/literal}