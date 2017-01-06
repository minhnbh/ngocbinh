<!DOCTYPE html>
<html>
<head>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="asset/dist/js/responsiveslides.min.js"></script>
	<script src="asset/js/carousel.js"></script>

	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/custom.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/font/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="asset/dist/css/font/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="asset/docs/examples/carousel/carousel.css">

	<title>Trang chủ</title>
</head>
<body>

<!-- Background after click menu -->
<div id="bg">

</div>
<!-- Header -->
<div class="row" id="header">
	<div class="col-xs-10 col-xs-offset-1" style="">
		<div class="row">
			<div class="col-lg-10 visible-lg" style="border-right: solid 0.5px grey; text-align: right;">
				<i class="fa fa-phone-square"></i>&nbsp;Hotline: 
				<font color="red">0963738402</font>&nbsp;&nbsp;/&nbsp;
				<font color="red">01692845815</font>
			</div>
			<div class="col-lg-2 visible-lg" style="text-align: right;">
				<i class="fa fa-user-circle"></i>&nbsp;&nbsp;Hi, Mr.Minh
			</div>
			<div class="col-xs-1 visible-xs visible-sm visible-md" style="padding: 0px;">
				<button id="category"><span class="glyphicon glyphicon-menu-hamburger category-icon" aria-hidden="true"></span></button>
			</div>
			<div class="col-xs-10 col-lg-12" id="logo">
				<img src="asset/img/LOGO.jpg">
			</div>
			<div class="col-xs-1 visible-xs visible-sm visible-md" style="padding: 0px;">
				
			</div>
		</div>

		
		<div class="row" id="cate">
			<div class="col-xs-12 menu" style="background-color: white">
			<br/>
				<div class="row">
					<div class="col-xs-12" style="text-align: right;">
						<b>Hi, Mr. Minh</b>
					</div>
				</div>
				<hr/>
				<div class="row menu-tab">
					<div class="col-xs-1">
						<i class="fa fa-info"></i>
					</div>
					<div class="col-xs-6">
						GIỚI THIỆU
					</div>
					<div class="col-xs-4 menu-tab-icon">
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
				<div class="row menu-tab">
					<div class="col-xs-1">
						<i class="fa fa-search-plus"></i>
					</div>
					<div class="col-xs-6">
						SẢN PHẨM
					</div>
					<div class="col-xs-4 menu-tab-icon">
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
				<div class="row menu-tab">
					<div class="col-xs-1">
						<i class="fa fa-id-card-o"></i>
					</div>
					<div class="col-xs-6">
						LIÊN HỆ
					</div>
					<div class="col-xs-4 menu-tab-icon">
						<i class="fa fa-angle-right"></i>
					</div>
				</div>
				<hr/>
				<div class="row menu-tab">
					<div class="col-xs-12">
						<i class="fa fa-phone"></i>&nbsp;<b>HOTLINE 1: <font color="red">0963738402</font></b>
					</div>
				</div>
				<div class="row menu-tab">
					<div class="col-xs-12">
						<i class="fa fa-phone"></i>&nbsp;<b>HOTLINE 1: <font color="red">01692845815</font></b>
					</div>
				</div>
				<hr/>
			</div>
		</div>
	</div>
</div>

<!-- Search box -->
<div class="row" id="search">
	<div class="col-xs-10 col-xs-offset-1 input-group">
		<!-- <span class="glyphicon glyphicon-search input-group-addon" aria-hidden="true"></span> -->
		<input type="text" placeholder="Search products" class="form-control"><span class="input-group-addon"><i class="fa fa-search"></i></span>
	</div>
</div>

<!-- Banner -->
<div class="row" style="background-color: white; padding-top: 20px">
<div class="col-lg-12" style="border-bottom: solid 0.1px grey; background-color: red">
	<div class="row">
		<div class="col-lg-3 col-lg-offset-1 visible-lg" style="padding-left: 0px; padding-right: 12px">
			<div style="width: 99%; background-color: #CA181F; padding: 10px 0px 10px 15px; color: white">
			Danh muc<i class="fa fa-angle-down" style="text-align: right;"></i>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-3 col-lg-offset-1 visible-lg" style="padding-left: 0px;">
	<ul class="list-group">
		<li class="list-group-item">Giới thiệu<span class="badge"><i class="fa fa-angle-right"></i></span></li>
		<li class="list-group-item">Sản phẩm<span class="badge"><i class="fa fa-angle-right"></i></span></li>
		<li class="list-group-item">Giới thiệu<span class="badge"><i class="fa fa-angle-right"></i></span></li>
	</ul>

</div>
<div id="carousel-example-generic" class="carousel slide banner col-lg-7" data-ride="carousel" style="height: auto; background-color: white; padding-left: 0px; padding-right: 0px;">
  	<!-- Indicators -->
	<ol class="carousel-indicators indicators">
	   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	   <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" id="picture" role="listbox">
	    <div class="item active">
	      	<img src="asset/img/slider1.jpg" alt="">
	      	<!-- <div class="carousel-caption">
	    	</div> -->
	    </div>
	    <div class="item">
	    	<img src="asset/img/slider2.jpg" alt="">
	      	<!-- <div class="carousel-caption">
	    	</div> -->
	    </div>
	    <div class="item">
	    	<img src="asset/img/slider3.jpg" alt="">
	      	<!-- <div class="carousel-caption">
	    	</div> -->
	    </div>
  	</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- Hot product -->
<div class="row m-t-20">
	<div class="col-xs-12 hot-product-title">
		<div class="row">
			<div class="col-xs-11 col-xs-offset-1">
				<h4><i class="fa fa-cubes"></i>&nbsp;&nbsp;&nbsp;SẢN PHẨM BÁN CHẠY</h4>
			</div>
		</div>
	</div>
	<div class="col-xs-12 hot-product">
		<div class="row">	
			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/C70-01.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR C70</b></h6>
						</div>
					</div>
					<div class="buy">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A50-01.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR A50 - KHE THOÁNG - LOẠI TỐT</b></h6>
						</div>
					</div>
					<div class="buy">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A49i-01.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR A49i</b></h6>
						</div>
					</div>
					<div class="buy">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CB.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR CB</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A7.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR A7</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A12.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR A12</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/AU500.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR AU500</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/NB803S.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR NB803S</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CTXT.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA ĐI XẾP TRƯỢT</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CSMQ.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA SỔ MỞ QUAY</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CDMC.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA ĐI MỘT CÁNH, CỬA RA BAN CÔNG, CỬA THÔNG PHÒNG</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/hoa.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>FULL DO NEWS</b></h6>
						</div>
					</div>
					<div class="buy">
							<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- highlight product -->
<div class="row m-t-10">
	<div class="col-xs-12 hot-product-title">
		<div class="row">
			<div class="col-xs-9 col-xs-offset-1">
				<h4><i class="fa fa-cubes"></i>&nbsp;&nbsp;&nbsp;SẢN PHẨM BÁN CHẠY</h4>
			</div>
		</div>
	</div>
	<div class="col-xs-12 hot-product">
		<div class="row">
			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/S50i-03.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR S50i</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A48i-01.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR A48i</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A49i-01.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR A49i</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CB.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA CUỐN AUSTDOOR CB</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/A12.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR A12</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/NB501.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR NB 501</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/NB601.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR NB 601</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/nb802.png" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>LƯU ĐIỆN CỬA CUỐN AUSTDOOR NB 802</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/raycuacuon.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>RAY CỬA CUỐN</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CSMT.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA SỔ MỞ TRƯỢT</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/CDMC.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>CỬA ĐI MỘT CÁNH, CỬA RA BAN CÔNG, CỬA THÔNG PHÒNG</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-5 col-lg-3 tab">
				<div class="row product">
					<div class="col-xs-5">
						<img src="asset/img/hoa.jpg" class="thumb">
					</div>
					<div class="col-xs-7">
						<div class="product-title">
							<h6><b>FULL DO NEWS</b></h6>
						</div>
					</div>
					<div class="buy">
						<p><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Mua hàng</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 hot-product-title">
		<div class="row">
			<div class="col-xs-6 hotline-title">
				<i class="fa fa-phone"></i>&nbsp;<b>HOTLINE 1:</b>
			</div>
			<div class="col-xs-6" id="hotline">
				<b>0963738402</b>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 hotline-title">
				<i class="fa fa-phone"></i>&nbsp;<b>HOTLINE 2:</b>
			</div>
			<div class="col-xs-6" id="hotline">
				<b>01692845815</b>
			</div>
		</div>
		<br/>
	</div>
</div>


<script>
	  $(function() {
	    $(".rslides").responsiveSlides();
	  });

	  $(".rslides").responsiveSlides({
	  auto: true,             // Boolean: Animate automatically, true or false
	  speed: 500,            // Integer: Speed of the transition, in milliseconds
	  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
	  pager: false,           // Boolean: Show pager, true or false
	  nav: false,             // Boolean: Show navigation, true or false
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
	  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
	  manualControls: "",     // Selector: Declare custom pager navigation
	  namespace: "rslides",   // String: Change the default namespace used
	  before: function(){},   // Function: Before callback
	  after: function(){}     // Function: After callback
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#category').click(function(){
			$('#cate').fadeToggle();
			$('#bg').fadeIn();
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#bg').click(function(){
			$('#cate').fadeOut();
			$('#bg').fadeOut();
		})
	});
</script>

</body>

</html>