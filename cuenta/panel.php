<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
</head>
<body>
<div>
  <article>
    <p> 
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
        nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
    </p>
  </article>
  <a href="logout.php"><button>Salir</button></a>
</div>
</body>
</html>
<?php
}else{
	echo '<script> window.location="index.php"; </script>';
}
?>