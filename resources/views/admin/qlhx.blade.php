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
    <div class="col-12 content">
            <div class="container">
                <h2 class="pt-1">DANH SÁCH HÃNG XE</h2>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-5 text-xs-left">
                        <input class="form-control" id="myInput" type="text" placeholder="Search..">                     
                    </div>
                    <div class="col-sm-7"></div>
                </div>
                <table class="table table-bordered table-striped table-responsive" id="mytable">
                    <colgroup>
                        <col width="10" span="1">
                        <col width="300" span="1">
                        <col width="200" span="1">
                        <col width="300" span="1">
                        <col width="150" span="1">
                        <col width="20" span="2">
                    </colgroup>
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>TenHangXe</th>    
                        <th>DienThoai</th>
                        <th>MoTa</th>
                        <th>NgayThem</th>
                        <th colspan="2"><a href="./qlhx_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
                    </tr>
                  </thead>
                  <tbody id="myTablebd">
                      @foreach ($ds_hang_xe as $hang_xe)
                        <tr>
                            <td>{{$hang_xe->IDHangXe}}</td>
                            <td>{{$hang_xe->TenHangXe}}</td>
                            <td>{{$hang_xe->DienThoai}}</td>
                            <td>{{$hang_xe->MoTa}}</td>
                            <td>{{$hang_xe->created_at}}</td>
                            <td><a href="./qlhx_edit.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="fas fa-edit"></i></button></a></td>
                            <td><a href=""><button class="btn btn-block btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Xoá"><i class="fas fa-trash-alt"></i></button></a></td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
                <div class="pagination pb-2">
                    <nav>
                        <ul class="pagination"></ul>
                    </nav>
                </div>    
              </div>
        </div>
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