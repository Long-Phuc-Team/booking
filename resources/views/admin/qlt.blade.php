@extends('admin.master-layout')
@section('content')
<!-- content -->
<div class="col-12 content">
    <div class="container">
        <h2 class="pt-1">DANH SÁCH TUYẾN</h2>
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
                <col width="250" span="1">
                <col width="220" span="1">
                <col width="220" span="1">
                <col width="120" span="1">
                <col width="120" span="1">
                <col width="20" span="2">
            </colgroup>
          <thead>
            <tr>
                <th>ID</th>
                <th>TenTuyen</th>
                <th>DiemDi</th>      
                <th>DiemDen</th>
                <th>DoDai</th>
                <th>ThoiGian</th>
                <th colspan="2"><a href="./qlt_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
            </tr>
          </thead>
          <tbody id="myTablebd">
              @foreach ($ds_tuyen_xe as $tuyen)
                <tr>
                    <td>{{$tuyen->IDTuyen}}</td>
                    <td>{{$tuyen->TenTuyen}}</td>
                    <td>{{$tuyen->DiemDi}}</td>     
                    <td>{{$tuyen->DiemDen}}</td>
                    <td>{{$tuyen->DoDai}} km</td>
                    <td>{{$tuyen->ThoiGian}} giờ</td>
                    <td><a href="./qlt_detail.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Chi tiết"><i class="fas fa-info-circle"></i></button></a></td>
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