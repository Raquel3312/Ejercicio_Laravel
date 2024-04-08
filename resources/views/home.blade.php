<!DOCTYPE html>
<html>
<body>

<?php
$a = array("hOlA", "Adios", "Aline", "raquEL");

function sumarVocalesMayusculas($cadena) {
    $suma_vocales = 0;
    $suma_mayusculas = 0;
    
    $vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    
    for ($j = 0; $j < strlen($cadena); $j++) {
        if (in_array($cadena[$j], $vocales)) {
            $suma_vocales++;
        }
        
        if (ctype_upper($cadena[$j])) {
            $suma_mayusculas++;
        }
    }
    
    return array($suma_vocales, $suma_mayusculas);
}

function longitudYPar($cadena) {
    $longitud = strlen($cadena);
    $es_par = ($longitud % 2 == 0) ? "PAR" : "IMPAR";
    return array($longitud, $es_par);
}

foreach ($a as $cadena) {
    list($suma_vocales, $suma_mayusculas) = sumarVocalesMayusculas($cadena);
    list($longitud, $es_par) = longitudYPar($cadena);
    
    echo "Suma de vocales en $cadena: $suma_vocales<br>";
    echo "Suma de letras mayúsculas en $cadena: $suma_mayusculas<br>";
    //echo "Longitud de la cadena: $longitud<br>";
    echo "$es_par<br><br>";
}
?>

</body>
</html>
