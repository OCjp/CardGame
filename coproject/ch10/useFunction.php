<?php
// array関数を使用し画像名を配列で作成
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

//     0～１３の範囲でランダム数値を１つ取得
    $num = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	■ランダム番号のカード<br>
	<?php
	   echo '($num=',$num,')<br>';
	   echo '<img src="../cards/' ,$cards[$num], '">';
// 	   この部分はわかりにくいが、前後の文字列の間に　array関数（変数）を入れているのでカンマが必要になる
	?>
	</body>
</html>

<!-- x,x,o,o,o,  2, $value = mt_rand(0,13); -->

<!-- multi randam? -->
<!-- 引数とは関数に与える情報のこと（引っ張って持ってくる数） -->
<!-- 返り値とは関数が返す情報のこと -->