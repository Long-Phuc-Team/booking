@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12 content">
        <div class="container">
            <h2 class="pt-1">DANH SÁCH KHÁCH HÀNG</h2>
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
                    <col width="180" span="1">
                    <col width="200" span="1">
                    <col width="180" span="1">
                    <col width="250" span="1">
                    <!-- <col width="20" span="2"> -->
                </colgroup>
              <thead>
                <tr>
                    <th>ID</th>
                    <th>TenKhachHang</th>
                    <th>DienThoai</th>      
                    <th>Email</th>
                    <th>DiemDon</th>
                    <th>GhiChu</th>
                </tr>
              </thead>
              <tbody id="myTablebd">
                  @foreach ($ds_khach_hang as $khach_hang)
                    <tr>
                        <td>{{$khach_hang->IDKhachHang}}</td>
                        <td>{{$khach_hang->TenKhachHang}}</td>
                        <td>{{$khach_hang->Email}}</td>     
                        <td>{{$khach_hang->TenKhachHang}}</td>
                        <td>{{$khach_hang->DiemDon}}</td>
                        <td>{{$khach_hang->GhiChu}}</td>
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
@endsection

