<?php
//  0～１３の範囲でランダム数値を１つ取得 →！情報を03からPOST送信しているので、ここではランダムにカードを選ぶ変数は必要ない
    // $leftCard = mt_rand(0,13);

// POST送信された先なので、PHPの記述はこれだけで良い。必要なのはこれだけ。
    $leftCardResults = $_POST['leftCard'];
    $results = $_POST['select'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body style="text-align:center;">
		<h3>ゲーム</h3>
		<h1>- High&Low -</h1>
		<hr>
		<?php
		   echo '送信カード番号：',$leftCardResults,'<br>';
		   echo 'High/Low選択：',$results;
		?>
	</body>
</html>