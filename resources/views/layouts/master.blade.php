<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<div id="spinner"></div>

	<div class="wraper">
		@include('includes.navbar')	
		@include('includes.banner')			
		@yield('PageContent')
		@include('includes.footer')
	</div>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
    <script type="text/javascript">

      $(window).load(function() {

        $('#slider').nivoSlider({

         effect: 'fade',

		                 // For box animations

                     pauseTime: 4000,  

                     pauseOnHover: false      

                   });

      });

    </script>
</body>
</html>
