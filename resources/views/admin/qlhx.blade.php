@extends('admin.master-layout')
@section('content')
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
                <th colspan="2"><a href="admin/them-hang-xe"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
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
                    <td><a href="admin/sua-hang-xe/{{$hang_xe->IDHangXe}}"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="fas fa-edit"></i></button></a></td>
                    <td><a href="admin/danh-sach-xe/{{$hang_xe->IDHangXe}}"><button class="btn btn-block btn-outline-danger" data-toggle="tooltip" data-placement="top" title="DS Xe"><i class="fas fa-trash-alt"></i></button></a></td>
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