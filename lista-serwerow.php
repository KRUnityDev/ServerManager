<div class="server-list">

	<?php
		include("file-handling.php");
		for($a = 0; $a<$i; $a++)
		{
			echo (' <div class="server">');
			echo ('	<h2> ID: </h2>');
			echo ('	<h2>'.$Servers[$a]->id.'</h2>');
			echo ('	<h2> | </h2>');
			echo ('	<h2> NAZWA: </h2>');
			echo ('	<h2 style="width:190px;"> '.$Servers[$a]->name.' </h2>');
			echo ('	<h2> | </h2>');
			if($Servers[$a]->status == 0)
			echo ('	<h2 style="color:red;"> WYŁĄCZONY </h2>');
			else
			echo ('	<h2 style="color:green;"> WŁĄCZONY </h2>');

			echo ('	<h2> | </h2>');
			echo ('	<h2> PID: </h2>');
			echo ('	<h2 style="color:green;">'.$Servers[$a]->pid.'</h2>');
			echo ('	<h2> | </h2>');
			echo ('	<div class="rectangular-button" style=""> USUŃ </div>');
			echo (' </div>');
		}
	?>

		<div class="rectangular-button" style="background-color:#39b894"> DODAJ SERWER </div>
</div>
	