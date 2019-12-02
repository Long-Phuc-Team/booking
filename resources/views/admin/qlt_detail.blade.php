@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÔNG TIN CHI TIẾT TUYẾN</h2>
            <hr>
            <form class="form-horizontal striped-rows b-form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->IDTuyen}}" placeholder="Mã tuyến" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">TenTuyen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->TenTuyen}}" placeholder="Tên tuyến" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DiemDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DiemDi}}" placeholder="Điểm đi" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DiemDen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DiemDen}}" placeholder="Điểm đến" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DoDai:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DoDai}}" placeholder="Độ dài" readonly>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">ThoiGian:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->ThoiGian}}" placeholder="Thời gian" readonly>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->MoTa}}" placeholder="Mô tả" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayThem:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->created_at}}" placeholder="Ngày thêm" readonly>
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
                                    <a href="./qlt_edit.html"><button type="button" class="btn btn-success">Edit</button></a>
                                    <a href="./qlt.html"><button type="button" class="btn btn-dark">Cancel</button></a>
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
