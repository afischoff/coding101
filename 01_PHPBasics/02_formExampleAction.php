<html>
<head>
	<title>Thank you!</title>
</head>
<body>
<h1>Welcome <?php echo $_POST["firstName"]; ?>!</h1>
<p>Thank you for completing the form!</p>
<p>Here's the info I received:</p>
<table>
	<tr>
		<td>First Name:</td>
		<td><?php echo $_POST["firstName"]; ?></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><?php echo $_POST["lastName"]; ?></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo $_POST["email"]; ?></a></td>
	</tr>
</table>

</body>
</html>