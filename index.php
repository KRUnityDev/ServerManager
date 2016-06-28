<!DOCTYPE html>
<html>
<head>
	<title>Intefejs Serwera</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ui-style.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<script src="script.js"></script>
	<?php
	$option = $_GET["option"];
	?>
</head>
<body>
<div class="top">
	<i class="fa fa-server fa-2x" style="margin-top:10px;"></i>
	<div class="title">Menadżer Serwerów</div>
	<i class="fa fa-caret-right" style="margin-top:15px; "></i>
	<div class="title">Lista Serwerów</div>
</div>
<div class="left-menu">

	<div class="empty-option"> 
	</div>

	<?php
	if($option == "administracja")
	echo('<div class="selected-option">'); 
	else echo('<div class="option"  onclick="ChangePage('.stripslashes("'").'administracja'.stripslashes("'").')">'); 
	?>

		<i class="fa fa-group" style="margin-left:10px;"></i>
		Administracja
	</div>

	<?php
	if($option == "lista-serwerow")
	echo('<div class="selected-option">'); 
	else echo('<div class="option" onclick="ChangePage('.stripslashes("'").'lista-serwerow'.stripslashes("'").')">'); 
	?>

		<i class="fa fa-list" style="margin-left:10px;"></i>
		Lista Serwerów
	</div>
</div>
	<div class="right-content">
		<?php
		if($option == "lista-serwerow")
		include("lista-serwerow.php");
		else if($option == "administracja")
		include("administracja.php");
		?>
	</div>

</div>

<div class="footer">
Made by Zmienny
</div>

</body>
</html>