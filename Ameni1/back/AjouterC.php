<script> 
   
      
  function surligne(myform, erreur)
{
   if(erreur)
      myform.style.backgroundColor = "#fba";
   else
      myform.style.backgroundColor = "";
}

  function verifqteP(myform)
{
   var  qteP= parseInt(myform.value);
   if(isNaN(qteP) || qteP < 0 )
   {
      surligne(myform, true);
      return false;
   }
   else
   {
      surligne(myform, false);
      return true;
   }
}



 
  function verifRef(myform)
{  
  if(myform.value.length==0)
   {
      surligne(myform, true);
      return false;
   }
   else
   {
      surligne(myform, false);
      return true;
   }

}

function verifForm(f)
{
  
   var qtePOk = verifqteP(f.qteP);
    var refCOk = verifRef(f.refC);
  
   if(qtePOk && refCOk )
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les myforms");
      return false;
   }
}
 function ok()
  {
alert("Votre catégorie a été ajoutée avec succès!");
}
  </script>


<?php 

include "../config.php";





if (isset($_POST['valider']))
{ 
if(empty($_POST['refC']) || empty($_POST['nomC']) || empty($_POST['description']))
{
  echo "<script> alert('Erreur d ajout, Vérifier vos champs!'); </script>" ;

}
else{
	$req="insert INTO catg(refC,nomC,qteP,datecreation,description) values ('".$_POST['refC']."','".$_POST['nomC']."',0,'".$_POST['datecreation']."','".$_POST['description']."')";
	 $db=config::getConnection(); 
	$sql=$db->prepare($req); 
	$sql->execute(); 
	echo "<script> alert('Catégorie ajoutée avec succès.'); </script>" ;
}

}

?>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ajouter Catégorie</title>

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
            <a href="#">Catégories</a>
          </li>
          <li class="breadcrumb-item active">Ajouter une nouvelle catégorie</li> 
        </ol>

 
</head>
</br>
</br>
<head>
<body>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="5">
            
         

<fieldset align="center">
     <h5>
<form id="myform" method="POST" onsubmit="return verifForm(this)" > 

<tr><td><label style="font-weight: bold"> Réference: </label></td>
<td><input type="text" class="form-control" name="refC" placeholder="Saisir la réference"  onblur="verifqteP(this)" value=""style="width:500px">  </td>  

 <tr><td> 
<label style="font-weight: bold"> Nom de la catégorie </label> </td>
<td><input type="text" class="form-control" name="nomC" placeholder="Saisir le nom" onblur="verifRef(this)" value="" style="width:500px"> </td>

<tr><td>

<label style="font-weight: bold"> Date de création </label> </td>



<td>
<input type="text" class="form-control" value="<?php echo date(DATE_RFC2822); ?>" name="datecreation"> </td>
<tr> <td><label style="font-weight: bold"> Description: </label> </td>
<td><textarea type="text" onblur="verifRef(this)" style="width:500px" name="description" value="" placeholder="Décrire cette catégorie" >
</textarea> </td>


</table>




</h4>

<input type="submit" value="valider" name="valider" > 

<input type="reset" value="Reset"> 
</fieldset>

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
