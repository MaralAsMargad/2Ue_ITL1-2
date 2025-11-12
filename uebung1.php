<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2Ue_ITL1-2</title>
</head>

<body>
    <h1>Übung 1</h1>

    <?php
    //var_dump($_REQUEST);
    
    //fixe preis variable
    $preis = 1.499;
    
    if (isset($_GET["zahl1"]) && isset($_GET["zahl2"])) {
        // beliebige Eingaben von input übernehmen:
        $liter1 = (float) $_GET["zahl1"];
        $liter2 = (float) $_GET["zahl2"];
        // Berechnung:
        $gesamtmengeL = $liter1 + $liter2;
        $kosten = $gesamtmengeL * $preis;
        // Ergebnis/Output
        echo"Die Benzinkosten betragen für ". $gesamtmengeL ." Liter ".$kosten." €.";
    } else {
        // Fehlermeldung falls ein input leer ist (funktionsunfähig derzeit!)
        echo"Bitte beide Literwerte eingeben.";
    }
    ?>

    <!-- Eingabe der Tankmenge -->
    <form action="/uebung1.php" method="get">
        <label for="zahl1">Tank 1: </label> <br>
        <input type="number" id="zahl1" name="zahl1" step="0.1" placeholder="0"> <br>
        <label for="zahl2">Tank 2: </label> <br>
        <input type="number" id="zahl2" name="zahl2" step="0.1" placeholder="0">
        <input type="submit" text="Schicken"></input>
    </form>
</body>

</html>