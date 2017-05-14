<?php
    require'conectare2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Document</title>
</head>
<body>
<form action="singup.inc.php" method"POST">
    <input type="text" name="username"  placeholder="Username"><br></br>
	<input type="password" name="password"  placeholder="Password"><br></br>
	<input type="text" name="email"  placeholder="Email"><br></br>
	<input type="submit" name="trimite"  value="Trimite">
</form>

</body>
</html>
	 