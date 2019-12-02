@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">SỬA THÔNG TIN LỊCH TRÌNH</h2>
            <hr>

            @if (count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
            @endif

            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

            <form class="form-horizontal striped-rows b-form" method="post" action="admin/sua-lich-trinh">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label col-md-3">IDLichTrinh:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$lich_trinh->IDLichTrinh}}" name="IDLichTrinh" readonly>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">Tuyen:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="IDTuyen">
                            <option value="{{$lich_trinh->IDTuyen}}">{{$lich_trinh->TenTuyen}}</option>
                            @foreach ($ds_tuyen_xe as $tuyen_xe)
                                <option value="{{$tuyen_xe->IDTuyen}}">{{$tuyen_xe->TenTuyen}}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">HangXe:</label>
                    <div class="col-md-9">
                        <select class="form-control" onchange="loadCbxXeTheoCbxHang()" id="cbx_hang_xe" name="IDHangXe">
                            <option value="{{$lich_trinh->IDHangXe}}">{{$lich_trinh->TenHangXe}}</option>
                            @foreach ($ds_hang_xe as $hang_xe)
                                <option value="{{$hang_xe->IDHangXe}}">{{$hang_xe->TenHangXe}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                        <label class="control-label col-md-3">Xe:</label>
                        <div class="col-md-9">
                            <select class="form-control" id="cbx_xe" name="SoXe">
                                <option value="{{$lich_trinh->SoXe}}">{{$lich_trinh->SoXe}}</option>
                            </select>
                        </div>
                    </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$lich_trinh->GioDi}}" placeholder="Giờ đi (Ví dụ: 17:00)" name="GioDi">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$lich_trinh->GioDen}}" placeholder="Giờ đến (Ví dụ: 19:30)" name="GioDen">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayDi:</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="" value="{{$lich_trinh->NgayDi}}" placeholder="Ngày đi" name="NgayDi" >
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GiaVe:</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="" value="{{$lich_trinh->GiaVe}}" placeholder="Giá vé" name="GiaVe" >
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$lich_trinh->MoTa}}" placeholder="Mô tả" name="MoTa">
                    </div>
                </div>
                <!--/span-->  
            </div>
            <hr>
            <div class="form-actions">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value="Save" class="btn btn-danger" name="btnLuu">
                                    <a href="./qllt.html"><button type="button" class="btn btn-dark">Cancel</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>
<!-- end content -->
<script src="assets/js/load-data.js"></script>
@endsection