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
<div class="container" style="width: 98%">
<div id="bg">

</div>

<div id="cate" class="row">
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

		
		
	</div>
</div>

<!-- Search box -->
<div class="row visible-xs visible-sm visible-md" id="search">
	<div class="col-xs-10 col-xs-offset-1 input-group">
		<input type="text" placeholder="Search products" class="form-control">
		<span class="input-group-addon"><i class="fa fa-search"></i></span>
	</div>
</div>

<!-- Banner -->
<div class="row" style="background-color: white; padding-top: 20px">
	<div class="col-lg-12 visible-lg" style="border-bottom: solid 0.1px grey; background-color: red; padding: 0px">
		<!-- <div class="row"> -->
		<div class="col-lg-4" style="padding-right: 0px; padding-left: 35px;">
			<div class="row category-title-large">
				<div class="col-lg-6" style="padding-left: 50px;">
					DANH MỤC
				</div>
				<div class="col-lg-6" style="text-align: right;">
					<i class="fa fa-angle-down"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-lg-offset-8 input-group" style="padding-top: 2px; padding-right: 15px;">
			<input type="text" placeholder="Search products" class="form-control"><span class="input-group-addon"><i class="fa fa-search"></i>&nbsp;Search</span>
		</div>
		<!-- </div> -->
	</div>
	
</div>

<div class="row" style="background-color: white">
<div class="col-lg-4 visible-lg" id="category-large" style="padding-left: 20px;">
	<ul class="list-group">
		<li class="list-group-item">
			<a href="#">
			<div class="row">
				<div class="col-lg-2 category-icon-large"><i class="fa fa-info"></i></div>
				<div class="col-lg-8">Giới thiệu</div>
				<div class="col-lg-2 category-icon-large"><i class="fa fa-angle-right"></i></div>
			</div>
			</a>
		</li>
		<li class="list-group-item">
			<a href="#">
			<div class="row">
				<div class="col-lg-2 category-icon-large"><i class="fa fa-cubes"></i></div>
				<div class="col-lg-8">Sản phẩm</div>
				<div class="col-lg-2 category-icon-large"><i class="fa fa-angle-right"></i></div>
			</div>
			</a>
		</li>
		<li class="list-group-item">
			<a href="#">
			<div class="row">
				<div class="col-lg-2 category-icon-large"><i class="fa fa-id-card-o"></i></div>
				<div class="col-lg-8">Liên hệ</div>
				<div class="col-lg-2 category-icon-large"><i class="fa fa-angle-right"></i></div>
			</div>
			</a>
		</li>
	</ul>
</div>

<div id="carousel-example-generic" class="carousel slide banner col-lg-8" data-ride="carousel" style="height: auto;background-color: white; padding-left: 0px; padding-right: 0px;">
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
	<div class="col-xs-12 col-sm-offset-0 hot-product-title">
		<div class="row">
			<div class="col-xs-11 col-xs-offset-1">
				<h4><i class="fa fa-cubes"></i>&nbsp;&nbsp;&nbsp;SẢN PHẨM BÁN CHẠY</h4>
			</div>
		</div>
	</div>
	<div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 hot-product">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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
	<div class="col-xs-12 col-sm-12 col-sm-offset-0 hot-product">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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

			<div class="col-xs-12 col-sm-6 col-sm-offset-0 col-lg-4 col-lg-offset-0 tab">
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
	<div class="col-xs-12 footer">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 col-xs-12">
				<h4><font color="red">CÔNG TY CỬA CUỐN NGỌC BÌNH</font><br/>
				60/18 Lâm Văn Bền, Quận 7, TPHCM</h4>
			</div>
			<div class="col-md-4 col-md-offset-2 col-xs-12">
				<i class="fa fa-phone"></i>&nbsp;HOTLINE: <font color="red">0963 738 402 / 0169 284 5815</font><br/>
				Link with us: 
				<i class="fa fa-facebook social-icon icon-facebook"></i>
			</div>
		</div>
	</div>
</div>

<!-- container -->
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