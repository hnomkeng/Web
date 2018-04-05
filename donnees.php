<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta content="text/html; charset=windows-1252" http-equiv="content-type">
                      <link rel="shortcut icon" href="IMG/loup.jpg" type="image/x-icon" />
  <title>Ragnarok Donnees</title>
  <!-- Style de la page -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tableau de bord">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Tableau de bord</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Map">
          <a class="nav-link" href="Map.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">MAP</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Donn&eacute;es">
          <a class="nav-link" href="donnees.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Donn&eacute;es</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Composants">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Informations</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="materiel.html">Materiel</a>
              <a href="docs/index.html">Documentations</a>
            </li>
          </ul>
        </li> 
        </li>   
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notre école">
          <a class="nav-link" href="http://www.esme.fr/formation-informatique/bts-systemes-numeriques">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Notre Ecole</span>
          </a>
        </li>               
        
      </ul>
        <center><a class="nav-link" href="https://github.com/white-wolf-project/ragnarok">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text" >Ragnarok</span></center>
          </a>
        </li>
      <ul class="navbar-nav sidenav-toggler">
        
          <a class="nav-link text-center" id="sidenavToggler">
          </a>
        </li>
      </ul>     
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Donn&eacute;es</a>
        </li>
        <li class="breadcrumb-item active">Ragnarok</li>
      </ol>
      <!-- Premier tableau-->

      <!-- Récupération donne sur la base de donnée -->


<!DOCTYPE html>
<?php
try
{

  $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}




$reponse = $bdd->query('SELECT * FROM jeux_video'); ?>

 <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th> ID </th>
                  <th>Nom</th>
                  <th>Possesseur</th>
                  <th>Plate-forme</th>
                  <th>Prix</th>
                  <th>Nb de joueur Max</th>
                  <th>Commentaire</th>
                </tr>
              </thead>

<?php
while ($donnees = $reponse->fetch())
{
?>
    <tr>  
          <td><?php echo $donnees['ID'];?></td>          
          <td><?php echo $donnees['nom'];?></td>
          <td><?php echo $donnees['possesseur'];?></td>
          <td><?php echo $donnees['console'];?></td>
          <td><?php echo $donnees['prix'];?></td>
          <td><?php echo $donnees['nbre_joueurs_max'];?></td>
          <td><?php echo $donnees['commentaires'];?></td>
    </tr>
    
<?php
}

$reponse->closeCursor();
?>
      
              
       </table>
      </div>
    </div>
  </div>
</div>
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">

    <!-- Deuxieme tableau -->

 


    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © WhiteWolf Team</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
