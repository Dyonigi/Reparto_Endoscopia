<?php /* Smarty version 2.6.26, created on 2010-09-17 15:22:23
         compiled from home_default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/style.css">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/menu.css">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/colori1.css">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/riepilogo.css">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/iscritti.css">
<link rel="stylesheet" type="text/css" href="smarty/templates/css/risultato.css">
<script src="js/carrello.js" type="text/javascript"></script>
<script src="js/controlli.js" type="text/javascript"></script>
<script src="js/controlliGenerici.js" type="text/javascript"></script>
<script src="js/feedback.js" type="text/javascript"></script>
<script src="js/jQuery.js" type="text/javascript"></script>
<script src="js/messaggi.js" type="text/javascript"></script>
<script src="js/notifiche.js" type="text/javascript"></script>
<script src="js/smallChecks.js" type="text/javascript"></script>
<script src="js/aggiungiTappe.js" type="text/javascript"></script>
<script src="js/utility.js" type="text/javascript"></script>
<script src="js/viaggi.js" type="text/javascript"></script>

<title>ePooling.it</title>
</head>
<body onload="notifiche.cercaNotifiche();<?php echo $this->_tpl_vars['onload']; ?>
aggiornaSESSID();checkSessione(); controllaAnno(document.getElementById('annoR'));">
    
	<div id="contenitore">
		<div id="header">
			<br/><br/><br/><br/><br/><br/>
                        
                            <?php if (isset ( $this->_tpl_vars['ciaoUtente'] )): ?>
                             <div id="ciaoUtente">
                                Ciao <strong><?php echo $this->_tpl_vars['ciaoUtente']; ?>
</strong>
                             </div>
                            <?php endif; ?>
		</div><!--end header-->
                <?php echo $this->_tpl_vars['menu']; ?>
				

                
<!--PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE 
PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE 
PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE 
PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE 
PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE PARTE INIZIALE -->
		<div id="conteiner2">
		<div id="conteiner">
		<div id="colonne">
			<div id="colonna1" class="">
                            <div id="carrelloSide">
                                <?php echo $this->_tpl_vars['carrello']; ?>
</div><br>
				<?php echo $this->_tpl_vars['sideContent']; ?>

			</div><!--end colonna1-->
			
			<div id="colonna2">
                            <noscript style="background-color: #ff3300; display:block; color: white; border:3px solid black; font-size: 130%; text-align: center; margin:auto;">
                                 Per utilizzare l'applicazione devi attivare i javascript
                            </noscript><br>
                                <?php echo $this->_tpl_vars['mainContent']; ?>

			</div><!--end colonna2-->
				<div class="clr"></div>
				

			</div><!--end colonne-->
			
		</div><!-- end conteiner2-->
		</div>
		<div class="clr"></div>
		<div id="footer">
			<p style="font-size:70%;">
				Contattaci: <a href="">Email</a> <span>&nbsp;|&nbsp;</span> 0863/45678
				<span>&nbsp;|&nbsp;</span> <a href="">info@epooling.it</a> <span>&nbsp;|&nbsp;</span>
				Sede legale: via casa dei puffi, n° 19 Avezzano (AQ) 
			</p>
			<div style="margin:10px; border-top:1px solid;"></div>
			<p style="font-size:70%;">Copyright © 1995-2010 ePooling Inc. Tutti i diritti riservati. Marchi registrati e segni distintivi sono di proprietà dei rispettivi titolari.L'uso di questo sito web implica l'accettazione dell'Accordo per gli utenti di ePooling e delle Regole sulla privacy</p>
		</div>
	
	</div><!--end contenitore-->
</body>
</html>
<div id="eventi"></div>