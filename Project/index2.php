<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	   <link rel="stylesheet" type="text/css" href="style/style.css">
	   <link rel="stylesheet" type="text/css" href= "https://fonts.googleapis.com//css?family=Lato" rel="stylesheet" type='text/css'> 
     <?php 
        $title= "Sign Up";
        require_once "bloks/head.php" ?> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <?php require_once "bloks/header.php" ?>
  <div class="login">
  <div class="container">
   
   <h1>I am happy to see you!</h1>
   <form>
    <input type="text" name="username"  placeholder="Username"><br></br>
	<input type="password" name="password"  placeholder="Password"><br></br>
	<input type="submit" name="trimite"  value="Log In">
   </form>
  </div>
  </div>
 <?php require_once "bloks/footer.php" ?>
</body>
</html>
	 