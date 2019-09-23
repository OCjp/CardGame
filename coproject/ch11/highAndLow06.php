<?php
// カード画像の表示に使用。
	$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
// 右側のカードをランダムに選択するのに必要な数値。
    $rightCard = mt_rand(0,13);
// POST送信された情報を受け取る。
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
		// カードを表示。配列使って表示。キーは正数値なので数値を表す変数を[]内に記述する必要がある。
		   echo '<img src="../cards/',$cards[$leftCardResults],'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   echo '<img src="../cards/',$cards[$rightCard],'"><br>';
		// 回答の表示
		   echo $results,'を選択しました。<br>';
		   // 結果の表示。条件により変化するので、if文を使う。	 ！この時文字列を使用する際は’’をつけ忘れないように注意すること
		   if ($leftCardResults >= $rightCard && $results == 'Low') {
		   		echo 'You Win!';
		   }elseif ($leftCardResults <= $rightCard && $results == 'High') {
		   		echo 'You Win!';
		   } else {
		   		echo 'You Lose...';
		   };
		?>
	</body>
</html>