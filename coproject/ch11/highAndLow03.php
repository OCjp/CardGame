<?php
// array関数を使用し画像名を配列で作成
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
//  0～１３の範囲でランダム数値を１つ取得
    $leftCard = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body style="text-align:center;">
		<h3>ゲーム</h3>
		<h1>- High&Low -</h1>
		<hr>
		<form action="highAndLow07.php" method="post">
		<?php
		// 案内を記載
		   echo 'How do you think?<br>';
		   echo '<hr>';
		// カードを表示
		   echo '<img src="../cards/',$cards[$leftCard],'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   echo '<img src="../cards/bg.png"><br>';
		// ラジオボタンを配置
		// <input type="radio">のnameが同じ中からラジオボタンのうち１つ選択可能となる。
		   echo '<input type="radio" name="select" value="High"> High &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   echo '<input type="radio" name="select" value="Low"> Low';
		// 隠しフィールド：左のカードの情報を記憶させたまま次の結果へ引っ張ってくるために隠しフィールドから情報を送る
		   // この時、””の中に変数を記載する方法に注意すること。
		   // ここでは考え方が少し変わり、変数をそのまま残すために$leftCardで前後の文を繋ぐ形になる。なので',,'がvalueの""内に必要になる形となる。
		   echo '<input type=hidden name=leftCard value="',$leftCard,'">';
		?>
		<br>
		<input type="submit" value="決定">
		</form> 
	</body>
</html>