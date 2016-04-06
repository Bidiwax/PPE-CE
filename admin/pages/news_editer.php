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
                        <h1 class="page-header">News</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<p>
					<h4>Mettez à jour la page principale du site! Vos employés n'en seront que plus ravis : o)</h4>
				</p>
				</br>
				
				<form name="insertion" action="news_valider.php" method="POST">
					<table border="0" align="left" cellspacing="2" cellpadding="2">
						<tr align="left">
							<td><h4><strong>Titre</strong></h4></td>
							<td><input type="text" name="titre" cols="40" size = "41"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Article</strong></h4></td>
							<td><input type="text" name="article" size = "41" style="height:100px;"></td>
						</tr>
						<tr align="left">
							<td><h4><strong>Date</strong></h4></td>
							<td><input type="text" name="date" cols="40" value = "<?php echo date('o/m/j'); ?>" size = "41" readonly = "readonly"></td>
						</tr> 
						<tr align="right">
						
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
