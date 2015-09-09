{foreach from=$Tabs key=m item=h}
<script>
    $(function () {
    
        $( "#{$h.idbottone}" ).click(function(){
            $.ajax({
                url: "index.php",
                success: function(result){
                            $("#{$h.iddiv}").html(result);
                            {$h.funzione};
                            }, 
                type: "POST", 
                data: {
                    task: "{$h.task}"
            }
                });
        }
                
                );
      });
</script>
{/foreach}