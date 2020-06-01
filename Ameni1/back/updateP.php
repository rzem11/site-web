<?php
$link = mysqli_connect("localhost", "root", "", "amenitb"); 
$id=$_GET['id'];
$ref=$_GET['ref']; 
$categ=$_GET['categ'];
$nomP=$_GET['nomP'];
$prixVG=$_GET['prixVG'];
$prixVL=$_GET['prixVL'];
$carac=$_GET['carac'];
$photo=$_GET['photo'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE prod SET ref='$ref',categ='$categ',nomP='$nomP',prixVG='$prixVG',prixVL='$prixVL',carac='$carac',photo='$photo' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:afficherP.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 