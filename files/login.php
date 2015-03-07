<br><br><br>


<?php require "config.inc.php"; ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="..//bootstrap-3.1.1/dist/css/bootstrap.css">
<title>Botique Application</title>
<style type="text/css">
  body{
    text-align: center;
  }
</style>
</head>
<body>
	<div class="container">
    <div class="modal-header"></div>
    <div class="modal-body">
      
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="login-panel panel panel-allan">
              <div class="panel-heading"><h3 class="panel-title">Welcome To Botique Application</h3></div>
                <div class="panel-body">


                      <form action="" method="post">
                      <?php LoginAdmin() ?>
                             <input type="text" name="username" class="form-control" placeholder="UserName" /><br>
                            <input type="password" name="password" class="form-control" placeholder="PassWord" /><br><br><br><br>
                            <input type="submit" class="btn btn-success " value="Login"  />

                      </form>
              </div>
            </div>




                </div>
        <div class="col-md-3"></div>
    </div>
  </div>      
</body>
</html>
