<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $pageTitle ?>
        <!--Chargement du CSS de Bootstrap-->
        <link rel="stylesheet"href="dependencies/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet"href="dependencies/bootstrap/dist/css/bootstrap-theme.min.css">
	</title>
	<meta charset="utf-8">
</head>
<body class="container-fluid">
    <!--Contenu de l'application-->
    <section class="row">
        <div class="col-md-8 col-md-offset-2">
<?php echo $content ?>
        </div>
    </section>

<script src="dependencies/jquery/dist/jquery.min.js"></script>
<script src="dependencies/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>