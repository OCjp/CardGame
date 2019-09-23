<?php
   $plofile[0]="神田ゴロウ";  //名前を0で指定
   $plofile[1]=169.5;  //身長を1で指定
   $plofile[]=19;  //年齢を　キーの指定なしで格納
   $plofile[]='A';  //血液型

 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo $plofile[0],"さんの身長は",$plofile[1],"cmです。<br>";
       echo '年齢は',$plofile[2],"歳、血液型は",$plofile[3],"型です。";

	?>
	</body>
</html>