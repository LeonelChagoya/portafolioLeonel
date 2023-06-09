<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<?php require("styles/homeCss.php"); ?>
	
</head>
<body>
<div><?php require("components/nav.php");?></div>
<div class="main">
	
	<?php require("components/sidebarLeft.php");?>
  <!-- components react -->
  <div id="main-customer" class="subMain"></div>
</div> 
  <!-- javacript -->
<?php  require("js/scriptNavbar.php"); ?>
<script src="/dist/Customer/index.js" charset="utf-8"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>