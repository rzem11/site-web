<?PHP
include "../core/reductionC.php";
$ev4=new reductionC();

if (isset($_GET['id']))
{
	$id=($_GET['id']);
    
	$ev4->supprimerreduction($id);
	
	//header('Location: afficherReclamtion.php');
}
	header('Location: reductions.php');

?>