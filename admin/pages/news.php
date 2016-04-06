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

    <title><?php title(); ?></title>

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
                        <h1 class="page-header">News</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->				
				
				
				<?php 
 
					while( $result = $reponse ->fetch())
					{ ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong><?php echo $result['titre'];?> </strong> Publiéé le <?php echo $result['date']?>							
							</div>
							<div class="panel-body">
								<p><?php echo $result['article'] ?></p>
							</div>
						
							<div class="panel-footer">
							
								<form align="right" name="insertion" action="news_supprimer.php" method="POST">
								ID de la News: <input type="text" name="id" value = "<?php echo $result['id']; ?>" size = "1" readonly="readonly" class="btn btn-default disabled">
								<input type="submit" name = "effacer" value ="Effacer" class="btn btn-primary">
							</form>		
							</div>
						</div>
				<?php
					}				
				?>
				
                </div>			
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
