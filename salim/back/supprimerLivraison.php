<?PHP
	include "../core/LivraisonC.php";

	echo $_GET['idL'];
$Livraison1C=new LivraisonC();
$Livraison1C->supprimerLivraison($_GET['idL']);
header('Location: GestionLivraison.php');

?>