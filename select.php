<?php
include('connect.php');

$sql = 'CALL GetCountriesInNorthAmerica;';
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

//var_dump($results); 
//var_dump muestra el contenido de un objeto

echo $results[2]->Population;
//Muestra el contenido especifico de un campo en un registro. 

if ($query->rowCount() > 0) {

    echo "<table border='1px'>";
    echo "<tr>
      <td>Name</td>
      <td>Continent</td>
      <td>Region</td>
      <td>Population</td>
    </tr>";
    foreach ($results as $item) {
        echo "<tr>
        <td>" . $item->Name . "</td>
        <td>" . $item->Continent . "</td>
        <td>" . $item->Region . "</td>
        <td>" . $item->Population . "</td>
      </tr>";
    }