<?php
session_start();

if(isset($_SESSION['user_session']))
{
 header("Location: anasayfa.php");
}
include "security/db.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>HGK</title>
<meta charset="utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<style>

</style>
</head>
<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Giriş Yap</div>
				</div>     
				<div style="padding-top:30px" class="panel-body" >
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>     
						<form method="post" id="login-form" class="form-horizontal" role="form">   
							<div id="error">
							
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" type="text" class="form-control" name="username" value="" maxlength ="11" placeholder="T.C. Kimlik No">                                        
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input name="password" id="password" type="password" class="form-control" placeholder="Şifre">
							</div>
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
								  <button type="submit" class="btn btn-success" name="btn-login" id="btn-login">
									<span class="glyphicon glyphicon-log-in"></span> &nbsp; Giriş Yap
								  </button>
								  <a id="btn-visitor" href="#" class="btn btn-primary">Misafir Girişi</a>
								</div>
							</div>						
						</form>     
				</div>                     
            </div>  
        </div>
    </div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="js/script.js"></script>

<?php
	$db = null;
?>
</html>
