<?php
	include_once '../../includes/db_connect.php';
	include_once '../../includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php title();?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <?php include('menu.php'); ?>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Deals</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<p>
					<h4>Ajoutez des deals pour garnir les loisirs!</h4>
				</p>
				</br>
				
				<form name="insertion" action="deal_valider.php" method="POST">
					<table border="0" align="left" cellspacing="2" cellpadding="2">
						<tr align="left">
							<td><h4><strong>Titre</strong></h4></td>
							<td><input type="text" name="titre" size = "41"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Catégorie</strong></h4></td>
							<td>
								<form>
									<select name="categorie" size="1" style="width:304px">
										<option>Autre
										<option>Bien-Être
										<option>Insolite
										<option>Parcs d'Attraction
										<option>Repas
										<option>Sensations Fortes
										<option>Voyages
										<option>Tickets
									</select>
								</form>
							</td>
							
						<tr align="left">
							<td><h4><strong>Description</strong></h4></td>
							<td><textarea type="text" name="description" cols="40" rows="6"></textarea></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Date de Début</strong></h4></td>
							<td><input type="text" name="date_debut" size = "41"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Date de Fin</strong></h4></td>
							<td><input type="text" name="date_fin" size = "41"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Places Disponibles</strong></h4></td>
							<td><input type="text" name="places_disponibles" size = "41"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Prix</strong></h4></td>
							<td><input type="text" name="prix" size = "41"></td>
						</tr>
						<tr align="center">
							<td colspan="2"><input type="submit" value="Valider"></td>
						</tr>
					</table>
				</form>		
            </div>
            <!-- /.container-fluid -->	
			
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>