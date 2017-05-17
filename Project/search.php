

<!DOCTYPE html>
<html>
<head>
   <?php 
   $title= "Telefoane pentru toti";
   require_once "bloks/head.php" ?> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	   
</head>
<body>

   
		<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn,"magazin");
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];
if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM products WHERE p_name LIKE '%$name%'";
	$result = mysqli_query($conn, $sele);
	
	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){ 
            
		?>
   <?php require_once "bloks/header.php" ?> 
    
    
    
    <p> </p>
    <p> </p>
   <div class="col-md-3">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive">
            <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px; color: red;" class="btn btn-default" value="Add to Bag">
            </div>
            </form>
            </div>
        
        
        
        
        
    <?php
	}
}else{
echo'<h2> Search Result</h2>';
print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}
?>
	 		<?php require_once "bloks/footer.php" ?>
</body>
</html>