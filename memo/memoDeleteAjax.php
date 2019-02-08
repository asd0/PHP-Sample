<?php
$memoId = trim($_POST["deleteMemoId"]);

if (! ($memoId)) {
    echo json_encode('メモIDが入力されていません。');
    return;
}
deleteMemo($memoId);
echo json_encode('削除が完了しました。');
return;

function deleteMemo($id)
{
    $propertyMap = parse_ini_file('.\conf\environment.properties');

    $mysqli = new mysqli($propertyMap['mysql.host'], $propertyMap['mysql.user'], $propertyMap['mysql.password'], $propertyMap['mysql.db'], $propertyMap['mysql.port']);
    $mysqli->autocommit(false);

    // TODO to prepared
    $query = "DELETE FROM memo WHERE ID = '$id'";
    $mysqli->query($query);

    $mysqli->commit();
    $mysqli->close();
}

?>