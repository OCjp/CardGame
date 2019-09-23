<?php
    //name
    $name="神田ゴロウ";
//   身長
    $height=169.5;
//   年齢
    $age=19;
 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo $name,'さんの身長は',$height,'です。<br>';
       echo '年齢は',$age,"歳です。";

//        $ageを変更
       $age=20;

       echo "後1ヶ月で",$age,"歳になります。";
	?>
	</body>
</html>