@extends('admin.master-layout')
@section('content')
<!-- content -->
    <div class="col-12 content">
        <div class="container">
            <h2 class="pt-1">DANH SÁCH TRẠNG THÁI ĐẶT VÉ XE</h2>
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
                    <col width="320" span="1">
                    <col width="200" span="1">
                    <col width="200" span="1">
                    <col width="200" span="1">
                    <col width="200" span="1">
                    <col width="20" span="2">
                </colgroup>
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Tuyen</th>
                    <th>NgayDi</th>
                    <th>GioDi</th>
                    <th>Ghe</th>
                    <th>TrangThai</th>
                    <th colspan="2"><a href="./qlttdvx_add.html"><button class="btn btn-block btn-outline-success" data-toggle="tooltip" data-placement="top" title="Thêm"><i class="fas fa-plus-circle"></i></button></a></th>
                </tr>
              </thead>
              <tbody id="myTablebd">
                  @foreach ($ds_trang_thai_dat_ve as $trang_thai)
                    <tr>
                        <td>{{$trang_thai->IDTTDV}}</td>
                        <td>{{$trang_thai->TenTuyen}}</td>
                        <td>{{$trang_thai->NgayDi}}</td>
                        <td>{{$trang_thai->GioDi}}</td>
                        <td>{{$trang_thai->Ghe}}</td>
                        @if ($trang_thai->TrangThai)
                        <td>Đã đặt</td>
                        @else
                        <td>Chưa đặt</td>
                        @endif
                        <td><a href="./qlttdvx_edit.html"><button class="btn btn-block btn-outline-info" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="fas fa-edit"></i></button></a></td>
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