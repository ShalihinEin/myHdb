<?php
$HOST = "localhost";
$USERNAME = "geegossi_hdb";
$PASSWORD = "hdb13";
$DB = "geegossi_hdb";
$link = mysqli_connect($HOST,$USERNAME,$PASSWORD,$DB) or die(mysqli_connect_error());

$query = "Select * from banks;";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$response = Array();

while($row = mysqli_fetch_array($result)){
    $response[] = $row;
}
echo json_encode($response);
return $response;

?>