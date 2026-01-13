<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP Arrays</title>
</head>
<body>
<?php 

// --- EJERCICIO 1: Mostrar solo los valores del array ---
echo "<h3>Ejercicio 1</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>23, "city"=>"Barcelona");

foreach ($d1 as $s) {
    echo "$s <br>";
}



// --- EJERCICIO 2: Mostrar clave y valor del array ---
echo "<h3>Ejercicio 2</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>23, "city"=>"Barcelona");

foreach ($d1 as $s => $c) {
    echo "$s: $c <br>";
}



// --- EJERCICIO 3: Modificar un valor (Edad) ---
echo "<h3>Ejercicio 3</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>"23", "city"=>"Barcelona");
$d1["age"] = "24";

foreach ($d1 as $s) {
    echo "$s <br>";
}



// --- EJERCICIO 4 ---
echo "<h3>Ejercicio 4</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>23, "city"=>"Barcelona");

// Esto elimina desde el índice 3 en adelante
array_splice($d1, 3, 3);
var_dump($d1);



// --- EJERCICIO 5 ---
echo "<h3>Ejercicio 5</h3>";
$letters = array("a,b,c,d,e,f");
array_unshift($letters, "f", "e", "d", "c", "b", "a");

foreach ($letters as $s => $c) {
    echo "$s: $c <br>";
}



// --- EJERCICIO 6 ---
echo "<h3>Ejercicio 6</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>"23", "city"=>"Barcelona");
$d1["age"] = "24";

foreach ($d1 as $s) {
    echo "$s <br>";
}
// --- EJERCICIO 7 Nota media ---
echo "<h3>Ejercicio 7</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>"23", "city"=>"Barcelona");
$d1["age"] = "24";

foreach ($d1 as $s) {
    echo "$s <br>";
}
// --- EJERCICIO 8 busca nota más alta ---
echo "<h3>Ejercicio 8</h3>";
$d1 = array("name"=>"Sara", "surname"=>"Martinez", "age"=>"23", "city"=>"Barcelona");
$d1["age"] = "24";

foreach ($d1 as $s) {
    echo "$s <br>";
}

?>
</body>
</html>