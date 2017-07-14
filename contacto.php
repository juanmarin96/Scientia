<?php
$email="xxxx@scientiaenvironmental.com";

$comentario="
\n
First Name:$_POST[nombre1]\n
Last Name:$_POST[nombre2]\n
Company Name:$_POST[com]\n
Phone:$_POST[tel]\n
Email Address:$_POST[ema]\n
Street Address:$_POST[adrees]\n
Street Address 2:$_POST[s2]\n
city: $_POST[ciudad]\n
state:$_POST[state]\n
Zip Code:$_POST[zip]\n
Job Role:$_POST[role]\n
Interested In:$_POST[interes]\n
Comments:$_POST[comentario]\n
Contact Me By:$_POST[contact]\n
\n
";

mail($email, 'scientiaenvironmental.com',$comentario);

echo'
	<script type="text/javascript">
		alert("Your message has been sent,Thank You for Contacting ScientiaEnviromental");
	</script>
	<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">
';
?>