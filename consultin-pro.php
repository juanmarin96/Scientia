<?php
$email="xxxx@scientiaenvironmental.com";

$comentario="
\n
Name:$_POST[nombre]\n
Organization:$_POST[organizacion]\n
Type of business:$_POST[trabajo]\n
City-State:$_POST[ciudad]\n
Email:$_POST[correo]\n
Phone number:$_POST[telefono]\n
Preferred way of communication:$_POST[comuni]\n
Mobile Phone number:$_POST[cel]\n
message:$_POST[mensaje]\n
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