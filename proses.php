<?php

	if(isset($_POST['kirim'])){
		$username=$_POST['username']
		$password=$_POST['password']
		$user=array(
					"user"=>"ujang",
					"pass"=>"silalahi",);

		if ($username==$user['user']&&$password==$user['pass']) {
			# code...
			echo "oke oce:"."<br>>";
		}


?>



		<form method="POST">
		makanan<input type="checkbox" name="makanan[]" value="seblak"><br>
		buah<input type="checkbox" name="buah[]" value="aple"><br>
		laptop<input type="checkbox" name="laptop[]" value="toshiba"><br>
		<input type="submit" name="submit" value="login">
	</form>




 ?>

		
