<?php

require "connection.php";
require "config.inc.php";
if(!(myAdmin())){

  header("Location:login.php");
  exit();
}

?>



<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="..//bootstrap-3.1.1/dist/css/bootstrap.css"/>
<link href="../social-buttons/social-buttons.css" rel="stylesheet"/>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet"/>

</head>
<style type="text/css">
  body{
    text-align: center;
  }


</style>

<body>


<div class="col-md-6">
  

<div class="row">
   <div class="login-panel panel panel-info">
        <div class="panel-heading">
              <h3 class="panel-title">Add Pants Available</h3>
          </div>
               <div class="panel-body">
                <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                  
                      <?php

                        AddPants()

                      ?>
              
                  </header>
                  <div class="body">
                    <form method="post" action=""  enctype="multipart/form-data">
                  
                      <input type="text" name="botique_name" class="form-control" placeholder="Heading">
                      <input type="file" name="botique_image" class="form-control" /><br>
                      <input type="file" name="image" class="form-control" /><br>
                      <textarea id="ckeditor" class="ckeditor" name="details"></textarea>
                      <div class="form-actions no-margin-bottom" id="cleditorForm"><br>
                        <input type="submit" value="Add Pants" class="btn btn-allan btn-sm" name="pants">
                      </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          
        </div>
</div>


</div>

<div class="row">
        <div class="login-panel panel panel-info">
        <div class="panel-heading">
              <h3 class="panel-title">Add Dresses Available</h3>
          </div>
               <div class="panel-body">
                <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                    <?php

                      AddDress()
                    ?>

              
                  </header>
                  <div class="body">
                    <form method="post" action=""  enctype="multipart/form-data">
                  
                      <input type="text" name="botique_name" class="form-control" placeholder="Heading">
                      <input type="file" name="botique_image" class="form-control" /><br>
                      <input type="file" name="image" class="form-control" /><br>
                      <textarea id="ckeditor" class="ckeditor" name="details"></textarea>
                      <div class="form-actions no-margin-bottom" id="cleditorForm">
                        <input type="submit" value="Submit" class="btn btn-primary" name="adddresses">
                      </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          
        </div>
</div>

</div>

</div>

<div class="col-md-6">
        <div class="row">
        <div class="login-panel panel panel-info">
        <div class="panel-heading">
              <h3 class="panel-title">Add Tops Available</h3>
          </div>
               <div class="panel-body">
                <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                  

              <?php


                AddTops()
              ?>
                  </header>
                  <div class="body">
                    <form method="post" action=""  enctype="multipart/form-data">
                  
                      <input type="text" name="botique_name" class="form-control" placeholder="Heading">
                      <input type="file" name="botique_image" class="form-control" /><br>
                      <input type="file" name="image" class="form-control" /><br>
                      <textarea id="ckeditor" class="ckeditor" name="details"></textarea>
                      <div class="form-actions no-margin-bottom" id="cleditorForm">
                        <input type="submit" value="Submit" class="btn btn-primary" name="tops">
                      </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          
        </div>
</div>

          
        </div>

        <div class="row">
           <div class="login-panel panel panel-info">
        <div class="panel-heading">
              <h3 class="panel-title">Add Shoes Available</h3>
          </div>
               <div class="panel-body">
                <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header>
                  <?php

                    AddShoes()
                  ?>

              
                  </header>
                  <div class="body">
                    <form method="post" action=""  enctype="multipart/form-data">
                    
                      <input type="text" name="botique_name" class="form-control" placeholder="Heading">
                      <input type="file" name="botique_image" class="form-control" /><br>
                      <input type="file" name="image" class="form-control" /><br>
                      <textarea id="ckeditor" class="ckeditor" name="details"></textarea>
                      <div class="form-actions no-margin-bottom" id="cleditorForm">
                        <input type="submit" value="Submit" class="btn btn-primary" name="shoes">
                      </div>
                    </form>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          
        </div>
</div>
        </div>

</div>



<script src="../lib/jquery/jquery-1.11.0.js" type="text/javascript"></script>
<!-- Screenfull -->
    <script src="../assets/lib/screenfull/screenfull.js"></script>

    <!-- Metis core scripts -->
    <script src="../assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <script src="../assets/js/style-switcher.min.js"></script>
    <!-- Screenfull -->
    <script src="../assets/lib/screenfull/screenfull.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../assets/lib/ckeditor/ckeditor.js"></script>
    <script src="../assets/lib/pagedown-bootstrap/js/jquery.pagedown-bootstrap.combined.min.js"></script>
    <script src="../assets/lib/epiceditor/js/epiceditor.min.js"></script>
    <script>
      $(function() {
        formWysiwyg();
      });
    </script>

    <!-- Metis core scripts -->
    <script src="../assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <script src="../assets/js/style-switcher.min.js"></script>


</body>

</html>