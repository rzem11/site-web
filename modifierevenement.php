<?PHP 
include "../core/evenementC.php";
include "../entities/evenement.php";
			$evenementC= new evenementC();
			if (isset($_POST['id']) )
{
			$targetDir = "photo/";
  			$fileName = basename($_FILES['Image']['name']);
 			$targetFilePath = $targetDir . $fileName;
 			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  
  				move_uploaded_file($_FILES['Image']['tmp_name'],$targetFilePath);

			$evenementC->modifierEvenement($_POST["id"],$_POST['nom'], $_POST['dateevent'], $_POST['place'], $_POST['datefinevent'],$targetFilePath);
			echo "evenement modifie";
					header('Location: events.php');
					}


?>