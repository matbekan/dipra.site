<?php
if(!empty($_GET['page'])) {
    $load_file = $_GET['page'];
} else {
    $load_file = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dipra</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	<link href="dist/photogallery.css" rel="stylesheet">
	
</head>
	
<body id="page-<?php echo $load_file; ?>">
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
	
    <div class="super_container">
        <?php include("pages/header.php"); ?>
        <?php include("pages/" . $load_file . ".php"); ?>
        <?php include("pages/footer.php"); ?>
    </div> 
	
	
	<!-- COMMON MODAL -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
			<!--Content-->
			<div class="modal-content">
				<div class="modal-body mb-0 p-0">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<!-- Put a blank video for have a black screen meanwhile new video appears -->
					<iframe class="embed-responsive-item" id="modalIframe" src="https://www.youtube.com/embed/XIMLoLxmTDw"
					allowfullscreen></iframe>
				</div>
				</div>
			</div>
			<!--/.Content-->
			</div>
		</div>
	
	
	
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>

	<script src="dist/photogallery.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

		<script>
			var x = document.getElementById("myAudio"); 

			function playAudio() { 
			  x.play(); 
			} 

			function pauseAudio() { 
			  x.pause(); 
			} 
		</script>
	<script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-xl-3 col-lg-2 col-md-4 col-sm-4",
          "hasModal" : true,
          "shortText" : false  
        });
      });
    </script>
	
	<script>

		$(document).ready(function(){

			/* Calls to class play-btn and get new url from clicked one and changes common modal with selected url */ 
			$('.play-btn').click(function(){
				var url = $(this).attr('data-url');
				$('#modalIframe').attr("src", url);
			});

			/* Put again blank video for transition, and makes previous video stop */
			$('#modal').on('hidden.bs.modal', function () {
				$('#modalIframe').attr("src", "https://www.youtube.com/embed/XIMLoLxmTDw");
			})

		});

	</script>

	
</body>

</html>
