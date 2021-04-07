<?php include_once('define/define.php');?>

<!doctype html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Webpage template</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="modules/nav/css/nav.css" type="text/css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" type="text/css">
    <script src="js/tools.js"></script>
</head>  
<body>
    <header>
		<?php include_once("modules/nav/nav.php"); ?>
    </header>
	<main>
		<?php include_once("modules/nav/controllers/nav-control.php"); ?>
    </main>
    <footer class="noSelect"> 
        <p><?php echo "IP: ".YOUR_IP.", HOST: ".YOUR_HOST; ?></p>
        <p>&copy; Copyright <?php echo date("Y"); ?> emkrysto@gmail.com</p>
        <p>Timezone: <?php echo TIMEZONE; ?></p>
        <p>Version <?php echo SOFTWERE_VERSION; ?></p>
    </footer>
</body>
</html>