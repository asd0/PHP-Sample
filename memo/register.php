<?php
$memo = trim($_POST["memo"]);
if ($memo) {
    insertMemo($memo);
}

function insertMemo($memo)
{
    $mysqli = new mysqli();
    $id = rand(0, 100000);
    // TODO to prepared
    $query = "INSERT INTO memo(ID, CONTENT) VALUES('$id', '$memo')";
    var_dump($query);
    $mysqli->query($query);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	メモ登録完了
	<br>
	<a href="http://localhost/memo/index.phtml">戻る</a>

</body>
</html>