<?php
   $plofile['name']="神田ゴロウ";  //キーをな名前
   $plofile['身長']=169.5;  //身長
   $plofile['age']=19;  //年齢を　キー   ageで格納
   $plofile['型']='A';  //キーを型指定、配列に血液型を格納

 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo $plofile['name'],"さんの身長は",$plofile['身長'],"cmです。<br>";
       echo '年齢は',$plofile['age'],"歳、血液型は",$plofile['型'],"型です。";

	?>
	</body>
</html>