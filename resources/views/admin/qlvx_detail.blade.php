@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÔNG TIN CHI TIẾT VÉ XE</h2>
            <hr>
            <form class="form-horizontal striped-rows b-form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->IDVeXe}}" placeholder="Mã lịch trình" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">Tuyen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->TenTuyen}}" placeholder="Ghế" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->NgayDi}}" placeholder="Ngày đi" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->GioDi}}" placeholder="Giờ đi" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">TenKhachHang:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->TenKhachHang}}" placeholder="Tên khách hàng" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DienThoai:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->DienThoai}}" placeholder="Số điện thoại" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">Email:</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="" value="{{$ve_xe->Email}}" placeholder="Email" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DiemDon:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->DiemDon}}" placeholder="Điểm đón" readonly>
                    </div>
                </div>
                <!--/span-->   
                <div class="form-group row">
                    <label class="control-label col-md-3">SoXe:</label>
                    <div class="col-md-9">
                            <input type="text" class="form-control" id="" value="{{$ve_xe->SoXe}}" placeholder="Ghế" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">Ghe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->Ghe}}" placeholder="Ghế" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GiaVe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->GiaVe}}" placeholder="Giá vé" readonly>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->MoTa}}" placeholder="Mô tả" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayThem:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$ve_xe->created_at}}" placeholder="Ngày thêm" readonly>
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
                                    <a href="./qlvx_edit.html"><button type="button" class="btn btn-success">Edit</button></a>
                                    <a href="./qlvx.html"><button type="button" class="btn btn-dark">Cancel</button></a>
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
   
@endsection