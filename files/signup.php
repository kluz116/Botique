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
      
        
        <div class="col-md-6">




        </div>
        <div class="col-md-6">
          
          <div class="login-panel panel panel-allan">
        <div class="panel-heading">
              <h3 class="panel-title"> Sign Up With Us Before You Book...</h3>
          </div>
               <div class="panel-body">

                  <form method="post" action="" class="form-horizontal" role="form">
                    <?php addAdmin() ?>
                  
                  <div class="form-group has-feedback has-success">
                      <div class="col-sm-6">
                            <input type="text" placeholder="FirstName" name="lastname" class="form-control" /><br>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="LastName" name="firstname" class="form-control"/><br>
                          </div>  
                            <div class="col-sm-5">
                            <input type="tel" placeholder="Phone" name="phone" class="form-control" /><br>
                            </div>
                            <div class="col-sm-8">
                            <input type="email" placeholder="Email" name="email" class="form-control" /><br>
                            </div>
                            <div class="col-sm-6">
                            <input type="text" placeholder="UserName" name="username" class="form-control" /><br>
                            </div>
                            <div class="col-sm-6">
                            <input type="password" placeholder="PassWord" name="password" class="form-control" /><br><br>
                            </div>
                            <div class="col-sm-12">
                            <input type="submit" class="btn btn-sm btn-primary" value="Register" name="users" />
                            </div>
                            
                    </div>
                    
                    
                    </form>
              
              </div>
              </div>
        </div>


    </div>
  </div>      
</body>
</html>
