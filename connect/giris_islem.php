<?php
 session_start();
 require_once 'db.php';

 if(isset($_POST['btn-login']))
 {
  $username = trim($_POST['username']);
  $user_password = trim($_POST['password']);
  
  try
  { 
   $stmt = $db->prepare("SELECT * FROM iller WHERE YERADI =:username");
   $stmt->execute(array(":username"=>$username));
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $count = $stmt->rowCount();
   if($count < 1){
		echo "Kullanıcı kayıtlı değil.";
   }else{
	   if($row['PAFTA25']==$user_password){
		echo "ok"; // log in
		//$_SESSION['user_session'] = $row['user_id'];
		$_SESSION['user_session'] = "ORDU";
	   }else{
		    echo "Hatalı şifre."; // hata
	   }
   } 
  }
  catch(PDOException $e){
   echo $e->getMessage();
  }
 }

?>