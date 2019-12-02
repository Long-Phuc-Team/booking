@extends('admin.master-layout')
@section('content')
<!-- content -->
<div class="col-12 content">
    <div class="container">
        <h2 class="pt-1">DANH SÁCH VÉ XE</h2>
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
                <col width="200" span="1">
                <col width="100" span="1">
                <col width="100" span="1">
                <col width="180" span="1">
                <col width="180" span="1">
                <col width="180" span="1">
                <col width="180" span="1">
                <col width="20" span="2">
            </colgroup>
          <thead>
            <tr>
                <th>ID</th>
                <th>Tuyen</th>
                <th>NgayDi</th>
                <th>GioDi</th>
                <th>TenKhachHang</th>
                <th>DienThoai</th>     
                <th>Ghe</th>
                <th>GiaVe</th>
                <!-- <th colspan="2"><a href="./qlvx_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th> -->
            </tr>
          </thead>
          <tbody id="myTablebd">
              @foreach ($ds_ve_xe as $ve_xe)
                <tr>
                    <td>{{$ve_xe->IDVeXe}}</td>
                    <td>{{$ve_xe->TenTuyen}}</td>
                    <td>{{$ve_xe->NgayDi}}</td>
                    <td>{{$ve_xe->GioDi}}</td>
                    <td>{{$ve_xe->TenKhachHang}}</td>
                    <td>{{$ve_xe->DienThoai}}</td>    
                    <td>{{$ve_xe->Ghe}}</td>
                    <td>{{$ve_xe->GiaVe}}</td>
                    <td><a href="./qlvx_detail.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Chi tiết"><i class="fas fa-info-circle"></i></button></a></td>
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
@endsection