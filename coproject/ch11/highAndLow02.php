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
		<?php
		   echo '<img src="../cards/',$cards[$leftCard],'"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   echo '<img src="../cards/bg.png">';
		?>
	</body>
</html>