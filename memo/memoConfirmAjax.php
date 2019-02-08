
<?php
$propertyMap = parse_ini_file('.\conf\environment.properties');
$mysqli = new mysqli($propertyMap['mysql.host'], $propertyMap['mysql.user'], $propertyMap['mysql.password'], $propertyMap['mysql.db'], $propertyMap['mysql.port']);

$query = "SELECT * FROM memo";
$result = $mysqli->query($query);

$mysqli->close();
$returnDataMap = [];
while ($row = $result->fetch_assoc()) {
    $returnDataMap[$row['ID']] = $row['CONTENT'];
}
echo json_encode($returnDataMap);
?>