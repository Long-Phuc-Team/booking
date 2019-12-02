@extends('admin.master-layout')
@section('content')
<!-- content -->
<div class="col-12 content">
    <div class="container">
        <h2 class="pt-1">DANH SÁCH XE</h2>
        <hr>
        <div class="form-group row">
            <div class="col-sm-5 text-xs-left">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">                     
            </div>
            <div class="col-sm-7"></div>
        </div>
        <table class="table table-bordered table-striped table-responsive" id="mytable">
            <colgroup>
                <col width="120" span="1">
                <col width="180" span="1">
                <col width="220" span="1">
                <col width="120" span="1">
                <col width="150" span="1">
                <col width="150" span="1">
                <col width="20" span="2">
            </colgroup>
          <thead>
            <tr>
                <th>SoXe</th>
                <th>HangXe</th>
                <th>LoaiXe</th>      
                <th>SoGhe</th>
                <th>MoTa</th>
                <th>TaoLuc</th>
                <th colspan="2"><a href="./qlx_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
            </tr>
          </thead>
          <tbody id="myTablebd">
              @foreach ($ds_xe as $xe)
                <tr>
                    <td>{{$xe->SoXe}}</td>
                    <td>{{$xe->TenHangXe}}</td>
                    <td>{{$xe->TenLoaiXe}}</td>     
                    <td>{{$xe->SoGhe}}</td>
                    <td>{{$xe->MoTa}}</td>
                    <td>{{$xe->created_at}}</td>
                    <td><a href="./qlx_detail.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Chi tiết"><i class="fas fa-info-circle"></i></button></a></td>
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