<!-- <header>
<nav class="nav red-theme-navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Book Store</a>
		</div>
			
		<ul class="nav navbar-nav navbar-right">
			<li data-toggle=""><a href="#" class="menu-navbar"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
</nav>
</header> -->

<!--===================
Header
=======================-->
<header class="header">
  <nav class="navbar navbar-toggleable-md red-theme-navbar navbar-light pt-0 pb-0 ">
    <!-- ini ntar diatur biar pas blm login ga muncul -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- p-0 -->
    <a class="navbar-brand p-4 mr-0" href="#"><img src="http://via.placeholder.com/61x14"></a>
    <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
      <li class="nav-item dropdown notifications-menu">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o"></i>
          <span class="label label-warning bg-warning">10</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <ul class="dropdown-menu-over list-unstyled">
            <li class="header-ul text-center">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu list-unstyled">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                    page and may cause design problems
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> 5 new members joined
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> You changed your username
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer-ul text-center"><a href="#">View all</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item dropdown  user-menu">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
          <span class="hidden-xs">Admin Pabrik</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</header>
