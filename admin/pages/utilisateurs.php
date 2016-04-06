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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <h1 class="page-header">Utilisateurs</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
				<div class="col-sm-9">
				
				<?php 
					echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
					echo( "<tr>
							<td><div align=\"center\">Id</div></td>
							<td><div align=\"center\">Username</div></td>
							<td><div align=\"center\">E-mail</div></td>
							<td><div align=\"center\">Password</div></td>
							<td><div align=\"center\">Effacer?</div></td>
							
						</tr>" );
 
					while( $result = $membres ->fetch())
					{ 
						?>	
			
							<tr>
								<td><div align=\"center\"><?php echo $result['id'];?></div></td><br />
								<td><div align=\"center\"><?php echo $result['username'] ?></div></td><br />
								<td><div align=\"center\"><?php echo $result['email']?></div></td><br />
								<td><div align=\"center\"><?php echo $result['password'] ?></div></td><br />
								<td><div align=\"center\">Effacer </div></td><br />
							</tr><br />
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

</html>
