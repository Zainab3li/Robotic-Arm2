<?php 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'control');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql2="SELECT * FROM Control1 where CID between 1 and 6  ";
 $result=$dbc->query($sql2);



 if (isset($_POST["L"])){
    $sql2="SELECT * FROM Control1 where CID = 1   ";
    $result=$dbc->query($sql2);
     $value= mysqli_fetch_assoc($result)
	
	


	?>
	<h3>
   <?php
         echo($value['Engine-name'] ) ; ?>
         </h3><h3 >
         <?php
             echo ($value['position']  );
        ?>
        </h3>
        <hr>
         

<?php
    }

?>




<?php 

mysqli_close($dbc);


?>
<!DOCTYPE html>
<html>
<head>
<title> Robotic Arm </title>
<style type="text/css">
  
h3{color:#c49494;
    text-align: center;
    padding: 0 200px 0 200px;
    font-size: 20px;
   
    }
    </style>
    </head>
    </html>