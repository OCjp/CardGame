<?php
	// array関数を使ってトランプ画像名を配列で作成
	$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

	// フォームのPOST送信データを各変数に代入
	$iNum = $_POST['num1'];
	$hNum = $_POST['num2'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
		■入力番号のカード　隠しフィールド番号のカード <br>
		<?php
		   echo '<img src="../cards/',$cards[$iNum],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		   // 特殊文字を入れる（カード間隔を作るため）
		   echo '<img src="../cards/',$cards[$hNum],'">';
		?>
	</body>
</html>

<!-- 17行目の後ろの文字は全角スペースを示させる。 -->
<!-- o,o,x,o,o,get（多分指定されてないから）,test.php,$_GET,number,0 -->

<!-- method属性を省略すると自動的にGET送信になる -->
<!-- inputタグ内のvalue属性で設定している値が送信データになる -->