<?php
$inputMemo = trim($_POST["inputMemo"]);

if (! ($inputMemo)) {
    echo json_encode("メモが入力されていません。");
    return;
}

insertMemo($inputMemo);
echo json_encode('');
return;

function insertMemo($memo)
{
    $propertyMap = parse_ini_file('.\conf\environment.properties');

    $mysqli = new mysqli($propertyMap['mysql.host'], $propertyMap['mysql.user'], $propertyMap['mysql.password'], $propertyMap['mysql.db'], $propertyMap['mysql.port']);
    $mysqli->autocommit(false);

    $query = "SELECT Max(ID) FROM memo";
    $row = $mysqli->query($query)->fetch_row();
    $id = is_null($row[0]) ? 1 : ($row[0] + 1);

    // TODO to prepared
    $query = "INSERT INTO memo(ID, CONTENT) VALUES('$id', '$memo')";
    $mysqli->query($query);

    $mysqli->commit();
    $mysqli->close();
}
?>