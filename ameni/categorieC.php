<?PHP
include "../config.php";
include('../entities/categorie.php');
class categorieC
{
	function ajoutercategorie($categorie)
	{
		 $sql = "INSERT INTO catg (refC,nomC,qteP,datecreation,description) values (:refC, :nomC, :qteP, :datecreation, :description) ";
        $db = config::getConnection();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':refC', $categorie->getrefC());
            $req->bindValue(':nomC', $categorie->getnomC());
			$req->bindValue(':qteP', $categorie->getdescriptionP());
			$req->bindValue(':datecreation', $categorie->getdatecreation());
			$req->bindValue(':description', $categorie->getdescription());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function affichercategorie()
	{
		$sql = "SELECT * FROM catg";
		$db = config::getConnection();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimercategorie($refC)
	{
		$sql = "DELETE FROM catg where refC=:refC";
		$db = config::getConnection();
		$req = $db->prepare($sql);
		$req->bindValue(':refC', $refC);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	  function rechercheCateg($key)
  {
    $sql="SELECT * FROM catg WHERE refC LIKE '%$key%' OR nomC LIKE '%$key%' OR datecreation LIKE '%$key%' OR description LIKE '%$key%'";
    $db = config::getConnection();
    try {
      $liste = $db->query($sql);
      return $liste;
    } catch (Exception $e) {
      die('Erreur: ' . $e->getMessage());
    }
  }
	
}
