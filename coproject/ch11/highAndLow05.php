<?php
// カード画像を配列でつくる。array関数を利用。正数値keyでよいので。
	$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//  0～１３の範囲でランダム数値を１つ取得 
// →！右側のカードの選択するのに必要になる。また、変数名を変えれば同じ処理でも混乱しない
    $rightCard = mt_rand(0,13);

// POST送信された先で、情報を受け取るために必要。
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
		// カードを表示。配列使って表示。画像名を登録した$cardsのうち１つ抽出するなら正数値キーを指定しなければならないことに注意。
		   echo '<img src="../cards/',$cards[$leftCardResults],'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   echo '<img src="../cards/',$cards[$rightCard],'"><br>';
		// 回答の表示
		   echo $results,'を選択しました。';
		?>
	</body>
</html>