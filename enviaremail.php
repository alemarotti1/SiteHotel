<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<?php 
		
		if(isset($_POST['enviar'])){
			
			$to = "contato@hotelale.com";			
			$subject = "Contato pelo site - ".$_POST['name'];
			$txt = $_POST['message'];
			//$headers = "From: ".$_POST['email'] . "\r\n" ."CC: hotel.ale@hotmail.com";
			$headers = "From: ".$_POST['email'] . "\r\n";

			mail($to,$subject,$txt,$headers);

			header('Location: email-enviado.php');
			
		}else{
			
			header('Location: index.php');
		}
	?>
	</body>

</html>
