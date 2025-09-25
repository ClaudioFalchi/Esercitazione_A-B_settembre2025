<?php
if($_GET["forma"]=="Triangolo rettangolo") {
    $n = $_GET["fname"];
    for($i=1; $i<=$n; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
else {
    if ($_GET["forma"] == "Quadrato") {
        $n = $_GET["fname"];
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    } else {
        if ($_GET["forma"] == "Triangolo rettangolo specchiato") {
            $n = $_GET["fname"];
            for ($i = $n; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        } else {
            if($_GET["forma"]=="Cornice") {
                $n = intval($_GET["fname"]);
                echo "<pre>"; // preserva spazi
                for($i=1; $i<=$n; $i++){
                    if($i==1 || $i==$n){
                        for($j=1;$j<=$n;$j++){
                            echo "*";
                        }
                    } else {
                        echo "*";
                        for($j=1;$j<=($n-2);$j++){
                            echo " ";
                        }
                        echo "*";
                    }
                    echo "\n";
                }
                echo "</pre>";
            }


        }
    }
}
echo '<br><button onclick="window.history.back()">Torna indietro</button>';     //tasto per tonare indietro
?>