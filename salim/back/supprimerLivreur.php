<?PHP
	include "../core/LivreurC.php";

	echo $_GET['idLivreur'];
$Livreur1C=new LivreurC();
$Livreur1C->supprimerLivreur($_GET['idLivreur']);
header('Location: GestionLivreur.php');

?>