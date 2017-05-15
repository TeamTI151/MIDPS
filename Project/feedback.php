<!DOCTYPE html>
<html>
<head>
   <?php 
   $title= "Inapoi";
   require_once "bloks/head.php" ?> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	$(document).ready (function()
	{
		$("#done").click(function(){
			var name = $("#name").val();
			var email = $("#email").val(); 
			var  subject = $("#subject").val();
			var  message = $("#message").val();
			var fail ="";
			if(name.length < 3) fail ="Numele trebuie sa contina nu mai putin de 3 caractere";
			else
			if(email.split('@').length-1==0 || email.split('.').length -1==0 )	
				fail="Ati introdus un email gresit";
			else if(subject.length<5)
				fail="Tema subiectului trebuie sa contina nu mai putin de 5 caractere";
			else if(message.length<20)
				fail="Mesajul nu trebuie sa contina mai putin de 20 de caractere";
			if(fail!="")
			$('#messageShow').html (fail + "<div class='clear'><br></div>");
           	$('#messageShow').show ();
             return false;			
		})
	})
    </script>	
</head>
<body>
 <?php require_once "bloks/header.php" ?>
   <div id="wrapper">
        <div id="leftCol">
		  
  <input type="text" placeholder="Nume" id="name" name="name"><br /> 
  <input type="text" placeholder="Email" id="email" name="email"><br />
  <input type="text" placeholder="Tema mesajului" id="subiect" name="subiect"><br />
  <textarea name="message" id="message" placeholder="Introduceti aici mesajul dumneavoastra"></textarea><br />
  <div id="messageShow"></div>
  <input type="button" name="done" id="done" value="Trimite">
		</div>
			<?php require_once "bloks/rightCol.php" ?>
		  </div>
		 
	 <?php require_once "bloks/footer.php" ?>
	 		
</body>
</html>
		