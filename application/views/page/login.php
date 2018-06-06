<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<?php echo $css; ?>
</head>
<body>
	<?php echo $header; ?>

	<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://i0.kym-cdn.com/photos/images/newsfeed/000/674/934/422.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://i.ytimg.com/vi/Doxj7ACZSe4/hqdefault.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>	
    </header>

	<!-- Modal -->

	<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Login</h1>
                </div>
                <form class="form-horizontal" role="form" action="<?php echo base_url();?>/index.php/BookStoreController/authentication" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label">Username</label>
                            </div>
                            <div class="col-sm-9">
                                <!-- NAME = email -->
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label class="control-label">Password</label>
                            </div>
                            <div class="col-sm-9">
                                <!-- NAME = password -->
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <!-- SIGN IN -->
                    <div class="modal-footer">
                        <input type="submit" name="signIn" class="btn btn-primary" value="Login"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

	<?php echo $footer; ?>

</body>
<?php echo $js; ?>
<script type="text/javascript">
	 $(document).ready(function() {
        $('#myModal').modal({
            backdrop: 'static',
            show: false,
            keyboard: true // to prevent closing with Esc button (if you want this too)
    	})
    });

	 function showModalLogin(){
		$('#myModal').modal({
		    backdrop: 'static',
		    show: 'true',
		    keyboard: true  // to prevent closing with Esc button (if you want this too)
		});
	}
</script>
</html>