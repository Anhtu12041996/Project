<!doctype html>
<html lang="en">
<head>
	<base href="{{asset('public/layout/frontend')}}/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
	<style>
		.beta-products-list .sport-title::before {
			border-bottom: 40px solid #fff;
			border-left: 20px solid transparent;
			content: '';
			width: 20px;
			height: 100%;
			position: absolute;
			right: 0;
			z-index: 9;
		}
		.sport-title {
		    background: #3a215d!important;
		    height: 38px;
		    padding-left: 0!important;
	    }
	    .sport-title svg:not(:root) {
		    margin-top: 4px;
		    height: 26px;
		    float: left;
		}
		.sport-title h3 {
		    color: #fff;
		    text-transform: uppercase;
		    display: inline;
		    vertical-align: middle;
		    font-family: 'Sharnay';
		    font-size: 24px;
		    font-weight: normal;
		    line-height: normal;
		}
		.sport-title h3 {
		    color: #daff00!important;
		    font-size: 20px;
		    line-height: 34px;
		}
		.sport-title svg path {
		    fill: #daff00;
		    height: 26px;
		    margin: 4px 3px 6px 3px;
		}
		svg:not(:root) {
		    overflow: hidden;
		}
		.no-gutter [class*='col-'] {
		    padding-right: 0!important;
		    
		}
		.viewmore {
		    font-size: 15px;
		    text-transform: uppercase;
		    color: #3a215d;
		    margin-top: 15px;
		    display: block;
		}
		.single-item-header {
		    border: 1px solid #ccc;
		}
		.banner {
			height: 300px !important;
		}
	</style>
</head>
<body>

	@include('frontend.header')
	<div class="rev-slider">
		@yield('content')
	</div> <!-- .container -->

	@include('frontend.footer')	


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
		$(document).ready(function($) {    
			$(window).scroll(function(){
				if($(this).scrollTop()>150){
					$(".header-bottom").addClass('fixNav')
				}else{
					$(".header-bottom").removeClass('fixNav')
				}}
				)
		})
	</script>
</body>
</html>
