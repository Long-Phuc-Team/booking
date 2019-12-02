<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket Online</title>
    <base href="{{asset('')}}">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="assets/styles/admin.css">
</head>
<body>
	<div class="menu">
		<nav class="navbar navbar-expand-sm">
			<div class="container-fluid">
				<div class="row">
					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#menutren" aria-controls="collapsibleNavId"
						aria-expanded="false" aria-label="Toggle navigation"></button>
					<div class="collapse navbar-collapse" id="menutren">
							<a class="navbar-brand" href="#"><img src="assets/img/lg-white.png" alt=""></a>
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="./admin.html">Trang Chủ</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./qlhx.html">Quản Lý Hãng Xe</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./qlx.html">quản lý xe</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./qlt.html">quản lý tuyến</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./qllt.html">quản lý lịch trình</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./qlkh.html">quản lý khách hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./qlvx.html">quản lý vé xe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./qlttdvx.html">quản lý trạng thái đặt vé</a>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
    </div>
    
    <!-- content -->
    @yield('content')
    <!-- end content -->
       
    <!-- footer -->
	<div class="footerbot">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-4"><p>© 2019-2025 xeca.vn All Rights Reserved</p></div>
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-sm-2 col-xs-2"><img src="assets/img/dadangkybct.png" alt=""></div>
                <div class="col-sm-2 col-xs-2"><img src="assets/img/bo-cong-thuong.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- end footer -->   
	<script src="assets/bootstrap/bootstrap.js"></script>
    <script src="assets/fontawesome/fontawesome.js"></script>
    <script src="assets/fontawesome/solid.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Search Form -->
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTablebd tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>
        
        
</body>
</html>