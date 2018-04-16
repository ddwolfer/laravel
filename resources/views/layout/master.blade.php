<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')-珺翊股份有限公司 </title>
	<!--網頁標題左側顯示ICON-->
    <link rel="icon" href="images/junyi.ico" type="image/x-icon">
    <!--收藏夾顯示ICON-->
    <link rel="shortcut icon" href="images/junyi.ico" type="image/x-icon">

	<link rel="stylesheet" href="css/head.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/foot.css">
	<link rel="stylesheet" href="css/flexslider.css" />
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/photo.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
	<header>
		<div id="header">
			<div class="head_info">
				<div id="logo">
					<a href="/"><img src="images/LOGO.png" height= "130px" ></a>
				</div>
				<div id="menu">
					<ul>
						<li><a href="/about">關於珺翊</a></li>
						<li><a href="/BusinessItems">營業項目</a></li>
						<li><a href="/news">最新消息</a></li>
						<li><a href="/jobs">企業徵才</a></li>
						<li><a href="/performance">業務實績</a></li>
						<li><a href="/contact">聯絡我們</a></li>
					</ul> 
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="Dividers"></div>
	<div class="container">
		@yield('content')
	</div>
	<br>
	<div class="Dividers"></div>
	<footer>
		<div id="footer">
			<div id="footerCoInfo">
				<h1><a href="/"></a>珺翊股份有限公司</h1>
				<p>電話：04-23122085</p>
				<p>信箱：minghui1221@yahoo.com.tw</p>
				<p>地址：40353 台中市西區華美西街一段142號13樓-3</p>
			</div>

			<div class="Dividers2"></div>
			<div id="copyright">
				<p>2018 CopyRight© <a href="/">珺翊股份有限公司</a> 版權所有</p>
				<p>任何轉載、複製等利用，請預先取得本網站同意</p>
			</div>
		</div>
	</footer>
</body>
</html>