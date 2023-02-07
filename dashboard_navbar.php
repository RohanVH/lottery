<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="dashboard.php"><?php echo PROJECT_NAME; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i>  Dashboard</a></li>
        <li class="active"><a href="sj.php"><i class=""></i> Single/Jodi</a></li>
        
        <li><a href="editTable.php"><i class="fa fa-book"></i>  Completed-Data</a></li>
        <li><a href="generate.php"><i class="fa fa-plus"></i>  Generate</a></li>
        <li><a href="update.php"><i class="fa fa-refresh"></i>  Update</a></li>
        <li><a href="cleardata.php"><i class="fa fa-trash"></i>  Clear Data</a></li>
        <li><a href="history.php"><i class="fa fa-trash"></i>  History Data</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog"></i> Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user.php">Add User</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="fa fa-user"></span> Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>