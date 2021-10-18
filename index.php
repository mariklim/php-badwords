<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php
$testo = "Inizia l’autunno e il giardino di Villa Arconati Far si colora di nuovi colori caldi che regalano alla nostra piccola Versailles un fascino ancora più suggestivo, da godere nella luce calda degli ultimi pomeriggi prima del freddo invernale. Da domenica 24 ottobre un orario ridotto, ma sempre le stesse opportunità di godere dell’incanto della villa e del suo giardino.";
?>

<?php 
$_GET['parola']
?>

<h2>Il testo:</h2> 
<p>
    <?php echo $testo?>
</p>
<h3>La lunghezza del testo:</h3>
<p>
    <?php echo strlen($testo); ?>
    caratteri
</p>
