@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12 content">
        <div class="container">
            <h2 class="pt-1">DANH SÁCH LỊCH TRÌNH</h2>
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
                    <col width="250" span="1">
                    <col width="180" span="1">
                    <col width="180" span="1">
                    <col width="180" span="1">
                    <col width="20" span="2">
                </colgroup>
              <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tuyen</th>
                        <th>SoXe</th>      
                        <th>GioDi</th>
                        <th>GioDen</th>
                        <th>NgayDi</th>
                        <th colspan="2"><a href="./qllt_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
                    </tr>
              </thead>
              <tbody id="myTablebd">
                  @foreach ($ds_lich_trinh as $lich_trinh)
                    <tr>
                        <td>{{$lich_trinh->IDLichTrinh}}</td>
                        <td>{{$lich_trinh->TenTuyen}}</td>
                        <td>{{$lich_trinh->SoXe}}</td>     
                        <td>{{$lich_trinh->GioDi}}</td>
                        <td>{{$lich_trinh->GioDen}}</td>
                        <td>{{$lich_trinh->NgayDi}}</td>
                        <td><a href="./qllt_detail.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Chi tiết"><i class="fas fa-info-circle"></i></button></a></td>
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