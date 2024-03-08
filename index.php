<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezerlesi Szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vezérlési Szerkezetek</h1>
    <?php



        echo "<h2>Véletlen számok</h2>";
        echo "Paraméter nélküli véletlen szám: ".rand()."<br>";
        echo "A véletlen szám maximuma: ".getrandmax()."<br>";
        echo "Zárt intervaééumbeli véletlen szám: ".rand(10,20)."<br>";






        echo "<h2>Globális vátozók</h2>";
        $x= 1;
        $y = 2;
                    

        function myTest0() {
            //kezdőérték nélkül nem működik:
            $z = $x + $y;
            echo "A (lokális változók) $x és a $y összege: $z";
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A (globális változók)".$GLOBALS['x']." és a".$GLOBALS['y']." összege: ".$GLOBALS['z']."<br>";
        }
        myTest0();
        echo "<h2>Operátorok</h2>";
        $adat1 = 8/3;
        echo "8/3 eredménye: $adat1<br>";
        echo "8/3 adatípusa: ".gettype($adat1)."<br>";





        echo "<h2>Elágazások</h2>";
        $logikai = (5 == 0);
        echo "5 egyenlő-e 0-val? ";
        echo ($logikai ? 'Ez igaz.': 'Ez hamis.');
        if ($logikai) {
            echo 'Ez igaz.';
        }
        else {
            echo 'Ez hamis';
        }




        $szam = rand(-1,1);
        echo "A véletlen szám: $szam";
        switch ($szam) {
            case -1:
                echo "A szám negatív";
                break;
            case 0:
                echo "A szám nulla";
                break;
            default:
                echo "A szám pozitív";
                break;
            }
        
            




        echo "<h2>Ciklusok</h2>";
        $tomb = array(1,3,4);
        //foreach sima tömbbel
        foreach ($tomb as $ertek){
            echo $ertek.'<br>';
        }
        //foreach asszociatív tömbbel
        $asszTomb = array("Szandi" => 10, "István" => 20);
        foreach ($asszTomb as $kulcs => $ertek) {
            echo "$kulcs: $ertek<br>";
        }
        echo "<br><br>";






        // Onallo Feladat
        $SakkTomb = array();
        $ListaOsszeg = 0;
        for ($x = 0; $x < 5; $x++) {
            $RandomSzam = rand(20,30);
            array_push($SakkTomb, $RandomSzam);
            $ListaOsszeg += $RandomSzam;
            echo "Lista $x eleme: $RandomSzam<br>";
        }
        //print_r($SakkTomb);
        echo "<br>Lista összege: $ListaOsszeg";


    ?>
</body>
</html>