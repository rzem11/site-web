<?php
$link = mysqli_connect("localhost", "root", "", "amenitb"); 
$id=$_GET['id'];
$refC=$_GET['refC']; 
$nomC=$_GET['nomC'];
$datecreation=$_GET['datecreation'];
$description=$_GET['description'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  
$sql = "UPDATE catg SET refC='$refC',nomC='$nomC',datecreation='$datecreation',description='$description'  WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:AfficherC.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 