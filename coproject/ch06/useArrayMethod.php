<?php
// array関数を使用し画像名を配列で作成
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
//     表示したいカード番号を選択
    $num = 12;

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo '■カードを画面に表示します<br>';
	   echo '<img src="../cards/' ,$cards[$num], '">';
// 	   この部分はわかりにくいが、前後の文字列の間に　array関数（変数）を入れているのでカンマが必要になる
	?>
	</body>
</html>

<!-- o,x,o,o,x,3,1つ冬,$data[2],4つ,5,日本人の名字のベスト1位は佐藤です。 -->