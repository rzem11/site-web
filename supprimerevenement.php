<?PHP
include "../core/evenementC.php";
$ev4=new evenementC();

if (isset($_GET['id']))
{
	$id=($_GET['id']);
    
	$ev4->supprimerEvenement($id);
	
	//header('Location: afficherReclamtion.php');
}
	header('Location: events.php');

?>