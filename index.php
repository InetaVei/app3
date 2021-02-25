<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* NAMU DARBAI
        1. Pailiustruoti operacijas (array_sum, min, max) su:
            1.1. vienmaciu masyvu
            1.2. asociatyviu masyvu
            1.3. daugiamaciu masyvu
        */

    // vienamtis masyvas
    $arr1 = array(4, 1, 7, 7, 4, 5);
    print_r($arr1);
    
    // maziausias
    print("<br>");
    print "sio masyvo maziausias indeksas yra :" . "\n" . min($arr1);

    // didziausias
    print("<br>");
    print "sio masyvo didziausias indeksas yra :" . "\n" . max($arr1);

    //suma
    print("<br>");
    print "sio masyvo suma = " . array_sum($arr1) . "\n";
    print("<br>");

    // // ASOCIATYVUS MASYVAS
    print("<br>");
    $array_family = array(
        "mom" => "30",
        "dad" => "35",
        "kid1" => "5",
        "kid2" => "7"
    );
    print_r($array_family);

    // jauniausias
    print("<br>");
    print "jauniausias seimoje yra : " . array_search(min($array_family), $array_family) . " " . min($array_family);

    // vyriausias
    print("<br>");
    print "vyriausias seimoje : " . array_search(max($array_family), $array_family) . " " . max($array_family);

    // amziaus suma
    print("<br>");
    print "seimos bendras amzius :" . "\n" . array_sum($array_family) . "\n";

    // // DAUGIAMATIS MASYVAS

    /* 2. Sukurkite asociatyvųjį masyvą, kuris reprezentuotų žmogų ir jo svorį ( “vardas1” => “svoris1”, “vardas2” => “svoris2” … ) ir:
            2.1. Raskite lengviausią žmogų (minimumas);
            2.2. Sunkiausią (maximumas);
            2.3. Susumuokite visų žmonių svorį ir nustatykite ar jie gali kilti liftu (500kg ar kita riba);
            2.4. * Atspausdinkite surikiuotus žmones (pagal svorį);
*/
    print("<br>");
    $arr4 = array(
        "Agne" => "59",
        "Julius" => "80",
        "Vilius" => "78",
        "Mila" => "60"
    );
    
    // Sukurkite asociatyvųjį masyvą, kuris reprezentuotų žmogų ir jo svorį
    print("<br>");
    print_r($arr4);

    // Raskite lengviausią žmogų (minimumas);
    print("<br>");
    print "Lengviausias is visu : " . array_search(min($arr4), $arr4) . " " . min($arr4); 
    
    // Sunkiausią (maximumas);
    print("<br>");
    print "Sunkiausias is visu : " . array_search(max($arr4), $arr4) . " " . max($arr4); 

    // Susumuokite visų žmonių svorį
    print("<br>");
    print "Visu zmoniu bendras svoris yra: " . "\n" . array_sum($arr4);

    // nustatykite ar jie gali kilti liftu (500kg ar kita riba);
    print("<br>");
    if(array_sum($arr4) < 500) {
        print "zmones gali kilti liftu, nes bendras svoris nevirsyja 500";
    }

    // Atspausdinkite surikiuotus žmones (pagal svorį);
    print("<br>");
    $arr5 = array("Agne" => "59", "Julius" => "80", "Vilius" => "78", "Mila" => "60");
    asort($arr5);
    foreach($arr5 as $key => $value) {
        print ("$key = $value\n");
    }
?>
</body>
</html>