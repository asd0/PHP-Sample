<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
	<div>「オンラインメモ」へようこそ</div>
	<table>
		<tbody>
			<tr>
				<td><button id="create">メモ作成</button></td>
				<td><textarea id="inputMemo" rows="10" cols="100"></textarea></td>
				<td></td>
			</tr>
			<tr>
				<td><button id="confirm">メモ確認</button></td>
				<td><textarea id="confirmMemo" readonly="readonly" rows="10"
						cols="100"></textarea></td>
				<td></td>
			</tr>
			<tr>
				<td><button id="delete">メモ削除</button></td>
				<td><input id="deleteMemoId" type="number"></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</body>
<script type="text/javascript" src="/memo/js/lib/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/memo/js/memoAjax.js"></script>
</html>

