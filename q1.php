</head>
<body>
<?php
	$Show = array (
	array("-","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","-"),
	array("&nbsp&nbsp","-","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","-","&nbsp&nbsp"),
	array("&nbsp&nbsp","&nbsp&nbsp","-","&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp","-","&nbsp&nbsp","&nbsp&nbsp"),
	array("&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","-","&nbsp&nbsp&nbsp&nbsp&nbsp","-","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp"),
	array("&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp","-","&nbsp&nbsp&nbsp&nbsp&nbsp","-","&nbsp&nbsp","&nbsp&nbsp","&nbsp&nbsp"),
	);

	echo "<br />";
	for($a = 0; $a <5; $a++){
		for($b = 0;$b<9;$b++){
			echo $Show[$a][$b];
		}
		echo "<br />";
	}

?>


</body>
</html>