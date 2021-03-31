<?php
if(isset($_COOKIE['user']) && !isset($_SESSION['user'])){
	header('location: user/rememberLogin');
}
?>

<html lang="en">
<head>
	<title> Mobile Shop - Genuine phone cheap! </title>
	<meta charset="utf-8">
	<base href="/WBH_MVC/">
	<!-- <link rel="SHORTCUT ICON"  href=> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="public/css/style.css">

	<!-- File css -> file js -> file jquery -->
	<!-- Put script after jquery -->
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
	<script src="public/jquery/jquery-latest.js"></script>
	<script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="public/script/script.js"></script>

	<!-- font used in this site -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="public/animate.css">

</head>
<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
<body>
	<header id='header'>
		<a href=""><img src="public/images/logo.png"><h2 class="logo">Mobile Shop</h2></a>
		<ul class="header-menu">
			<?php
			if((!isset($_SESSION['user']))){ ?>
			<!-- if(($_SESSION['user']) == ""){ ?> -->
			<li><a href="index/signin" id="s-s" data-stt='nosignin'>Đăng nhập</a><div class='mn-ef'></div></li>
			<li><a href="index/signup">Đăng ký</a><div class='mn-ef'></div></li>
			<?php } else { ?>
			<li><a onclick="$('#user-setting').toggle()" id="s-s">Chào <?php echo $_SESSION['user']['ten'] ?></a><div class='mn-ef'></div></li>
			<div id='user-setting'>
				<ul>
					<a href="user/logout"><li>Đăng xuất</li></a>
					<a href="user/viewinfo"><li onclick="$('#user-setting').toggle()">Thông tin tài khoản</li></a>
					<a href="user/vieweditpassword"><li>Đổi mật khẩu</li></a>
				</ul>
			</div>
			<?php }
			?>
			<li><a href="client/viewcart"><i class="glyphicon glyphicon-shopping-cart"></i> Giỏ hàng</a><div class="mn-ef"></div></li>
		</ul>
		<div class="header-detail">
			<p>217 Mai Dich, Cau Giay, Ha Noi, Việt Nam<br>
				<i>Delivery anytime, anywhere</i>
			</p>
		</div>
	</header>
	<nav class="navbar navbar-default" role="navigation" id="nav">
		<div class="container-fluid-slidebar">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="">Mobile Shop</a>
				<div id="custom-search-input">
					<div class="input-group col-md-12" style="background-color: white;">
						<input type="text" class="form-control input-lg" placeholder="Bạn tìm gì?" id='src-v' />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown menu-name">
						<a class="dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Danh mục sản phẩm <b class="caret"></b></a>
						<ul class="dropdown-menu">
                            <li><a href="product/List/All">Tất cả sản phẩm</a></li>
							<?php
							require_once 'vendor/Model.php';
							require_once 'models/admin/categoryModel.php';
							$md = new categoryModel;
							$data = $md->getAllCtgrs();
							for ($i=0; $i < count($data); $i++) { 
								$shortname = preg_replace('/\s+/', '', ucfirst($data[$i]['tendm']));
								?>
								<li><a href="product/List/<?php echo $shortname ?>"><?php echo $data[$i]['tendm'] ?> (<?php echo $data[$i]['xuatsu'] ?>)</a></li>
							<?php } ?>
                            <li class="dropdown-submenu">
                                <a class="test" href="#">Độc quyền<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Đồng hồ cổ &nbsp;</a></li>
                                </ul>
                            </li>
                        </ul>
					</li>
					<li class="menu-name" id="dgg"><a href="product/List/OnSale">Đang giảm giá</a></li>
					<li class="menu-name" id="spm"><a href="product/List/Newest">Đồng hồ nam</a></li>
					<li class="menu-name" id="mntq"><a href="product/List/BestSelling">Đồng hồ nữ</a></li>
				</ul>
				<div style="cursor: pointer;"><a href="client/viewcart" style="color: yellow"><i class="glyphicon glyphicon-shopping-cart navbar-right btn-lg" id="cart_count"> 
					<?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);} else echo "0"; ?>
				</i></a></div>
				<div class="navbar-form navbar-right searchbox-desktop">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Bạn tìm gì?" id='srch-val'>
					</div>
					<span class="btn btn-primary" id="searchBtn">Tìm</span>
				</div>
			</div>
		</div>
	</nav>

    <div>
        <div class="col-sm-3">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Dành cho thể thao</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xu hướng hiện đại &nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Apple Watch</a></li>
                                    <li><a href="#">Xiaomi Miband</a></li>
                                    <li><a href="#">Samsung Fit</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Đồng hồ đôi</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-nav">
                    <a href="http://landofcoder.com"><img class="advertiseMagento1" src="../WBH_MVC/images/magento2.png" alt="advertise"></a>
                </div>
                <div class="sidebar-nav">
                    <a href="https://landofcoder.com/magento-2-order-approval.html"><img class="advertiseMagento2" src="../WBH_MVC/images/magento2orderapproval.png" alt="advertise"></a>
                </div>
            </div>
        </div>
        <!-- show list product-->
        <div id="bodyContainer" >
            <?php echo $content; ?>
        </div>
    </div>

	<div class="modal fade" id="modal-id" data-remote="" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content" id="modal-sanpham">
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container-fluid-2">
			<div class="row">
				<div class="col-lg-8" style="text-align: center; padding: 20px 0;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7703616754943!2d105.7716093149328!3d21.041872485991266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c91bd56fd5%3A0x9ea2c9acd810f74!2zTmfDtSAyMTcgTWFpIEThu4tjaCwgTWFpIEThu4tjaCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1616953075103!5m2!1svi!2s" width="300" height="300" frameborder="0" style="border:0" allowfullscreen id="maps"></iframe>
				</div>
				<div class="col-lg-4" id="contact">
					<h3>Contact Us</h3>
					<i class="glyphicon glyphicon-map-marker"></i><span> 217 Mai Dich, Cau Giay, Ha Noi</span><br>
					<i class="glyphicon glyphicon-earphone"></i><span> 0352479890</span><br>
					<i class="glyphicon glyphicon-envelope"></i><span> MobileShop@gmail.com</span><br>
<!--					<h4 style="line-height: 26px">Đăng ký email để nhận nhiều thông tin hơn từ chúng tôi:</h4>-->
<!--					<form action="" method="POST" class="form-inline" role="form">-->
<!--						<div class="form-group">-->
<!--							<label class="sr-only" for="">label</label>-->
<!--							<input type="email" class="form-control" id="" placeholder="your_email@example.com">-->
<!--						</div>-->
<!--						<span class="btn btn-primary" onclick="alert('Bạn sẽ nhận được thông báo của chúng tôi khi có ưu đãi mới!')">Gửi</span>-->
<!--					</form>-->
				</div>
				<div class="col-lg-12" id="copyright-txt">
					<b>All right reverse, &#169; copyright of MobileShop.com</b>
				</div>
			</div>
		</div>
	</footer>
	<div class="goTop">
		<a href="#header">
			<h5 style="color: white" class="glyphicon glyphicon-menu-up"></h5>
		</a>
	</div>
</body>
</html>

