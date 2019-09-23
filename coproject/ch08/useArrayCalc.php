<?php
// 配列変数に３つの値を用意
    $nums = array(1,3,5);
//     配列の要素を3つ全て足す
    $ans = $nums[0] + $nums[1] + $nums[2];
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	echo  $nums[0],' +', $nums[1] ,'+', $nums[2],'=',$ans;
	?>
	</body>
</html>

<!-- o,x,x,x,x,49,39,220,8.8,8余り8ｘ→４ -->

<!-- %は余りの数のみを出すので割れる数は含まれない。残りの数値が与えられる -->
