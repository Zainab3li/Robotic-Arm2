<?php 

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'control');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
 
$sql2="SELECT * FROM Control1 where CID between 1 and 6  ";
 $result=$dbc->query($sql2);




?>
<!DOCTYPE html>
<html>
<head>
<title> Robotic Arm </title>
<style type="text/css">
  body,html{
    background: linear-gradient(-45deg,  #F08080,#FFFFFF);
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
	animation: gradient 15s ease infinite;
    background-repeat: no-repeat;
}
h3{color:#c49494;
    text-align: left;
    padding: 0 200px 0 200px;}

lable{ 
      position:relative; 
      left:310px; 
      top:60.5px; 
      color:#3C403D;
      font-family: Garamond;
      font-style:oblique;
      font-size: 40px;
      font-weight: bold;
      text-align: left;
      padding: 0 180px 0 180px;
      margin:0px;

       }
       
  .box{
  position:absolute;
  top:50%;
  left:50%;
  font-size:17px;
  transform : translate(-50% ,-50%);
}


.button{ 
  text-decoration: none;
  text-transform:uppercase;
  position:relative;
  top:50px;
  left:200px;
  padding:40px 40px;
  margin: 10px;
  border-radius:100px;
  display:inline-block;
  transition: all .5s;}
  
.button-white{
  background:#fff;
  color:#000;
  
}

.button:hover{
   box-shadow:0px 10px 10px rgba(0,0,0,0.2);
   transform : translateY(-3px);
}

.button:active{
  box-shadow:0px 5px 10px rgba(0,0,0,0.2)
  transform  translateY(-3px);
}

.button-bottom-animation-1{
  animation:comeFromBottom 1s ease-out .8s;
}

.button::after{
  content:"";
  text-decoration: none;
  text-transform:uppercase;
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  border-radius:100px;
  display:inline-block;
  z-index:-1;
  transition: all .5s;
}

.button-white::after {
    background: #fff;
   
}

.button-animation-1:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

@keyframes comeFromBottom{
  0%{
    opacity:0;
    transform:translateY(40px);
  } 
  100%{
    opacity:1;
    transform:translateY(0);
  }
}

</style>
</head>

<body>

        <form  action="controlPanle.php" method="POST">
       
   
      <lable> <span name="E1"> Engine1</span> </lable> 
      
      <button class="button button-white button-animation-1" name="L">  <span  class="box" > Left</span></button>
      <button class="button button-white button-animation-1" name="R"> <span class="box"> Right</span></button>
      <button class="button button-white button-animation-1" name="F"> <span class="box" > FWD</span></button>
      <button class="button button-white button-animation-1" name="B"> <span class="box" > BWD</span></button>
      <button class="button button-white button-animation-1" name="S"> <span class="box" > Stop</span></button>
    <br>
  
   <lable >  Engine2 </lable> 
   <button class="button button-white button-animation-1" name="L2"> <span class="box" > Left</span></button>
   <button class="button button-white button-animation-1" name="R2"> <span class="box"> Right</span></button>
   <button class="button button-white button-animation-1" name="F2"> <span class="box" > FWD</span></button>
   <button class="button button-white button-animation-1" name="B2"> <span class="box" > BWD</span></button>
   <button class="button button-white button-animation-1" name="S2"> <span class="box" > Stop</span></button>
  
  <br>
   <lable >  Engine3 </lable> 
   <button class="button button-white button-animation-1" name="L3"> <span class="box" > Left</span></button>
   <button class="button button-white button-animation-1" name="R3"> <span class="box"> Right</span></button>
   <button class="button button-white button-animation-1" name="F3"> <span class="box" > FWD</span></button>
   <button class="button button-white button-animation-1" name="B3"> <span class="box" > BWD</span></button>
   <button class="button button-white button-animation-1" name="S3"> <span class="box" > Stop</span></button>
    <br>
    
   <lable >  Engine4 </lable> 
   <button class="button button-white button-animation-1" name="L4"> <span class="box" > Left</span></button>
   <button class="button button-white button-animation-1" name="R4"> <span class="box"> Right</span></button>
   <button class="button button-white button-animation-1" name="F4"> <span class="box" > FWD</span></button>
   <button class="button button-white button-animation-1" name="B4"> <span class="box" > BWD</span></button>
   <button class="button button-white button-animation-1" name="S4"> <span class="box" > Stop</span></button>
    <br>
    
  
   <lable >  Engine5 </lable> 
   <button class="button button-white button-animation-1" name="L5"> <span class="box" > Left</span></button>
   <button class="button button-white button-animation-1" name="R5"> <span class="box"> Right</span></button>
   <button class="button button-white button-animation-1" name="F5"> <span class="box" > FWD</span></button>
   <button class="button button-white button-animation-1" name="B5"> <span class="box" > BWD</span></button>
   <button class="button button-white button-animation-1" name="S5"> <span class="box" > Stop</span></button>
    <br>
    
   
   <lable >  Engine6 </lable> 
   <button class="button button-white button-animation-1" name="L6"> <span class="box" > Left</span></button>
   <button class="button button-white button-animation-1" name="R6"> <span class="box"> Right</span></button>
   <button class="button button-white button-animation-1" name="F6"> <span class="box" > FWD</span></button>
   <button class="button button-white button-animation-1" name="B6"> <span class="box" > BWD</span></button>
   <button class="button button-white button-animation-1" name="S6"> <span class="box" > Stop</span></button>
   
    <br>
  

 

      
   </form>
   <?php 


mysqli_close($dbc);

?>
  
    
  

</body>

</html>
