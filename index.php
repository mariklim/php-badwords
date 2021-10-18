<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!-- Paragrafo originale -->
<?php
$testo = "La Pizza è uno dei simboli che rappresentano la cucina italiana in tutto il mondo e naturalmente la sua storia è tutta nostrana, ma mentre addentiamo felici una fetta filante di pizza margherita ci è mai venuto in mente di chiederci quando nasce la pizza e chi è stato il primo inventore di questo cibo paradisiaco di cui ormai, concediamocelo, non possiamo più fare a meno? Quale posto è stato testimone della sua nascita e soprattutto chi ne è l’inventore?

Non sono domande a cui è facile dare una risposta perché le origini della pizza sono incerte e un po’ complicate, ma la sua storia millenaria affonda indubbiamente nelle nostre tradizioni.
Perfetta da gustare in ogni momento della giornata, da gradire con calma in una serata con gli amici e comoda da mangiare se si ha poco tempo a disposizione, così versatile e squisita nella sua semplicità da andare incontro a tutti i gusti, quando e come è nata veramente la prima pizza?";
?>

<form action="index.php" method="get">
Inserisci la parola da censurare: <input type="text" name='parola'>
<input type="submit">
</form>

<!-- la nuova parola passata tramite Get -->
<?php $parolaUtente = $_GET['parola']?>

<!-- Visualizazzione: -->

<h2>Il testo originale:</h2>

<!-- stampo paragrafo originale e la lunghezza -->
<p>
    <?php echo $testo ?>
</p>
<h3>La lunghezza del testo originale:</h3>
<p>
    <?php echo strlen($testo); ?>
    caratteri
</p>


<!-- Stampo il testo censurato -->

<?php $testoCensurato = str_replace($parolaUtente, "***", $testo)?>


<h3>Testo censurato:</h3>
<p>
    <?php echo $testoCensurato?>
</p>

<h3>La lunghezza del testo censurato:</h3>
<p>
    <?php echo strlen($testoCensurato); ?>
    caratteri
</p>
