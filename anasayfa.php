<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}

include_once 'security/db.php';

$stmt = $db->prepare("SELECT * FROM iller WHERE YERADI =:username");
$stmt->execute(array(":username"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HGK</title>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
</head>

<body>

<div class="container">
  <div class='alert alert-success'>
	   <button class='close' data-dismiss='alert'>&times;</button>
	   <strong>Enlem : <?php echo $row['COGBOYLAM']; ?></strong>  
   </div>
   <a href="cikis.php" class="btn btn-danger">Çıkış Yap</a>
</div>

</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>