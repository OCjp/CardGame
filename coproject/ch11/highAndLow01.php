<?php
//  0～１３の範囲でランダム数値を１つ取得
    $leftCard = mt_rand(0,13);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<!-- body全体をセンタリング。組み込み？型で。 -->
	<body style="text-align:center;">
		<h3>ゲーム</h3>
		<h1>- High&Low -</h1>
		<!-- 区切り線は<hr> -->
		<hr>
		<?php
		   echo '■ランダム数値の表示→ ',$leftCard,'<br>';
		?>
	</body>
</html>