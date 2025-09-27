<?php
function numeroPrimo($n) {
    if ($n < 2) return false;   // 0 e 1 non sono primi
    for ($i = 2; $i <= $n/2; $i++) {
        if ($n % $i == 0) {
            return false;      // non è primoo
        }
    }
    return true;               //è primo
}

// Versione base
if (isset($_POST['calcolaN'])) {
    $N = intval($_POST['n']);
    echo "<h3>Primi $N numeri primi:</h3>";
    $trovati = 0;
    $num = 2;
    while ($trovati < $N) {
        if (numeroPrimo($num)) {
            echo $num . " ";
            $trovati++;
        }
        $num++;
    }
}

//  Versione avanzata
if (isset($_POST['calcolaIntervallo'])) {
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);

    if ($a > $b) {
        echo "<p style='color:red;'>Errore: a deve essere ≤ b.</p>";
    } else {
        echo "<h3>Numeri primi nell'intervallo [$a,$b]:</h3>";
        $trovato = false;
        for ($num = $a; $num <= $b; $num++) {
            if (numeroPrimo($num)) {
                echo $num . " ";
                $trovato = true;
            }
        }
        if (!$trovato) echo "Nessun numero primo trovato.";
    }
}
echo '<br><button onclick="window.history.back()">Torna indietro</button>';
?>