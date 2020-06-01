<?PHP
	include "entities/Livreur.php";
    include "core/LivreurC.php";
    if (isset($_POST['nomL']) and isset($_POST['numL']) and isset($_POST['zoneL']))
    {
		$Livreur1=new Livreur($_POST['idLivreur'],$_POST['nomL'],$_POST['numL'],$_POST['zoneL']);
		
		$Livreur1C=new LivreurC();
		$Livreur1C->ajouterLivreur($Livreur1);
		header('Location: GestionLivreur.php');
		
	}
	else{
		echo "vérifier les champs";
	}
?>