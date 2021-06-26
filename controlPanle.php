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
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 1;");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 1;");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
    }
  }
   
}
  
  
 
  
  else{
      
      echo "error";
      
  }
  }


  if (isset($_POST["R"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 1;");
   
   if($sql6){
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 1;");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
    }
  }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F"])){
      // "Save Changes" clicked
      $p="Forward";
      
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 1;");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 1;");
      if(!$resultAll){
        die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
            echo $rowData["position"].'<br>';
        }
      }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B"])){
        // "Save Changes" clicked
        $p="Backward";
       
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 1;");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 1;");
        if(!$resultAll){
          die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
              echo $rowData["position"].'<br>';
          }
        }
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S"])){
          // "Save Changes" clicked
        
          $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 1;");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 1;");
  if(!$resultAll){
    die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
    }
  }
  }
         
          
          else{
              
              echo "error";
              
          }}



// ////////////////////////////////////////////////////////////////////////////// Engine2


if (isset($_POST["L2"])){
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 2;");
 
 if($sql6){
  
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 2;");
if(!$resultAll){
die(mysqli_error($dbcon));
}

if (mysqli_num_rows($resultAll) > 0) {
while($rowData = mysqli_fetch_array($resultAll)){
  echo $rowData["position"].'<br>';
}
}
 
  }
  else{
      
      echo "error";
      
  }
}


  if (isset($_POST["R2"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 2;");
   
   if($sql6){
                 
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 2;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F2"])){
      // "Save Changes" clicked
    
       $p="Forward";
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 2;");
     
     if($sql6){
                   
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 2;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B2"])){
        // "Save Changes" clicked
      
        $p="Backward";
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 2;");
       
       if($sql6){
                     
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 2;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
       
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S2"])){
          // "Save Changes" clicked
        
           $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 2;");
         
         if($sql6){
                       
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 2;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
         
          }
          else{
              
              echo "error";
              
          }}


          // ////////////////////////////////////////////////////////////////////////////// Engine3


if (isset($_POST["L3"])){
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 3;");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 3;");
  if(!$resultAll){
  die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
  while($rowData = mysqli_fetch_array($resultAll)){
    echo $rowData["position"].'<br>';
  }
  }
 
  }
  else{
      
      echo "error";
      
  }
}


  if (isset($_POST["R3"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 3;");
   
   if($sql6){
                  
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 3;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F3"])){
      // "Save Changes" clicked
    
       $p="Forward";
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 3;");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 3;");
      if(!$resultAll){
      die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
      while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
      }
      }
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B3"])){
        // "Save Changes" clicked
      
         $p="Backward";
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 3;");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 3;");
        if(!$resultAll){
        die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
          echo $rowData["position"].'<br>';
        }
        }
       
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S3"])){
          // "Save Changes" clicked
        
          $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 3;");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 3;");
          if(!$resultAll){
          die(mysqli_error($dbcon));
          }
          
          if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
            echo $rowData["position"].'<br>';
          }
          }
         
          }
          else{
              
              echo "error";
              
          }}




          // ////////////////////////////////////////////////////////////////////////////// Engine4


if (isset($_POST["L4"])){
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 4;");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 4;");
  if(!$resultAll){
  die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
  while($rowData = mysqli_fetch_array($resultAll)){
    echo $rowData["position"].'<br>';
  }
  }
 
  }
  else{
      
      echo "error";
      
  }
}


  if (isset($_POST["R4"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 4;");
   
   if($sql6){
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 4;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F4"])){
      // "Save Changes" clicked
    
       $p="Forward";
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 4;");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 4;");
      if(!$resultAll){
      die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
      while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
      }
      }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B4"])){
        // "Save Changes" clicked
      
         $p="Backward";
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 4;");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 4;");
        if(!$resultAll){
        die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
          echo $rowData["position"].'<br>';
        }
        }
       
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S4"])){
          // "Save Changes" clicked
        
           $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 4;");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 4;");
          if(!$resultAll){
          die(mysqli_error($dbcon));
          }
          
          if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
            echo $rowData["position"].'<br>';
          }
          }
         
          }
          else{
              
              echo "error";
              
          }}



          // ////////////////////////////////////////////////////////////////////////////// Engine5


if (isset($_POST["L5"])){
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 5;");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 5;");
  if(!$resultAll){
  die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
  while($rowData = mysqli_fetch_array($resultAll)){
    echo $rowData["position"].'<br>';
  }
  }
 
  }
  else{
      
      echo "error";
      
  }
}


  if (isset($_POST["R5"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 5;");
   
   if($sql6){
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 5;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F5"])){
      // "Save Changes" clicked
    
      $p="Forward";
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 5;");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 5;");
      if(!$resultAll){
      die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
      while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
      }
      }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B5"])){
        // "Save Changes" clicked
      
         $p="Backward";
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 5;");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 5;");
        if(!$resultAll){
        die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
          echo $rowData["position"].'<br>';
        }
        };
       
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S5"])){
          // "Save Changes" clicked
        
           $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 5;");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 5;");
          if(!$resultAll){
          die(mysqli_error($dbcon));
          }
          
          if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
            echo $rowData["position"].'<br>';
          }
          }
         
          }
          else{
              
              echo "error";
              
          }}



          // ////////////////////////////////////////////////////////////////////////////// Engine6


if (isset($_POST["L6"])){
  // "Save Changes" clicked

  $p="Left";

 $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 6;");
 
 if($sql6){
  $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 6;");
  if(!$resultAll){
  die(mysqli_error($dbcon));
  }
  
  if (mysqli_num_rows($resultAll) > 0) {
  while($rowData = mysqli_fetch_array($resultAll)){
    echo $rowData["position"].'<br>';
  }
  }
 
  }
  else{
      
      echo "error";
      
  }
}


  if (isset($_POST["R6"])){
    // "Save Changes" clicked
  
     $p="Right";
  
   $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 6;");
   
   if($sql6){
    $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 6;");
    if(!$resultAll){
    die(mysqli_error($dbcon));
    }
    
    if (mysqli_num_rows($resultAll) > 0) {
    while($rowData = mysqli_fetch_array($resultAll)){
      echo $rowData["position"].'<br>';
    }
    }
   
    }
    else{
        
        echo "error";
        
    }
  }
    if (isset($_POST["F6"])){
      // "Save Changes" clicked
    
       $p="Forward";
    
     $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 6;");
     
     if($sql6){
      $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 6;");
      if(!$resultAll){
      die(mysqli_error($dbcon));
      }
      
      if (mysqli_num_rows($resultAll) > 0) {
      while($rowData = mysqli_fetch_array($resultAll)){
        echo $rowData["position"].'<br>';
      }
      }
     
      }
      else{
          
          echo "error";
          
      }}

      if (isset($_POST["B6"])){
        // "Save Changes" clicked
      
         $p="Backward";
      
       $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 6;");
       
       if($sql6){
        $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 6;");
        if(!$resultAll){
        die(mysqli_error($dbcon));
        }
        
        if (mysqli_num_rows($resultAll) > 0) {
        while($rowData = mysqli_fetch_array($resultAll)){
          echo $rowData["position"].'<br>';
        }
        }
       
        }
        else{
            
            echo "error";
            
        }}

        if (isset($_POST["S6"])){
          // "Save Changes" clicked
        
           $p="Stop";
        
         $sql6=mysqli_query($dbc,"UPDATE `control1` SET `position` = '$p' WHERE `control1`.`CID` = 6;");
         
         if($sql6){
          $resultAll = mysqli_query($dbc, "SELECT `position` FROM `control1` WHERE `control1`.`CID` = 6;");
          if(!$resultAll){
          die(mysqli_error($dbcon));
          }
          
          if (mysqli_num_rows($resultAll) > 0) {
          while($rowData = mysqli_fetch_array($resultAll)){
            echo $rowData["position"].'<br>';
          }
          }
          }
          else{
              
              echo "error";
              
          }}

?>

<?php 

mysqli_close($dbc);


?>

