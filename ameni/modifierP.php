<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modifier Produit</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">ERAYEN</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
           <span>Produits</span> 
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="nav-link" href="ajouterP.php">
          <h6 class="dropdown-header">Ajouter Produit</h6>
        </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="afficherP.php">
          <h6 class="dropdown-header">Afficher Stock</h6>
        </a>
          
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Catégories</span> 
        </a>

        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="nav-link" href="AjouterC.php">
          <h6 class="dropdown-header">Ajouter Catégorie</h6>
        </a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="AfficherC.php">
          <h6 class="dropdown-header">Afficher Stock</h6>
        </a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Produits</a>
          </li>
          <li class="breadcrumb-item active">Modifier</li> 
        </ol>

        
<meta charset="utf-8">
</head>

<body>
</br>
</br>
<?php 

include "../config.php";
$req="select * from catg";
$db=config::getConnection();
$listC=$db->query($req) ;

if (isset($_GET['id']))
{
	$req="select * from prod where id=".$_GET['id'];
	$db=config::getConnection();
	$result=$db->query($req);
       foreach($result as $row)

	   {   
           $photo=$row['photo'];
	   	   $id=$row['id'];
	       $ref=$row['ref'];
		   $categ=$row['categ'];
		   $nomP=$row['nomP'];
		   $prixVG=$row['prixVG'];
		   $prixVL=$row['prixVL'];
		   $carac=$row['carac'];
		   
	   }
}
?>

             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
<form align="center" id="myForm" method="get" action="updateP.php">

<input type="hidden" value="<?php echo $id; ?>" name="id">
<tr><td>
<label> Réference </label></td>
<td><input type="text"  value="<?php echo $ref;?>" class="form-control" name="ref" placeholder="Réference du produit" style="width:400px"> </td></tr>

<tr><td><label> Catégorie </label></td>
<td><select name="categ"  >
<option> <?php echo $categ;?> </option> 
<option>----------</option>
      <?php
foreach ($listC as $cat) 
{
  echo('<option> '.$cat['nomC'].' </option>'); 
}

?>


</select>
</td></tr>
<tr><td><label> Nom du produit </label></td>
<td><input type="text"  value="<?php echo $nomP;?>" class="form-control" name="nomP" placeholder="Nom du produit" style="width:400px"> </td></tr>
<tr><td><label> Prix vente en gros </label></td>
<td><input type="number" value="<?php echo $prixVG;?>" class="form-control" name="prixVG" placeholder="Prix en Dt" style="width:400px"> </td></tr>
<tr><td><label> Prix vente en ligne </label></td>
<td><input type="number" value="<?php echo $prixVL;?>" class="form-control" name="prixVL" placeholder="Prix en Dt" style="width:400px"> </td></tr>

<tr><td><label> Caractéristiques </label></td>
<td><input type="text" value="<?php echo $carac;?>" class="form-control" name="carac" placeholder="Caractéristiques" style="width:400px"> </td></tr>
</h5>
<tr><td><img src="produits/<?php echo $photo;?>" width="100" height="100" /> </td>

<td>
<label for="photo">Choisissez la photo à insérer</label><input type="file" name="photo" enctype= "multipart/form-data" /> </td> </tr>
</table>

<input type="reset" value="Reset"> 
<a href="updateP.php?id=<?php  $id; ?>">


<input type="submit" value="Save" name="valider"> 
</a>
</form>




 <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->


  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>

  

