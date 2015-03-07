<?php
require'connection.php';
require'config.inc.php';


if(!(myAdmin())){

  header("Location:login.php");
  exit();
}

$name="";
if($_SESSION['username']){

  $name = $_SESSION['username'];



}

?>




<!doctype html>
<html class="no-js">
  <head>
    <meta charset="UTF-8">
    <title>Metis</title>

    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../bootstrap-3.1.1/dist/css/bootstrap.css" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css"/>

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="../assets/css/main.min.css"/>

    <!-- Metis Theme stylesheet -->
    <link rel="stylesheet" href="../assets/css/theme.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="assets/lib/html5shiv/html5shiv.js"></script>
        <script src="assets/lib/respond/respond.min.js"></script>
        <![endif]-->

    <!--Modernizr 2.7.2-->
    <script src="../assets/lib/modernizr/modernizr.min.js"></script>
  </head>
  <body>
    <div id="wrap">
      <div id="top">

        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
              </button>
              <a href="index.html" class="navbar-brand">
                <img src="../assets/img/logo.png" alt="">
              </a> 
            </header>
            <div class="topnav">
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                  <i class="glyphicon glyphicon-fullscreen"></i>
                </a> 
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-warning">5</span> 
                </a> 
                <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip" class="btn btn-default btn-sm">
                  <i class="fa fa-comments"></i>
                  <span class="label label-danger">4</span> 
                </a> 
                <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                  <i class="fa fa-question"></i>
                </a> 
              </div>
              <div class="btn-group">
                
                                                               <?php
if(myAdmin()){
  
  echo"<a href='logout.php' data-toggle='tooltip' data-original-title='Logout' data-placement='bottom' class='btn btn-metis-1 btn-sm'>";
  
  }else{
    header("Location:login.php");
    
    }

?>
                 <i class="fa fa-sign-out"></i>
               <?php echo"</a>";?>  
              </div>
              <div class="btn-group">
                <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                  <i class="fa fa-bars"></i>
                </a> 
                <a data-placement="bottom" data-original-title="Show / Hide Right" data-toggle="tooltip" class="btn btn-default btn-sm toggle-right"> <span class="glyphicon glyphicon-comment"></span>  </a> 
              </div>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

              <!-- .nav -->
              !-- /.nav -->
            </div>
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar -->
        <header class="head">
          <div class="search-bar">
            <form class="main-search" action="">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Live Search ...">
                <span class="input-group-btn">
            <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span> 
              </div>
            </form><!-- /.main-search -->
          </div><!-- /.search-bar -->
          <div class="main-bar">
            <h3>
              <i class="fa fa-home"></i>Metis</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/avatar.gif"/>
              <span class="label label-danger user-label">16</span> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading">Archie</h5>
              <ul class="list-unstyled user-info">
                <li> <a href="">Administrator</a>  </li>
                <li>Last Access :
                  <br>
                  <small>
                    <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- #menu -->
        <ul id="menu" class="">
          <li class="nav-header">Menu</li>
          <li class="nav-divider"></li>
          <li class="">
            <a href="dashboard.html">
              <i class="fa fa-dashboard"></i><span class="link-title">Dashboard</span> 
            </a> 
          </li>
          
          <li>
            <a href="signup.php">
              <i class="fa fa-table"></i>
              <span class="link-title">Sign Up administrator</span> 
            </a> 
          </li>
          <li>
            <a href="managesite.php">
              <i class="fa fa-file"></i>
              <span class="link-title">
      Manage Botique App Content
          </span> 
            </a> 
          </li>
          <li>
            <a href="EditHouses.php">
              <i class="fa fa-font"></i>
              <span class="link-title">
            Edit Mobile Administrator
          </span>  
            </a> 
          </li>
         
          <li>
            <a href="EditApartments.php">
              <i class="fa fa fa-bar-chart-o"></i>
              <span class="link-title">
            Edit Computers Store
          </span> 
            </a> 
          </li>
          <li>
            <a href="EditOffices.php">
              <i class="fa fa-calendar"></i>
              <span class="link-title">
            Edit EditAccessories Store
          </span> 
            </a> 
          </li>
          <li>
            <a href="grid.html">
              <i class="fa fa-columns"></i>
              <span class="link-title">
    Edit Fixtures And Results
    </span> 
            </a> 
          </li>
          <li>
            <a href="EditSite.php">
              <i class="fa fa-square-o"></i>
              <span class="link-title">
    Edit Site
    </span> 
            </a> 
          </li>
          <li class="nav-divider"></li>
          <li>
            <a href="soccergistadmin.php">
              <i class="fa fa-sign-in"></i>
              <span class="link-title">
    View WebSite
    </span> 
            </a> 
          </li>
          <li>
            <a href="index.php">
              <i class="fa fa-sign-in"></i>
              <span class="link-title">
    View WebSite
    </span> 
            </a> 
          </li>
          
          </ul><!-- /#menu -->
      </div><!-- /#left -->
      <div id="content">
        <div class="outer">
          <div class="inner">
            <div class="col-lg-12">
              
              <blockquote>
                <p>Welcome To OneSixteen Inc</p>


                


              </blockquote>
              
            </div>
          </div><!-- /.inner -->
        </div><!-- /.outer -->
      </div><!-- /#content -->
      <div id="right">
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Warning!</strong>  Best check yo self, you're not looking too good.
        </div>

        <!-- .well well-small -->
        <div class="well well-small dark">
          <ul class="list-unstyled">
            <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span> 
            </li>
            <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span> 
            </li>
            <li>Popularity <span class="dynamicbar pull-right">Loading..</span> 
            </li>
            <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span> 
            </li>
          </ul>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <button class="btn btn-block">Default</button>
          <button class="btn btn-primary btn-block">Primary</button>
          <button class="btn btn-info btn-block">Info</button>
          <button class="btn btn-success btn-block">Success</button>
          <button class="btn btn-danger btn-block">Danger</button>
          <button class="btn btn-warning btn-block">Warning</button>
          <button class="btn btn-inverse btn-block">Inverse</button>
          <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
          <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
          <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
          <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
          <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
          <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
        </div><!-- /.well well-small -->

        <!-- .well well-small -->
        <div class="well well-small dark">
          <span>Default</span> <span class="pull-right"><small>20%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-info" style="width: 20%"></div>
          </div>
          <span>Success</span> <span class="pull-right"><small>40%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-success" style="width: 40%"></div>
          </div>
          <span>warning</span> <span class="pull-right"><small>60%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
          </div>
          <span>Danger</span> <span class="pull-right"><small>80%</small> </span> 
          <div class="progress xs">
            <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
          </div>
        </div>
      </div><!-- /#right -->
    </div><!-- /#wrap -->
    <footer id="footer">
      <p>2014 &copy; One Sixteen Football</p>
    </footer><!-- /#footer -->

    <!-- #helpModal -->
    <div id="helpModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal --><!-- /#helpModal -->

    <!--jQuery 2.1.0 -->
    <script src="../assets/lib/jquery/jquery.min.js"></script>

    <!--Bootstrap -->
    <script src="../assets/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Screenfull -->
    <script src="../assets/lib/screenfull/screenfull.js"></script>

    <!-- Metis core scripts -->
    <script src="../assets/js/main.min.js"></script>

    <!--For Demo Only. Not required -->
    <script src="../assets/js/style-switcher.min.js"></script>
  </body>
</html>