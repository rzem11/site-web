<?PHP 
include "../core/reductionC.php";
include "../entities/reduction.php";
			$reductionC= new reductionC();
			if (isset($_POST['idreduction']) )
{
			

			$reductionC->modifierReduction($_POST['pourcent'],$_POST['dateexp']);
			echo "reduction modifie";
					header('Location: reductions.php');
					}


?>